<x-app-layout>
    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.products h2{
    text-align: center;
}
table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .search-bar {
            margin-bottom: 15px;
        }
    </style>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">Sales</a></li>

      </ul>
      <div class="products">
            <h2>All Products</h2>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button>Search</button>
                <button style="float: right; margin-right:10px;"><a href="">Add Product</a></button>

            </div>
            <table>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows will be dynamically populated here -->
                    <tr>
                        <td>1</td>
                        <td>Product A</td>
                        <td>10</td>
                        <td>$20</td>
                        <td> <button>Sell</button>||<button>Edit</button>||<button>Delete</button></td>
                    </tr>
                    <!-- More rows will go here -->
                </tbody>
            </table>

      </div>
</x-app-layout>
