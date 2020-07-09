<?php

namespace App\Models;

use App\Traits\ValidateTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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
