<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to API</title>
</head>
<body>
    <form action="{{ route('postTransaction') }}" method="post">
        @csrf

        <label for="nama_transaksi">Nama Transaksi:</label>
        <input type="text" id="nama_transaksi" name="nama_transaksi" required>
        <br>

        <label for="tanggal_transaksi">Tanggal Transaksi:</label>
        <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" required>
        <br>

        <label for="jumlah_transaksi">Jumlah Transaksi:</label>
        <input type="number" id="jumlah_transaksi" name="jumlah_transaksi" required>
        <br>

        <label for="jenis_transaksi">Jenis Transaksi:</label>
        <select id="jenis_transaksi" name="jenis_transaksi" required>
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
        </select>
        <br>

        <label for="bukti_transaksi">Bukti Transaksi:</label>
        <input type="text" id="bukti_transaksi" name="bukti_transaksi"  required>
        <br>

        <label for="pihak_terlibat">Pihak Terlibat:</label>
        <input type="text" id="pihak_terlibat" name="pihak_terlibat" required>
        <br>

        <label for="catatan">Catatan:</label>
        <textarea id="catatan" name="catatan" rows="4" required></textarea>
        <br>

        <button type="submit">Submit</button>
    </form>
    {{-- <button href = "{{ route('getOne') }}">KONTOL</button> --}}
</body>
</html>
