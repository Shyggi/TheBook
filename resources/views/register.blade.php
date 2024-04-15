@section('title', 'Login')

<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('content')

    <div class="main">
        <img src="C:\xampp\htdocs\thebook\public\images\logotype.png" class="d-inline-block align-top pad" >
        <hr>
        <h2>Registration Form</h2>
        <form action="">
            <label for="first" >Username:</label>
            <input type="text" id="first" name="first" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$"
                title="Password must contain at least one number, one alphabet, one symbol, and be at least 8 characters long" required>

            <label for="repassword">Re-type Password:</label>
            <input type="password" id="repassword" name="repassword" required>

            <button type="submit"> Submit</button>
        </form>
    </div>

    @endsection
