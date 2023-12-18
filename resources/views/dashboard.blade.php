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
        <li><a href="{{ route('product.all') }}">Home</a></li>
        <li><a href="#news">Sales</a></li>

      </ul>
      <div class="products">
            <h2>All Products</h2>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button>Search</button>
                <button style="float: right; margin-right:10px; background:yellow;"><a href="{{ route('product.add') }}">Add Product</a></button>

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

                    @foreach($product as $key=> $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                     <button style="background: orange;"><a href="{{ route('product.sell',$item->id) }}">Sell</a> </button>||
                    <button style="background: blueviolet;"> <a href="{{ route('product.edit',$item->id) }}">Edit</a></button>||
                    <button style="background: red;"><a href="{{ route('product.delete',$item->id) }}">Delete</a></button>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            {{ $product->links() }}

            <p>&copy; Sohanur Rahman Sohan || Programmer Sohan</p>
      </div>
</x-app-layout>
