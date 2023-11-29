<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Entry</title>
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

    {{-- PAGE TITLEe --}}
    <p>Data Entry Page</p>

    {{-- INPUT FORM --}}
    <form action="{{ route('postTransaction') }}" method="post" class='vertical-form container-fluid d-flex justify-content-center align-items-center'>
        @csrf
        <div class='row-input'>
            <div class="label-input">
                <label for="nama_transaksi">Nama Transaksi</label>
                <input class="input-bar" placeholder="ex. John Doe" id="nama_transaksi" name="nama_transaksi" required>
                <br>
            </div>
            
            <div class="label-input">
                <label for="tanggal_transaksi">Tanggal Transaksi</label>
                <input class="input-bar" type="date" id="tanggal_transaksi" name="tanggal_transaksi" style="color: 959595;" required>
                <br>
            </div>
        </div>

        <div class="row-input">
            <div class="label-input">
                <label for="jumlah_transaksi">Jumlah Transaksi</label>
                <input class="input-bar" placeholder="Rp" type="number" id="jumlah_transaksi" name="jumlah_transaksi" required>
                <br>
            </div>
            
            <div class="label-input">
                <label for="jenis_transaksi">Jenis Transaksi</label>
                <select class="input-bar" id="jenis_transaksi" name="jenis_transaksi" required>
                    <option value="pemasukan">Pemasukan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                </select>
                <br>
            </div>
        </div>

        <div class="row-input">
            <div class="label-input">
                <label for="pihak_terlibat">Pihak Terlibat</label>
                <input class="input-bar" placeholder="ex. PT. Pertamini" type="text" id="pihak_terlibat" name="pihak_terlibat" required>
                <br>
            </div>
    
            <div class="label-input">
                <label for="bukti_transaksi">Bukti Transaksi</label>
                <input class="input-bar" placeholder="ex. https://drive.google.com/examplefile" type="text" id="bukti_transaksi" name="bukti_transaksi"  required>
                <br>
            </div>
        </div>

        <div class="label-input">
            <label for="catatan">Catatan</label>
            <textarea class="input-bar" id="catatan" name="catatan" rows="4"></textarea>
            <br>
        </div>

        <button class="form-submit" type="submit">Submit!</button>
    </form>
    
     <!-- Include Bootstrap JS and other scripts -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
