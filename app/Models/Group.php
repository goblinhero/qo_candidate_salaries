<?php

namespace App\Models;

use App\Traits\ValidateTrait;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use ValidateTrait;

    protected $visible = [
        'id',
        'base_salary',
        'updated',
        'created'
    ];

    public function User user

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
