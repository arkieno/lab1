<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <!-- Include Bootstrap CSS (you can download it from the Bootstrap website or use a CDN) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Product Listing</h1>
                <a href="/products/create" class="btn btn-primary mb-3">Add New Product</a>
                <ul class="list-group">
                    <?php foreach ($products as $product): ?>
                    <li class="list-group-item">
                        <a href="/products/edit/<?= $product['id'] ?>"><?= $product['ProductName'] ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
