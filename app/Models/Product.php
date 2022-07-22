<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'discount',
        'thumbnail',
        'status',
        'description',
        'inventory',
        'color',
        'slug',
    ];

  /**
   * Get the category that owns the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function categories()
  {
      return $this->belongsToMany(Category::class);
  }
  /**
   * Get the brand that owns the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMnay
   */
  public function brands()
  {
      return $this->belongsToMany(Brand::class);
  }

  /**
   * Get all of the product_images for the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function product_images()
  {
      return $this->hasMany(Product_image::class);
  }
}

