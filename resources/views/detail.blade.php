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

                <tr>
                    <td><h4>Tanggal Transaksi</h4></td>
                    <td>{{ $data['data']['createdAt'] }}</td>
                </tr>
                <tr>
                    <td><h4>Nama Transaksi</h4></td>
                    <td>{{ $data['data']['name'] }}</td>
                </tr>
                <tr>
                    <td><h4>Pihak terlibat</h4></td>
                    <td>{{ $data['data']['seller_name'] }}</td>
                </tr>

                <tr>
                    <td><h4>Jenis Transaksi</h4></td>
                    <td>{{ $data['data']['type'] }}</td>
                </tr>
                <tr>
                    <td><h4>Jumlah barang</h4></td>
                    <td>{{ $data['data']['amount'] }}</td>
                </tr>
                <tr>
                    <td><h4>Total</h4></td>
                    <td>{{ $data['data']['price'] }}</td>
                </tr>
                <tr>
                    <td><h4>Catatan</h4></td>
                    <td>{{ $data['data']['note'] }}</td>
                </tr>
                <tr>
                    <td><h4>Bukti</h4></td>
                    <td>{{ $data['data']['receipt'] }}</td>
                </tr>


        </tbody>
    </table>

</body>

</html>
