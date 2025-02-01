<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Klean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/" class="nav-item nav-link active">Bosh sahifa</a>
            <a href="{{route('about')}}" class="nav-item nav-link">Biz xaqimizda</a>
            <a href="{{route('service')}}" class="nav-item nav-link">Xizmatlarmiz</a>
            <a href="{{route('posts.index')}}" class="nav-item nav-link">Oxirgi bajargan ishlarimiz</a>
            <a href="{{route('contact')}}" class="nav-item nav-link">Aloqa</a>
        </div>
        @auth
        <a href="{{'posts.create'}}" class="btn btn-primary mr-3 d-none d-lg-block">Post yaratish</a>
        @else
        <a href="{{'/login'}}" class="btn btn-primary mr-3 d-none d-lg-block">Kirish</a>
        @endauth
    </div>
</nav>