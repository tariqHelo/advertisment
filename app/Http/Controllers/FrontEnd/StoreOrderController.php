<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;

class StoreOrderController extends Controller
{
  public function store(Request $request){
    //  dd($request->all());
   //  $request['published'] = $request['published'] ? 1 : 0;
     $imageName = basename($request->imageFile->store("public"));
     $request['image'] = $imageName;
     $request['user_id'] = auth()->id();
     Order::create($request->all());
     session()->flash('msg', "s: Order product create successfully");
     return redirect('home');
   
   }
}
