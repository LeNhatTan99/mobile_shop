<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use HasFactory;

    const VIEWABLE = [
        'dien-thoai' => 'mobile',
        'may-tinh-bang' => 'tablet',
        'phu-kien' => 'accessory',
    ];

    protected $fillable=[
        'category_name',
        'slug',
    ];

    /**
     * Manu-to-many
     * The Product that belong to the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
