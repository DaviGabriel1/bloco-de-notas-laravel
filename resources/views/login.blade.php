@extends("layouts.main_layout")

@section('content')
<form action="{{route('auth.loginSubmit')}}" method="POST">
    @csrf
    <div class="form-content">
        <label for="username">Username:</label><br>
        <input type="text" placeholder="username" name="username" required>
    </div>
    <div class="form-content">
        <label for="password">password:</label><br>
        <input type="password" placeholder="password" name="password" required>
    </div>
    <input type="submit" value="Login">
</form>
@endsection