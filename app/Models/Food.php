<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    // class name and table name may be different !
    protected $table = 'foods';
    protected $primaryKey = 'id';
    // if you dont want to use created_at/updated_at? 
    public $timestamps = true;
    // protected $dateFormat = 'h:m:s';
    protected $fillable = ['name', 'count', 'description', 'category_id', 'image_path'];
    // a food belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
