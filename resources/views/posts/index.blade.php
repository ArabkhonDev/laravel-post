<x-layouts.main>
    <x-slot:title>
        Blog
    </x-slot>

    <x-page-header>
        BLog
    </x-page-header>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
          
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    
                    <h1 class="section-title mb-3">Oxirgi postlar</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5 w-75">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $post->photo) }}"
                                alt="">
                            <div class="blog-date">
                                <p class="font-weight-bold mb-n1">{{ $post->id }}</p>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium"
                                href="">{{ $post->created_at }}</a>
                        </div>
                        <h5 class="font-weight-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4 w-50">{{ $post->short_content }}</p>
                        <a class="btn btn-sm btn-primary py-2"
                            href="{{ route('posts.show', ['post' => $post->id]) }}">Read More</a>
                    </div>
                @endforeach
                {{-- <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg justify-content-center mb-0">
                            
                            <li class="page-item disabled">
                                <a class="page-link" href="{{$posts->previousPageUrl()}}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            @for($i = 1; $i<=$posts->lastPage(); $i++ )
                                <li class="page-item active px-1"><a class="page-link" href="{{$posts->url($i)}}">{{$i}}</a></li>
                            @endfor
                            <li class="page-item">
                                <a class="page-link" href="{{$posts->nextPageUrl()}}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
            {{$posts->links()}}

        </div>
    </div>
    <!-- Blog End -->
</x-layouts.main>
