<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'stores';
    protected $fillable =['id' ,'name' , 'phoneNumber' , 'prefrences' , 'municipality' , 'adress' , 'icon' , 'description'];
    protected $guarded = ['created_at' , 'updated_at'];

    public function courses(){
        return $this->hasMany(Course::class , 'id');
    }
}
