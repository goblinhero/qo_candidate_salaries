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
 * @property int $id
 * @property int|null $group_id
 * @property string $description
 * @property int $hourly_supplement
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary whereHourlySupplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupplementalSalary whereUpdatedAt($value)
 */
class SupplementalSalary extends Model
{
    use ValidateTrait;

    protected $visible = [
        'id',
        'description',
        'hourly_supplement',
        'updated',
        'created'
    ];

    protected $fillable = [
        'description',
        'hourly_supplement'
    ];

    public static function createRules() {
        return [
            'description'       => 'string',
            'hourly_supplement' => 'int|min:0',
        ];
    }

    public static function updateRules() {
        return [
            'description'       => 'string',
            'hourly_supplement' => 'int|min:0',
        ];
    }

}
