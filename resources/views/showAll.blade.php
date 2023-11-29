<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transactions</title>
</head>
<body>

<h1>All Transactions</h1>

@if(isset($message))
    <p>{{ $message }}</p>
@else
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Seller Name</th>
                <th>Note</th>
                <th>Receipt</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data->data as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->createdAt }}</td>
                    <td>{{ $transaction->updatedAt }}</td>
                    <td>{{ $transaction->name }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->price }}</td>
                    <td>{{ $transaction->seller_name }}</td>
                    <td>{{ $transaction->note }}</td>
                    <td>{{ $transaction->receipt }}</td>
                    <td>{{ $transaction->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

</body>
</html>
