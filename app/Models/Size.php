<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderby(string $string, string $string1)
 * @method static create(array $array)
 * @method static findOrFail($id)
 * @method static where(string $string, $id)
 */
class Size extends Model
{
    protected $fillable = ['size'];

    protected $appends = ['text'];

    public function getTextAttribute(){
        return $this->size;
    }
}
