<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'courses';
    protected $fillable =['id','storeId' , 'name' , 'price' , 'icon' , 'size'];
    protected $guarded = ['created_at' , 'updated_at'];

    public function store(){
        return $this->belongsTo(Store::class,'storeId');
    }
}
