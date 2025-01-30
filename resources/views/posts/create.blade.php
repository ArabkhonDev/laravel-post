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
                <h3>Kategoriyasini tanlang</h3>
                <select name="category" id="" lass="form-control">
                    <option value="1">Web Development</option>
                    <option value="2">Web Design</option>
                    <option value="3">Online Marketing</option>
                    <option value="4">Keyword Research</option>
                    <option value="4">Email Marketing</option>
                </select>
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
