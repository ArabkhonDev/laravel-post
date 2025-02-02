<x-layouts.auth>
    <x-slot:title>
        Login
    </x-slot>


    <form method="POST" action="{{route('authenticate')}}" class="container w-50 mt-4">
        @csrf
        <center>
            <h1>Kirish</h1>
        </center>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" id="exampleInputEmail1" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Parol</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Parol">
        </div>
        <button type="submit" class="btn btn-primary">Kirish</button>
    </form>
    <center>
        <p>Accountingiz yo'qmi?</p>
        <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>
    </center>
</x-layouts.auth>
