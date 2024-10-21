<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Products Table</title>
    <style>
        /* Outer dark pastel blue background */
        body {
            background-color: #9eb3c2; /* Dark pastel blue for outer body */
        }
        /* Inner light pastel blue background */
        .container-fluid {
            background-color: #e3f2fd; /* Light pastel blue for inner body */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            background-color: #e3f2fd; /* Light pastel blue for table */
        }
        thead {
            background-color: #b3d9ff; /* Slightly darker blue for header */
        }
        th, td {
            text-align: center;
        }
        tbody tr {
            background-color: #f0f8ff; /* Light pastel blue for table rows */
        }
        #search-product {
            border: 1px solid #b3d9ff;
            background-color: #f0f8ff;
        }
        #search-button {
            background-color: #a6c9f1;
            border-color: #88b5e4;
        }
        #search-button:hover {
            background-color: #88b5e4;
            border-color: #709bc1;
        }
        .table-info {
            background-color: #c8e1ff; /* Light pastel blue header row */
        }
        /* Pagination styling */
        .pagination {
            margin: 0;
        }
        .page-item .page-link {
            background-color: #f0f8ff; /* Light blue for pagination */
            border: 1px solid #b3d9ff;
        }
        .page-item.active .page-link {
            background-color: #b3d9ff;
            border-color: #88b5e4;
        }
    </style>
</head>
<body>
    <div class="container-fluid shadow mt-5">
        <div class="d-flex w-25">
            <input id="search-product" type="text" class="form-control w-75 mt-2" placeholder="Search product name..." >
            <button id="search-button" class="btn btn-success ms-1 mt-2"><i class="bi bi-search"></i> Search</button>
        </div>
        <div class="d-flex justify-content-center" id="display-error"></div>
        <hr>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <span>{{ $products->links('pagination::bootstrap-4') }}</span>
        </div>
    </div>
    <script src="{{ asset('js/search-product.js') }}"></script>
</body>
</html>
