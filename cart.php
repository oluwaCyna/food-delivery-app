<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js" async></script>
</head>

<body onload="cartPageLoad();">
    <header class="" id="wrapper">
        <?php include_once "navigation.php" ?>
    </header>
    <div class="grid-container container">
        <div class="" id="product-container">

            <div class="" id="product-list">
                <div class="product-head-container">
                    <h2>Carts (2)</h2>
                    <div class="line-group">
                        <hr class="line" />
                        <hr class="line2" />
                        <hr class="line2" />
                        <hr class="line2" />
                    </div>
                </div>
                <hr />
<<<<<<< HEAD
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
=======
                <div class='cart-group'>
                <!-- <div class='cart-card'> -->
                    <!-- <div class='cart-img-header'>
                        <img src='product image/$image' height='100' width='100' alt='Product Image' />
                        <div class='cart-card-text'>
                            <h6>$name</h6>
                            <p class="cart-price">$$price</p>
                        </div>
                    </div>
                    <input type='hidden' class='product-input' value='$product_id'/>
                    <input type='number' class='cart-quantity-input' value='1'/>
                    <button type='button' class='cart-remove-btn'>REMOVE</button>
                    <hr /> -->
                <!-- </div> -->
            </div>
            
>>>>>>> 349462593545d604f4e52343b92d7fcde976e953
                <hr />
                <br />
                <div class="cart-total">
                    <h2>Total:</h2>
                    <h2 class="cart-total-price"></h2>
                </div>
                <div class="cart-action" id="cart-action">
                <button type="button" class="purchase-btn" id="purchase-btn">Check Out</button> 
                </div>

            </div>
        </div>

        <div class="other-section">

        </div>
    </div>
</body>

</html>