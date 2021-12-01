<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderby(string $string, string $string1)
 * @method static where(string $string, $id)
 * @method static findOrFail($id)
 * @method static create(array $array)
 */
class Brand extends Model
{
    protected $fillable = ['name'];
}
