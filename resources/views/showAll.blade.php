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
                <th>Created At</th>
                <th>Name</th>
                <th>Price</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data->data as $transaction)
                <tr>

                    <td>{{ $transaction->createdAt }}</td>

                    <td>{{ $transaction->name }}</td>

                    <td>{{ $transaction->price }}</td>

                   
                    <td>{{ $transaction->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

</body>
</html>
