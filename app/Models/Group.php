<?php

namespace App\Models;

use App\Traits\ValidateTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Group
 *
 * @property int $id
 * @property string $description
 * @property int $base_salary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Waiter[] $waiters
 * @property-read int|null $waiters_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group whereBaseSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Group whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Group extends Model
{
    use ValidateTrait;

    protected $visible = [
        'id',
        'description',
        'base_salary',
        'updated',
        'created'
    ];

    public function waiters() {
        return $this->belongsToMany(Waiter::class);
    }

    protected $fillable = [
        'description',
        'base_salary',
    ];

    public static function createRules() {
        return [
            'description' => 'string',
            'base_salary' => 'integer',
        ];
    }

    public static function updateRules() {
        return [
            'description' => 'string',
            'base_salary' => 'integer',
        ];
    }
}
