<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\courseChapters
 *
 * @property int $id
 * @property int $course_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|courseChapters newModelQuery()
 * @method static Builder|courseChapters newQuery()
 * @method static Builder|courseChapters query()
 * @method static Builder|courseChapters whereCourseId($value)
 * @method static Builder|courseChapters whereCreatedAt($value)
 * @method static Builder|courseChapters whereId($value)
 * @method static Builder|courseChapters whereName($value)
 * @method static Builder|courseChapters whereUpdatedAt($value)
 * @mixin Eloquent
 */
class courseChapters extends Model
{
    protected $fillable = [
        'name', 'course_id'
    ];

    /** Returns the lessons that are linked to this chapter
     * @return Collection
     */
    public function Lessons() {
        return $this->hasMany('App\courseChapterLessons', 'course_chapter_id', 'id')->orderBy('id', 'ASC')->get();
    }

    /** Returns the course that is linked to this chapter
     * @return mixed
     */
    public function Course() {
        return $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
    }
}
