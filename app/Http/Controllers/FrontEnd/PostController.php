<?php


namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('dashboard.post.create');
    }

    public function store(Request $request){
        $request['user_id'] = auth()->id();
//        dd($request->all());
        $request['published'] = $request['published'] ? 1 : 0;
        $imageName = basename($request->imageFile->store('public'));
        $request['image'] = $imageName;
        Post::create($request->all());
        session()->flash('msg' , 's: comment created successfully');
        return redirect(route('post.index'));
    }

}
