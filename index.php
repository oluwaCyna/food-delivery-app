<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/food-point-logo-symbol-and-icon-template-to-show-the-location-of-the-food-seller-vector.webp">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <header class="" id="">
        <?php include_once "navigation.php" ?>

        <div id="hero" class="">
            <img id="hero-image" src="https://wallpaperaccess.com/full/271726.jpg" alt="Banner" />
            <div class="" id="hero-text">
                <p id="Learn">Food Point..</p>
                <h1>Order Healthy and Fresh Food Any Time</h1>
                <p id="l">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                <!-- <form>
                    <input type="text" name="search" placeholder="Search..." value="" id="search" class="input" />
                    <button type="submit" class="btn" id="submit" name="submit">Search</button>
                </form> -->
            </div>
    </header>

    <?php include_once "categories.php" ?>
    <?php include_once "Meal.php" ?>
    <?php include_once "Team.php" ?>
    <?php include_once "Work.php" ?>
    <?php include_once "footer.php" ?>
    </div>
    <script src="https://kit.fontawesome.com/b41ff46bee.js" crossorigin="anonymous"></script>
</body>

</html>