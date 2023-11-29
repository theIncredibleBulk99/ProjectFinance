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

@section('content')
    <!-- Your view content goes here -->
    <form action="{{ route('postTransactionApi') }}" method="post">
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
