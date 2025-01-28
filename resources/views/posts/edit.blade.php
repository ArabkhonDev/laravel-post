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
                
                <form action="{{route('posts.update', ['post'=>$post->id])}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium"
                            href="">{{ $post->created_at }}</a>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="post title" value="{{$post->title}}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="short_content" placeholder="post short content" value="{{$post->short_content}}">
                        @error('short_content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="body" placeholder="post body" value="{{$post->body}}">
                        @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="photo" placeholder="post photo" value="{{asset('storage/'.$post->photo)}}">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" name="updated" class="btn  btn-sm btn-primary py-2">Saqlash</button>
                    <a class="btn btn-sm btn-danger py-2" href="{{ route('posts.show', ['post' => $post->id]) }}">Bekor qilish</a>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main>
