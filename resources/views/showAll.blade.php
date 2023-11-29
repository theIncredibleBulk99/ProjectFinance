<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction History</title>
    <link rel="stylesheet" href="{{ URL::asset('css/home.css'); }} ">
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

    <p>Transaction History</p>

@if(isset($message))
    <p>{{ $message }}</p>
@else
    <div class="d-flex justify-content-center align-items-center">
        <table border="1">
            <thead>
                <tr class="table-header">
                    <th>ID</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Name</th>
                    <th>Recipient</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Note</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->createdAt }}</td>
                        <td>{{ $transaction->updatedAt }}</td>
                        <td>{{ $transaction->nama_transaksi }}</td>
                        <td>{{ $transaction->pihak_terlibat }}</td>
                        <td>{{ $transaction->tanggal_transaksi }}</td>
                        <td>{{ $transaction->jumlah_transaksi }}</td>
                        <td>{{ $transaction->jenis_transaksi }}</td>
                        <td>{{ $transaction->catatan }}</td>
                        <td>{{ $transaction->bukti_transaksi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
     <!-- Include Bootstrap JS and other scripts -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
