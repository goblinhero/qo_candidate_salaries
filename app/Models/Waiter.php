<?php

namespace App\Models;

use App\Traits\ValidateTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Waiter
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Group[] $groups
 * @property-read int|null $groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Waiter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Waiter extends Model
{
    use ValidateTrait;

    protected $visible = [
        'id',
        'updated',
        'created'
    ];

    protected $fillable = [
        'name'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

    public static function createRules() {
        return [
            'name' => 'string'
        ];
    }

    public static function updateRules() {
        return [
            'name' => 'string'
        ];
    }
}
