<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <title>Product Form</title>

      <style>
        /* Add your CSS styles here */
        /* Example styles, modify as needed */
        .form-container {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .form-group input[type="submit"] {
            padding: 8px 15px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
 </style>

    </head>
<body>

    <div class="form-container">
        <h3> <a href="{{ route('product.all') }}" style="background:orange;">Go Back</a></h3>
        <h2>Add Product</h2>
        <form action="{{ route('product.store') }}" method="POST" >
             @csrf

            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="name" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <p>&copy; Sohanur Rahman Sohan || Programmer Sohan</p>
</body>
</x-app-layout>
