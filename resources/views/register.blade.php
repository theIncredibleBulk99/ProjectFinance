<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ URL::asset('css/register.css'); }}">
</head>
<body>
    <div class="cover">
        <div class="texts">
            <h1>Register</h1>
            <p>Newcomer! Let's make an account for you.</p>
        </div>
        <form action="{{ route('register') }}" method="post" class="login-form">
            @csrf
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="name">Name</label><br>
                    <input class="form-input" type="text" id="name" name="name" required>
                    <br>
                </div>
        
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="email">E-Mail Address</label><br>
                    <input class="form-input" type="email" id="email" name="email" required>
                    <br>
                </div>
            </div>
    
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="password">Password</label><br>
                    <input class="form-input" type="password" id="password" name="password" required>
                    <br>
                </div>
        
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="password_confirmation">Confirm Password</label><br>
                    <input class="form-input" type="password" id="password_confirmation" name="password_confirmation" required>
                    <br>
                </div>
            </div>
    
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="division">Division</label><br>
                    <input class="form-input" type="text" id="division" name="division" required>
                    <br>
                </div>
        
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="sex">Sex</label><br>
                    <select id="sex" name="sex" required>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                <br>
                </div>
            </div>
    
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="birthDate">Birth Date</label><br>
                    <input class="form-input" type="date" id="birthDate" name="birthDate" required>
                    <br>
                </div>
        
                <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px;">
                    <label for="phoneNumber">Phone Number</label><br>
                    <input class="form-input" type="text" id="phoneNumber" name="phoneNumber" required>
                    <br>
                </div>
            </div>
    
            <div style="display: flex; flex-direction: column;">
                <label for="address">Address</label><br>
                <input id="address" class="form-input" type="text" id="address" name="address" required>
                <br>
            </div>
    
            <button class="form-submit" type="submit">Register</button>
        </form>
    </div>
</body>
</html>
