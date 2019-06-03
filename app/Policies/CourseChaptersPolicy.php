<?php

namespace App\Policies;

use App\User;
use App\courseChapters;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class CourseChaptersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the course chapters.
     *
     * @param User $user
     * @param courseChapters $courseChapters
     * @return mixed
     */
    public function view(User $user, courseChapters $courseChapter)
    {
        if (Auth::check() && $courseChapter->Course()->Unlocked() || Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can create course chapters.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the course chapters.
     *
     * @param User $user
     * @param courseChapters $courseChapters
     * @return mixed
     */
    public function update(User $user, courseChapters $courseChapter)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the course chapters.
     *
     * @param User $user
     * @param courseChapters $courseChapters
     * @return mixed
     */
    public function delete(User $user, courseChapters $courseChapter)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the course chapters.
     *
     * @param User $user
     * @param courseChapters $courseChapters
     * @return mixed
     */
    public function restore(User $user, courseChapters $courseChapters)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the course chapters.
     *
     * @param User $user
     * @param courseChapters $courseChapters
     * @return mixed
     */
    public function forceDelete(User $user, courseChapters $courseChapter)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
