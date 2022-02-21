<form action="{{ route('register.attempt') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
    @error('name')
        {{ $message }}
    @enderror
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    @error('email')
        {{ $message }}
    @enderror
    <input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
    @error('password')
        {{ $message }}
    @enderror
    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
        placeholder="Password Confirm">
    <button type="submit">
        Register
    </button>
</form>
