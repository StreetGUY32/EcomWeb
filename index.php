<?php require_once('core/init.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE | STONERS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <?php

        $qry = "SELECT * FROM categories WHERE parent ='0'";
        $p_qry = $db->query($qry);

    ?>
    
<!-- NAV BAR -->
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand" id="whiteText">STONERS</a>
            <ul class="nav navbar-nav">

                <?php
                        while($parent = mysqli_fetch_assoc($p_qry)):
                ?>

                <?php
                        $p_id   =  $parent['cat_id'];
                        $qry2   =  "SELECT * FROM categories WHERE parent = '$p_id' ";
                        $c_qry  =  $db->query($qry2);
                ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="whiteText" ><?php echo $parent['category']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu text-white" role="menu">
                        <?php while($child = mysqli_fetch_assoc($c_qry)) :?>
                        <li>
                            <a href="#"><?php echo $child['category']?></a>
                        </li>
                        <?php endwhile; ?>

                    </ul>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
        
    </nav>


<!-- IMAGES  -->

    <div id="background-img">
        <div id="image-1">

        </div>
        <div id="image-2">

        </div>
    </div>

        
<!-- removing spaces and centering elements -->
    <div class="col-md-2"></div>

<!-- FEATURE PRODUCT  -->

    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Featured Products</h2>

            <div class="col-md-3 border border-dark">
                <h4>Levis Jeans</h4>
                <img src="images/levis.jpg" alt="levis jeans" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>5000 PKR</s></p>
                <p class="price">Our Price : <b>3000 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Adidas Football</h4>
                <img src="images/Football.jpg" alt="Adidas Football" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>2500 PKR</s></p>
                <p class="price">Our Price : <b>2000 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Watch</h4>
                <img src="images/Gucci_Watch.jpg" alt="watch" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>7000 PKR</s></p>
                <p class="price">Our Price : <b>6000 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Polo Shirt</h4>
                <img src="images/PoloShirt.png" alt="PoloShirt" id="img-aligns"/>
                <p class="list-price text-danger">List Price: <s>3000 PKR</s></p>
                <p class="price">Our Price : <b>2499 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Hoodie</h4>
                <img src="images/Hoodies.png" alt="hoodie" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>4000 PKR</s></p>
                <p class="price">Our Price : <b>3499 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Joggers</h4>
                <img src="images/Joggers.jpg" alt="joggers" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>3000 PKR</s></p>
                <p class="price">Our Price : <b>2499 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Nike Headband</h4>
                <img src="images/HeadBand.jpg" alt="Nike Head band" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>1200 PKR</s></p>
                <p class="price">Our Price : <b>899 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
            </div>

            <div class="col-md-3 border border-dark">
                <h4>Ladies Purse</h4>
                <img src="images/purse.png" alt="Ladies Purse" id="img-align"/>
                <p class="list-price text-danger">List Price: <s>5500 PKR</s></p>
                <p class="price">Our Price : <b>5000 PKR</b></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
            </div>

        </div>



        <!-- FOOTER -->
        
            <footer class="text-center" id="footer">
                &copy; Copyright 2021 - 2022 Stoner's Place
            </footer>

    </div>




</body>
</html>

<!-- Details Modal -->

<?php

    include('details-modal-levis.php');
    include('details-modal-Football.php');
    include('details-modal-GucciWatch.php');
    include('details-modal-PoloShirt.php');
    include('details-modal-Hoodies.php');
    include('details-modal-Joggers.php');
    include('details-modal-HeadBand.php');
    include('details-modal-purse.php');

?>



