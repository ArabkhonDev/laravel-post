<x-layouts.main>
    <x-slot:title>
        Create Post
    </x-slot>

    <x-page-header>
        Create Post
    </x-page-header>

    <div class="container w-25 border rounded">
        <form action="{{ route('posts.store') }}" method="POST" class="py-3 " enctype="multipart/form-data">
            @csrf
            <h3>Post yarating</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="post title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="short_content" placeholder="post short content" value="{{ old('short_content')}}">
                @error('short_content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="body" placeholder="post body" value="{{old('body')}}">
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" class="form-control " name="photo" placeholder="post image" value="{{old('photo')}}">
                @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" name="created" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-layouts.main>
