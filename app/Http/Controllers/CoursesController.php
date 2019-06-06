<?php

namespace App\Http\Controllers;

use App\courseFeedback;
use App\courses;
use App\programmingLanguages;
use App\userCourseUnlocks;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Response;
use setasign\Fpdi\Fpdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show', 'generateCertificate', 'completed', 'feedback']);
        $this->middleware('auth')->only(['show', 'generateCertificate', 'completed', 'feedback']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $courses = courses::all();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $languages = programmingLanguages::all();

        return view('courses.create', [
            'languages' => $languages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:300'],
            'duration' => ['required', 'string', 'max:11'],
            'difficulty' => ['required', 'numeric', 'between:0,3'],
            'price' => ['required', 'numeric', 'between:0,1000'],
            'programming_language_id' => ['required', 'exists:programming_languages,id'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ]);

        $validated['image'] = $request->file('image')->store('courseImages', 'public');

        courses::create($validated);

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param courses $course
     * @return Response
     */
    public function show(courses $course)
    {
        if (Auth()->user()->can('view', $course)) {
            if (Auth()->user()->isAdmin() && $course->Unlocked() === false) {
                userCourseUnlocks::create([
                    'user_id' => Auth()->user()->id,
                    'course_id' => $course->id,
                ]);
            }
            return view('courses.show', [
                'course' => $course
            ]);
        } else {
            if (Auth()->user()->PayCredits($course->price)) {
                userCourseUnlocks::create([
                    'user_id' => Auth()->user()->id,
                    'course_id' => $course->id,
                ]);
                return view('courses.show', [
                    'course' => $course
                ]);
            } else {
                return view('courses.notEnoughCredits');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param courses $course
     * @return Response
     */
    public function edit(courses $course)
    {
        $languages = programmingLanguages::all();

        return view('courses.edit', [
            'course' => $course,
            'languages' => $languages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param courses $courses
     * @return Response
     */
    public function update(Request $request, courses $course)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:300'],
            'duration' => ['required', 'string', 'max:11'],
            'difficulty' => ['required', 'numeric', 'between:0,3'],
            'price' => ['required', 'numeric', 'between:0,1000'],
            'programming_language_id' => ['required', 'exists:programming_languages,id'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($course->image);
            $validated['image'] = $request->file('image')->store('courseImages', 'public');
        } else {
            $validated['image'] = $course->image;
        }

        $course->update($validated);

        return redirect(route('courses.show', [$course->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param courses $courses
     * @return Response
     * @throws Exception
     */
    public function destroy(courses $course)
    {
        $course->delete();
        return redirect(route('courses.index'));
    }

    public function generateCertificate(courses $course)
    {
        if (Auth::check() && $course->Completed()) {
            $xPos = 86;
            $pdf = new FPDI('l');
            $pagecount = $pdf->setSourceFile(base_path('resources/certificate.pdf'));
            $pdf->SetMargins(0, 0, 0);

            $tpl = $pdf->importPage(1);
            $pdf->AddPage();
            $pdf->SetMargins(0, 0, 0);
            $pdf->SetAutoPageBreak(false);

            // Use the template
            $pdf->useTemplate($tpl);

            // Set the font
            $pdf->SetFont('Helvetica');

            // add a cell example
            // $pdf->Cell($width, $height, $text, $border, $fill, $align);

            // Course name
            $pdf->SetFontSize('20'); // set font size
            $pdf->SetXY($xPos, 70); // set the position of the box
            $pdf->Cell(0, 10, $course->name, 0, 0, 'C'); // add the text, align to Center of cell

            // User name
            $pdf->SetFontSize('20');
            $pdf->SetXY($xPos, 105);
            $pdf->Cell(0, 10, Auth::user()->name, 0, 0, 'C'); // add the text, align to Center of cell

            // Add the date
            $pdf->SetFontSize('20');
//            $pdf->SetXY(257, 196);
            $pdf->SetXY($xPos, 135);
            $pdf->Cell(0, 10, Carbon::now()->format('d-m-Y'), 0, 0, 'C');

            // Render PDF to browser
            return $pdf->Output();
        } else {
            return back()->withErrors(['You don\'t have permissions to access this page. We have brought you back to a safe place!']);
        }
    }

    public function completed(courses $course)
    {
        if (Auth::check() && $course->Completed()) {
            return view('courses.completed', [
                'course' => $course
            ]);
        } else {
            return back()->withErrors(['You don\'t have permissions to access this page. We have brought you back to a safe place!']);
        }
    }

    public function feedback(Request $request, courses $course)
    {
        if (Auth::check() && $course->Completed()) {
            $validated = $request->validate([
                'comment' => ['required', 'string', 'max:2048'],
            ]);

            $validated['course_id'] = $course->id;
            courseFeedback::create($validated);
            return redirect(route('courses.index'));
        } else {
            return back()->withErrors(['You don\'t have permissions to access this page. We have brought you back to a safe place!']);
        }
    }
}
