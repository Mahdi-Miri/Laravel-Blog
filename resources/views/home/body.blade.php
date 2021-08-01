@foreach($post as $post)
    <div class="container" >
    <div class="row ">
        <div class="card" style="width: 18rem;">
            <img src="{{url($post->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->price}}</p>
                <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">دیدن</a>
            </div>
        </div>
    </div>
    </div>
@endforeach
