<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Modules\Core\Entities\Issue
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $uuid
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\IssueSubCategory[] $issuesubcategories
 * @property-read int|null $issuesubcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Issue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Issue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Issue query()
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Issue whereUuid($value)
 * @mixin \Eloquent
 */
class Issue extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'uuid', 'slug'];

    /**
     * @return HasMany
     */

    public function comments(): HasMany
    {
        return $this->HasMany(
            comment::class,
            'issue_id'
        );
    }

    /**
     *  @return BelongsToMany
     */
    public function categories():BelongsToMany
    {
        return $this-> BelongsToMany(
            category::class,
            'issue_Category',
            'issue_id',
            'category_id',
        );
    }

    /**
     *  @return BelongsToMany
     */
    public function subcategories():BelongsToMany
    {
        return $this-> BelongsToMany(
            subcategory::class,
            'issue_subcategory',
            'issue_id',
            'subcategory_id',
        );
    }
}
