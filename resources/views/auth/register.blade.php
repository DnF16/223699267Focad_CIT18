<h1>Register</h1>
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form>
<a href="{{ route('login') }}">Already have an account? Login here</a>
