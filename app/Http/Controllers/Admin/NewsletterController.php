<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function create(NewsletterRequest $request)
    {

        if(Newsletter::where('email' , $request->get('email'))->get() == null){
            Newsletter::create([
                'email'=>$request->get('email')
            ]);
            return redirect()->back();
        }
        else{
            session()->flash('msg' , 'wgit : this mail has registed');
            return redirect()->back();
        }

    }
}
