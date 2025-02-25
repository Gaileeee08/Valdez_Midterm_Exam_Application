<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 50%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Product List</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['category'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
