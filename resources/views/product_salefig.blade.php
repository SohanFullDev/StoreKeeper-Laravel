<x-app-layout>
    <style>
        .main {
    text-align: center;
    margin-top: 50px;
}

.title {
    margin-left: 15px;
}

.card-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.footer {
    margin-top: 20px;
}

    </style>

    <div class="main">
        <div class="title">
            <h1>Sales Figures Page</h1>
            <h3> <a href="{{ route('product.all') }}" style="background:orange;">Go Back</a></h3>
        </div>

        <div class="card-container">
            <div class="card">
                <h3>Today's Sales</h3>
                <p>${{  $todaySales }}</p>
            </div>

            <div class="card">
                <h3>Yesterday's Sales</h3>
                <p>${{ $yesterdaySales }}</p>
            </div>

            <div class="card">
                <h3>This Month's Sales</h3>
                <p>${{ $thisMonthSales }}</p>
            </div>

            <div class="card">
                <h3>Last Month's Sales</h3>
                <p>${{ $lastMonthSales }}</p>
            </div>
        </div>

        <p class="footer">&copy; Sohanur Rahman Sohan || Programmer Sohan</p>
    </div>



</x-app-layout>
