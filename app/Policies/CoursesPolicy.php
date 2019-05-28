<?php

namespace App\Policies;

use App\User;
use App\courses;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CoursesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the courses.
     *
     * @param  \App\User  $user
     * @param  \App\courses  $courses
     * @return mixed
     */
    public function view(User $user, courses $course)
    {
        if (Auth::check() && $course->Unlocked()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can create courses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the courses.
     *
     * @param  \App\User  $user
     * @param  \App\courses  $courses
     * @return mixed
     */
    public function update(User $user, courses $courses)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the courses.
     *
     * @param  \App\User  $user
     * @param  \App\courses  $courses
     * @return mixed
     */
    public function delete(User $user, courses $courses)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the courses.
     *
     * @param  \App\User  $user
     * @param  \App\courses  $courses
     * @return mixed
     */
    public function restore(User $user, courses $courses)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the courses.
     *
     * @param  \App\User  $user
     * @param  \App\courses  $courses
     * @return mixed
     */
    public function forceDelete(User $user, courses $courses)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
