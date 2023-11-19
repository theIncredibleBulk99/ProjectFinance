<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction List</title>
    <!-- Add your CSS styles or include Bootstrap here -->
</head>
<body>
    <div class="container mt-5">
        <h2>Transaction List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>nama_transaksi</th>
                    <th>tanggal_transaksi</th>
                    <th>jumlah_transaksi</th>
                    <th>jenis_transaksi</th>
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
</body>
</html>
