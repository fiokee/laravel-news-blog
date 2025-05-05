
<div>
    @foreach ( $blogs as $blog )
        
    <h1>{{ $blog->title}}</h1>
    <img src="{{ asset('storage/' . $blog->banner_image) }}" alt="{{$blog->title}}">
    <p>{{$blog->description}}</p>
    @endforeach
</div>