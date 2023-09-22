<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Include Bootstrap CSS (you can download it from the Bootstrap website or use a CDN) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for styling */
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .btn-success {
            background-color: #28A745;
            border-color: #28A745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }

        .btn-danger {
            background-color: #DC3545;
            border-color: #DC3545;
        }

        .btn-danger:hover {
            background-color: #C82333;
            border-color: #C82333;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="card-body">
                        <form action="/products/update/<?= $product['id'] ?>" method="post">
                            <div class="form-group">
                                <label for="ProductName">Product Name:</label>
                                <input type="text" class="form-control" name="ProductName" id="ProductName" value="<?= $product['ProductName'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="ProductDescription">Product Description:</label>
                                <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"><?= $product['ProductDescription'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Watch_Category_id">Category:</label>
                                <select class="form-control" name="Watch_Category_id" id="Watch_Category_id" required>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['id'] ?>" <?php if ($category['id'] == $product['Watch_Category_id']) echo 'selected'; ?>>
                                            <?= $category['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ProductQuantity">Quantity:</label>
                                <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" value="<?= $product['ProductQuantity'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="ProductPrice">Price:</label>
                                <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" value="<?= $product['ProductPrice'] ?>" required>
                            </div>

                            <button type="submit" class="btn btn-success btn-block">Update Product</button>
                            <a href="/products/delete/<?= $product['id'] ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-block">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
