<?php

namespace App\Models;

use App\Traits\ValidateTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Shift
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift query()
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $group_id
 * @property int|null $waiter_id
 * @property string|null $estimated_start
 * @property string|null $estimated_end
 * @property string|null $actual_start
 * @property string|null $actual_end
 * @property int $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Group|null $group
 * @property-read \App\Models\Waiter|null $waiter
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereActualEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereActualStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereEstimatedEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereEstimatedStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shift whereWaiterId($value)
 */
class Shift extends Model
{
    use ValidateTrait;

    protected $visible = [
        'id',
        'group_id',
        'waiter_id',
        'salary',
        'estimated_start',
        'estimated_end',
        'actual_start',
        'actual_end',
        'approved',
        'updated',
        'created'
    ];

    protected $fillable = [
        'group_id',
        'waiter_id',
        'salary',
        'estimated_start',
        'estimated_end',
        'actual_start',
        'actual_end',
        'approved'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function waiter()
    {
        return $this->belongsTo(Waiter::class);
    }

    public function calculate_salary() {
        $this->salary = 125;
    }

    public static function createRules() {
        return [
        ];
    }

    public static function updateRules() {
        return [
        ];
    }

}
