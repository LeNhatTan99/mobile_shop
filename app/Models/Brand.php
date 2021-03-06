<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    const VIEWABLE = [
        'apple' => 'apple',
        'samsung' => 'samsung',
        'oppo' => 'oppo',
        'vivo' => 'vivo',
        'xiaomi' => 'xiaomi',
    ];
    protected $fillable = [
        'name',
        'logo',
        'slug',
    ];
 /**
  * The products that belong to the Brand
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
 public function products()
 {
     return $this->belongsToMany(Product::class);
 }
}
