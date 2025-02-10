
<x-layouts.auth>
    <x-slot:title>
        Rogister
    </x-slot>
    
    <form method="POST" action="{{route('register.store')}}" class="container w-50 mt-4">
        @csrf
        <center>
            <h1>Ro'yxatdan o'tish</h1>
        </center>
        <div class="form-group">
            <label for="name">Ismingiz</label>
            <input type="text" id="name" class="form-control" name="name" placeholder="abdulloh">
        </div>
        <div class="form-group">
            <label for="last_name">Familyangiz</label>
            <input type="text" id="last_name" class="form-control" name="last_name" placeholder="umarov">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="email@gmail.com">
        </div>
        <div class="form-group">
            <label for="password">Parol</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Parol">
        </div>
        <div class="form-group">
            <label for="exampleInputconfirmPassword">Parol tasdiqlash</label>
            <input type="password" name="confirm_password" class="form-control" id="exampleInputconfirmPassword" placeholder="Parol tasdiqlash">
        </div>
        <button type="submit" class="btn btn-primary">Ro'yxatdan o'tish</button>
    </form>
    <center>
        <p>Accountingiz bormi?</p>
        <a href="{{ route('login') }}">Kirish</a>
    </center>
</x-layouts.auth>