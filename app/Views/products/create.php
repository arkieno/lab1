<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Include Bootstrap CSS (you can download it from the Bootstrap website or use a CDN) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="text-center">Add Product</h1>
                    </div>
                    <div class="card-body">
                        <form action="/products/store" method="post">
                            <div class="form-group">
                                <label for="ProductName">Product Name:</label>
                                <input type="text" class="form-control" name="ProductName" id="ProductName" required>
                            </div>

                            <div class="form-group">
                                <label for="ProductDescription">Product Description:</label>
                                <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Watch_Category_id">Category:</label>
                                <select class="form-control" name="Watch_Category_id" id="Watch_Category_id" required>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ProductQuantity">Quantity:</label>
                                <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" required>
                            </div>

                            <div class="form-group">
                                <label for="ProductPrice">Price:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Create Product</button>
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
