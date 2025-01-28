<x-layouts.main>
    <x-slot:title>
        Post edit
    </x-slot>

    <x-page-header>
        Post edit
    </x-page-header>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="/img/blog-1.jpg" alt="">
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
                <p class="mb-4">{{ $post->short_contect }}</p>
                <a class="btn btn-sm btn-danger py-2" href="{{ route('posts.update', ['post' => $post->id]) }}">Update</a>
                <a class="btn btn-sm btn-dark py-2" href="{{ route('posts.destroy', ['post' => $post->id]) }}">Delete</a>
            </div>
        </div>
    </div>
</x-layouts.main>
