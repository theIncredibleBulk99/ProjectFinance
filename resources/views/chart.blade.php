<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analytics Dashboard</title>
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }} ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <img src="https://seeklogo.com/images/F/finance-logo-6277C6570C-seeklogo.com.png" class="rounded-circle" style="width: 30px; height: 30px; margin-left: 10px;"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.show') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('postData') }}">Input</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('analytics.show') }}">Analytics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('history.show') }}">History</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Windows_10_Default_Profile_Picture.svg/512px-Windows_10_Default_Profile_Picture.svg.png?20221210150350" class="rounded-circle" style="width: 30px; height: 30px; margin-left: 10px;"></a>
            </li>
        </ul>
    </nav>
    {{-- NAVBAR --}}

    <p>Analytics Dashboard</p>
    <br><br>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-white rounded shadow" style="max-width: 1915px; width: 100%;">
                {!! $line_chart->container() !!}
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-white rounded shadow" style="max-width: 1915px; width: 100%;">
                {!! $donut_chart->container() !!}
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-white rounded shadow" style="max-width: 1915px; width: 100%;">
                {!! $bar_chart->container() !!}
            </div>
        </div>
    </div>
    <br><br>


    <script src="{{ $line_chart->cdn() }}"></script>

    {{ $line_chart->script() }}

    <script src="{{ $donut_chart->cdn() }}"></script>

    {{ $donut_chart->script() }}

    <script src="{{ $bar_chart->cdn() }}"></script>

    {{ $bar_chart->script() }}

     <!-- Include Bootstrap JS and other scripts -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
