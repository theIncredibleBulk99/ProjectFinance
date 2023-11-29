<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ URL::asset('css/login.css'); }}">
</head>
<body>
    <div class="cover">
        <div class="texts">
            <h1>Login</h1>
            <p>We miss u! Let's get you in.</p>
        </div>

        <form class="login-form" action="{{ route('login') }}" method="post">
            @csrf
    
            <div style="display: flex; flex-direction: column;">
                <div style="display: flex; flex-direction: column;">
                    <label for="email">Email</label><br>
                    <input class="form-input" type="email" id="email" name="email" placeholder="email" required>
                    <br>
                </div>
        
                <div style="display: flex; flex-direction: column;">
                    <label for="password">Password</label><br>
                    <input class="form-input" type="password" id="password" name="password" placeholder="password" required>
                    <br>
                </div>
            </div>
            <button class="form-submit" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
