<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\courseChapterLessons
 *
 * @property int $id
 * @property int $course_chapter_id
 * @property string $name
 * @property string $description
 * @property string $assignment
 * @property string $inputCheck
 * @property string $outputCheck
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereAssignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereCourseChapterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereInputCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereOutputCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class courseChapterLessons extends \Eloquent {}
}

namespace App{
/**
 * App\courseChapters
 *
 * @property int $id
 * @property int $course_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapters whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class courseChapters extends \Eloquent {}
}

namespace App{
/**
 * App\courseFeedback
 *
 * @property int $id
 * @property int $course_id
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class courseFeedback extends \Eloquent {}
}

namespace App{
/**
 * App\courses
 *
 * @property int $id
 * @property int $programming_language_id
 * @property string $name
 * @property string $duration
 * @property string $difficulty
 * @property string $image
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereProgrammingLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDescription($value)
 */
	class courses extends \Eloquent {}
}

namespace App{
/**
 * App\forumPostReactions
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPostReactions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPostReactions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPostReactions query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPostReactions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPostReactions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPostReactions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class forumPostReactions extends \Eloquent {}
}

namespace App{
/**
 * App\forumPosts
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereUserId($value)
 * @mixin \Eloquent
 * @property int $forum_post_reaction_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereForumPostReactionId($value)
 */
	class forumPosts extends \Eloquent {}
}

namespace App{
/**
 * App\programmingLanguages
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programmingLanguages whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class programmingLanguages extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $credits
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\userCourseUnlocks
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property int $amountOfCompletedLessons
 * @property int $amountOfLessons
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereAmountOfCompletedLessons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereAmountOfLessons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereUserId($value)
 * @mixin \Eloquent
 */
	class userCourseUnlocks extends \Eloquent {}
}

namespace App{
/**
 * App\userProgress
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_chapter_lesson_id
 * @property int $completed
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereCourseChapterLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereUserId($value)
 * @mixin \Eloquent
 */
	class userProgress extends \Eloquent {}
}

