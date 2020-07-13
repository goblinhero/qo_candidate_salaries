<?php

namespace App\Models;

use App\Traits\ValidateTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SupplementalSalary
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary query()
 * @mixin \Eloquent
 */
class SupplementalSalary extends Model
{
    use ValidateTrait;

    protected $visible = [
        'id',
        'updated',
        'created'
    ];

    protected $fillable = [
    ];

    public static function createRules() {
        return [
        ];
    }

    public static function updateRules() {
        return [
        ];
    }

}
