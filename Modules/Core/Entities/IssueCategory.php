<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Modules\Core\Entities\IssueCategory
 *
 * @property int $id
 * @property int $issue_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\Issue[] $issues
 * @property-read int|null $issues_count
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory whereIssueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IssueCategory extends Model
{
    use HasFactory;

    protected $fillable = ['issue_id', 'category_id'];


}
