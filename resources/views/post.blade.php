
    @include('layouts.header')

    <div class="image" style="background-image: url('/images/{{$post->image}}')">
        <h1 class="heading">{{$post->title}}</h1>
    </div>

    <p>{{$post->body}}</p>


  @include('layouts.footer')
