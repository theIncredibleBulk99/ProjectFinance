<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <h1>Detail Transaction</h1>



    <table class="table table-bordered">

        <tbody>
            @foreach ($data as $product)
            <tr>
                <td>
                    <th>ID_transaksi</th>
                    </td>
                <td>{{ $product->id_transaksi }}</td>
            <tr>
                <tr>
                    <td>
                        <th>nama_transaksi</th>
                        </td>
                    <td>{{ $product->nama_transaksi }}</td>
                <tr>
                    <td>
                        <th>tanggal_transaksi</th>
                        </td>
                    <td>{{ $product->tanggal_transaksi }}</td>
                </tr>
                <tr>
                   <td><th>jumlah_transaksi</th></td>
                    <td>{{ $product->jumlah_transaksi }}</td>
                </tr>
                <tr>
                    <td><th>jenis_transaksi</th></td>
                    <td>{{ $product->jenis_transaksi }}</td>
                </tr>
                <tr>
                    <td><th>catatan</th></td>
                    <td>{{ $product->catatan }}</td>
                </tr>
                <tr>
                    <td><th>bukti_transaksi</th></td>
                    <td>{{ $product->bukti_transaksi }}</td>
                </tr>
                <tr>
                    <td><th>pihak_terlibat</th></td>
                    <td>{{ $product->pihak_terlibat }}</td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
