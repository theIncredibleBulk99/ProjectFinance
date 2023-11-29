<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FinanceDiv : Monitor The Company's Finanaces</title>
    <link rel="stylesheet" href="{{ URL::asset('css/landingpage.css'); }} ">
</head>
<body>
    <div class="elements">
        <div style="margin: 180px">
            <p>FinanceDiv</p>
            <h1>Monitor The<br>Company's Finances<br><span style="color : #6FFC2D;">Easily</span></h1>
        
            <div class="forms">
                <form action="{{ route('register') }}" method="GET">
                    <button class="form-button register">Sign up</button>
                </form>
                <form action="{{ route('login') }}" method="GET">
                    <button class="form-button login">Sign in</button>
                </form>
            </div>
        </div>
    
        <img src="{{URL::asset('css/Assets/illustration.svg')}}" alt="" style="margin: 180px; width:500px;">
    </div>
</body>
</html>