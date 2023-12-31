<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
                <a class="nav-link" href="{{ route('getAll', ['from'=> '2023-4-5','to'=>date('Y-m-d')]) }}">History</a>
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

    <p>Hello, Rangga Andhito Damahindra</p>

        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex flex-column justify-content-start align-items-start">
                <p class="header">Total Balance</p>
                <p class="values p-1">Rp5.000.000,00</p>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <div class="d-flex flex-column justify-content-end align-items-end">
                    <p class="header">Bank</p>
                    <p id="bank" class="values p-1">Bank Mandiri</p>
                </div>
                <div class="d-flex flex-column justify-content-end align-items-end">
                    <p class="header">Account Number</p>
                    <p class="values p-1">0858773090</p>
                </div>
            </div>
        </div><br><br>

    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="graph p-6 bg-white rounded shadow" style="max-width: 1915px; width: 100%;">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>

    <div class="transactions" >
        <p>Transaction List</p>
        <table border="1" class="summary-table">
            <thead>
                <tr class="table-header d-flex flex-row justify-content-between">
                    <th>Name</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $product)
                    <tr>
                        <td>{{ $product->nama_transaksi }}</td>
                        <td>{{ $product->tanggal_transaksi }}</td>
                        <td>{{ $product->jumlah_transaksi }}</td>
                        <td>{{$product->jenis_transaksi }}</td>
                        <td> <a href = "{{ route('getOne',['id' => $product->id_transaksi]) }}">show details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}

     <!-- Include Bootstrap JS and other scripts -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
