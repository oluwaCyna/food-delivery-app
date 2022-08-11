<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/food-point-logo-symbol-and-icon-template-to-show-the-location-of-the-food-seller-vector.webp">
 <!-- Bootstrap CSS v5.2.0-beta1 -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <header class="" id="wrapper">
        <?php include_once "navigation.php" ?>
    </header>
    <div class="grid-container">
        <div class="" id="product-container">
            <div class="" id="Product-category">
                <div class="product-head-container row">
                    <h2 class="col">Categories</h2>
                    <div class="line-group">
                        <hr class="line" />
                        <hr class="line2" />
                        <hr class="line2" />
                        <hr class="line2" />
                    </div>
                </div>


                <div class="category-button-group row">
                    <button type="submit" class="category-btn col-sm-8 col-md-3" id="submit" name="submit">Normal</button>
                    <button type="submit" class="category-btn col-sm-8 col-md-3" id="submit" name="submit">Snacks</button>
                    <button type="submit" class="category-btn col-sm-8 col-md-3" id="submit" name="submit">Swallow</button>
                </div>
            </div>

            <div class="" id="product-list">
                <div class="product-head-container">
                    <h2>All Items (3)</h2>
                    <div class="line-group">
                        <hr class="line" />
                        <hr class="line2" />
                        <hr class="line2" />
                        <hr class="line2" />
                    </div>
                </div>
                <hr />
                <div class="row"> 
                    <div class="col-md-6" id="product-Card">
                    <img src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/Layer256-1.png" height="100" width="100" alt="Product Image" />
                            <div class="product-card-text">
                                <h6 class="">Pizza</h6>
                                <p class="">description</p>
                                <p class=""><s>$300</s> $700</p>
                            </div>
                    </div>
                    <div class="col-md-6">
                    <div>
                            <input type="number" name="product-number" id="product-number" class="product-input" min="1" value="1" />
                            <button type="submit" class="order-btn" id="submit" name="submit">Order</button>
                        </div>
                    </div>
            </div>
                <hr />

                <div class="row"> 
                    <div class="col-md-6" id="product-Card">
                    <img src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/Layer256-1.png" height="100" width="100" alt="Product Image" />
                            <div class="product-card-text">
                                <h6 class="">Pizza</h6>
                                <p class="">description</p>
                                <p class=""><s>$300</s> $700</p>
                            </div>
                    </div>
                    <div class="col-md-6">
                    <div>
                            <input type="number" name="product-number" id="product-number" class="product-input" min="1" value="1" />
                            <button type="submit" class="order-btn" id="submit" name="submit">Order</button>
                        </div>
                    </div>
            </div>
                <hr />

                <div class="row"> 
                    <div class="col-md-6" id="product-Card">
                    <img src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/Layer256-1.png" height="100" width="100" alt="Product Image" />
                            <div class="product-card-text">
                                <h6 class="">Pizza</h6>
                                <p class="">description</p>
                                <p class=""><s>$300</s> $700</p>
                            </div>
                    </div>
                    <div class="col-md-6">
                    <div>
                            <input type="number" name="product-number" id="product-number" class="product-input" min="1" value="1" />
                            <button type="submit" class="order-btn" id="submit" name="submit">Order</button>
                        </div>
                    </div>
            </div>
                <hr />
            </div>
        </div>
    </div>
</div>

</body>

</html>