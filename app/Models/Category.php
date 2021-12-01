<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static orderby(string $string, string $string1)
 * @method static findOrFail($id)
 * @method static where(string $string, $id)
 */
class Category extends Model
{
    protected $fillable = ['name'];
}
