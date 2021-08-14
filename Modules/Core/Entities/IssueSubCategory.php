<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Modules\Core\Entities\IssueSubCategory
 *
 * @property int $id
 * @property int $issue_id
 * @property int $subcategory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\Issue[] $issues
 * @property-read int|null $issues_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\SubCategory[] $subcategories
 * @property-read int|null $subcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory whereIssueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IssueSubCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IssueSubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['issue_id', 'subcategory_id'];


}
