<x-app-layout>
<head>
    <meta charset="UTF-8">
    <title>Sale Transactions</title>
    <style>
        /* Basic table styling */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <br>
   <div>
    <h1 style="text-align: center;"><span style=" background:yellow; font-size:40px;">Sales Transaction History Page</span></h1>
    <h3 style="text-align: center;"> <a href="{{ route('product.all') }}" style="background:orange;">Go Back</a></h3>
</div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Date</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Sale Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($saleshistories as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>${{ floor($product->price) }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $saleshistories->links() }}
    <p>&copy; Sohanur Rahman Sohan || Programmer Sohan</p>
</body>
</x-app-layout>
