
<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Our Blog</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
            <div class="row mb-3 align-items-stretch">
              @php $posts = \App\Models\Post::get() @endphp
              @foreach ($posts as $post )
                   <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                  <div class="h-entry">
                    <img src="{{asset('classyads/images/hero_1.jpg')}}" alt="Image" class="img-fluid rounded">
                    <h2 class="font-size-regular"><a href="#" class="text-black">{{ $post->title }}</a></h2>
                    <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> {{ date('M',strtotime($post->created_at))}}, {{ date('Y',strtotime($post->created_at))}}<span class="mx-1">&bullet;</span> <a href="#">News</a></div>
                    <p>{{ $post->description }}</p>
                  </div> 
                </div>
              @endforeach
            
           <div class="col-12 text-center mt-4">
            <a href="{{ route('blog') }}" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
          </div>
        </div>
      </div>
    </div>
<div class="text-xs-center" >

{{ $pos->links("pagination::bootstrap-4") }}

</div>
