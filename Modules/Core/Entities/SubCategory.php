<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Modules\Core\Entities\SubCategory
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Core\Entities\Category $categories
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Core\Entities\IssueSubCategory[] $issuesubcategories
 * @property-read int|null $issuesubcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description'];

    /**
     * @return BelongsTo
     */
    public function categories(): BelongsTo
    {
        return $this->belongsTo(
            category::class,
            'category_id',
            'id'
        );
    }

    /**
     *  @return BelongsToMany
     */
    public function issues():BelongsToMany
    {
        return $this-> BelongsToMany(
            issue::class,
            'issue_subcategory',
            'issue_id',
            'subcategory_id',
        );
    }
}
