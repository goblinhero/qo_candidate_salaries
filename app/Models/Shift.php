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
