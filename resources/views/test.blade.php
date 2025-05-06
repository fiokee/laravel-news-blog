
<div>
    @foreach ( $blogs as $blog )
        
    <h1>{{ $blog->title}}</h1>
    <img src="{{ asset('storage/' . $blog->banner_image) }}" alt="{{$blog->title}}">
    <p>{{$blog->description}}</p>
    @endforeach
</div>


<div class="container py-4">
    <div class="row g-4">
      @foreach ($blogs as $blog)
        <div class="col-md-4">
          <a href="page1.html" class="text-decoration-none">
            <div class="hero-card">
              <img src="{{ asset('storage/' . $blog->banner_image) }}" alt="{{ $blog->title }}">
              <div class="text-overlay">
                <span class="badge bg-success">LIFESTYLE</span>
                <h2 class="mt-2">{{ $blog->title }}</h2>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>