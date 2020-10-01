<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'product_name',
        'Address',
        'image',
        'contact',
        'description',
        'rating_id',
        'category_id',
        'quantity',
        'reviews',
        'price',
        'total_price',
        'order_status_id', 
        'user_id'       
    ];
    protected $appends = ["category_title","category_rating","order_status_name"];
    public function getCategoryTitleAttribute(){
        //return $this->product->title;
        return Category::find($this->category_id)->title;
    }
    public function getRatingTitleAttribute(){
        //return $this->product->title;
        return Category::find($this->category_id)->rating;
    }
    public function getOrderStatusNameAttribute(){
        return OrderStatus::find($this->order_status_id)->title;
        //return $this->orderStatus->title;
    }
    public function user(){
        return $this->belongsTo("App\User");
    }
    public function category(){
        return $this->belongsTo("App\Models\Category");
    }
    public function orderStatus(){
        return $this->belongsTo("App\Models\OrderStatus");
    }
}
