
 @extends("frontend.layout")
@section("title","Blog Us")
@section("content")
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('classyads/images/hero_1.jpg')}}" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Blog Us</h1>
                <p class="mb-0">Choose product you want</p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <div class="row mb-3 align-items-stretch">
                @php $posts = \App\Models\Post::paginate(3) @endphp
                  @foreach ($posts as $post )
                   <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                       <a href="{{route('front-post.show' , $post->id)}}">
                  <div class="h-entry">
                    <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid rounded">
                    <h2 class="font-size-regular"><a href="#" class="text-black">{{ $post->title }}</a></h2>
                    <div class="meta mb-3">{{ $post->user->name }}<span class="mx-1">&bullet;</span> {{ date('M',strtotime($post->created_at))}}, {{ date('Y',strtotime($post->created_at))}}</div>
                    <p>{{ $post->description }}</p>
                  </div>
                       </a>
                </div>
              @endforeach
              {{-- <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{asset('classyads/images/img_1.jpg')}}" alt="Image" class="img-fluid rounded">
                  <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
                  <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
              </div> --}}
            </div>

              {{ $posts->links() }}


               <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form"  action="{{ route('add_comment') }}" method="post" id="commentForm">
                             @csrf 
				                   	@include("shared.msg")
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                              <textarea class="form-control w-100 {{$errors->has('comment')?'is-invalid':''}}"  name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment" >{{ old('comment') }}</textarea>
                                       
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input value="{{ old('name') }}" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="name" type="text" placeholder="Name">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input value="{{ old('email') }}" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" type="email" placeholder="Email">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Send Message</button>
                            </div>
                        </form>
                    </div>
        </div>
      </div>
    </div>
@include('site.subscribe')
@include('site.footer')
 @endsection

