<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modules\Core\Entities\comment
 *
 * @property int $id
 * @property int $issue_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Core\Entities\Issue $issues
 * @method static \Illuminate\Database\Eloquent\Builder|comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|comment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|comment whereIssueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|comment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class comment extends Model
{
    use HasFactory;

    protected $fillable = ['issue_id', 'body'];

    /**
     * @return BelongsTo
     */
    public function issues(): BelongsTo
    {
        return $this->belongsTo(
            issue::class,
            'issue_id',
            'id'
        );
    }
}
