<?php

namespace App\Policies;

use App\User;
use App\courseChapterLessons;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class courseChapterLessonsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the course chapter lessons.
     *
     * @param User $user
     * @param courseChapterLessons $courseChapterLessons
     * @return mixed
     */
    public function view(User $user, courseChapterLessons $courseChapterLesson)
    {
        if (Auth::check() && $courseChapterLesson->Chapter()->Course()->Unlocked() || Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can create course chapter lessons.
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
     * Determine whether the user can update the course chapter lessons.
     *
     * @param User $user
     * @param courseChapterLessons $courseChapterLessons
     * @return mixed
     */
    public function update(User $user, courseChapterLessons $courseChapterLessons)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the course chapter lessons.
     *
     * @param User $user
     * @param courseChapterLessons $courseChapterLessons
     * @return mixed
     */
    public function delete(User $user, courseChapterLessons $courseChapterLessons)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the course chapter lessons.
     *
     * @param User $user
     * @param courseChapterLessons $courseChapterLessons
     * @return mixed
     */
    public function restore(User $user, courseChapterLessons $courseChapterLessons)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the course chapter lessons.
     *
     * @param User $user
     * @param courseChapterLessons $courseChapterLessons
     * @return mixed
     */
    public function forceDelete(User $user, courseChapterLessons $courseChapterLessons)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
