<h1>Reset Password</h1>
<div class="container">
<form action="{{ url('/confirmPass') }}" method="post">
    @csrf
    <h2>Password</h2>
    <input type="password" name="password" id="password">
    <h2>Confirm Password</h2>
    <input type="password" name="confirmPassword" id="confirmPassword">
    <input type="hidden" name="otp" value="{{$otp}}">
    <input type="submit" value="submit" name="submit">
</form>
</div>
