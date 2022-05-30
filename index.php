<?php 

    require_once('core/init.php'); 
    $f_qry = "SELECT * FROM products WHERE pro_featured = 1";
    $featured = $db->query($f_qry);


?>


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
            
            <?php while($products = mysqli_fetch_assoc($featured)): ?>

            <div class="col-md-3 border border-dark">
                <h4><?= $products['pro_title'];?></h4>

                <img src=" <?=$products['pro_image']; ?> " alt=" <?= $products['pro_title']; ?> " id="img-align"/>

                <p class="list-price text-danger">List Price: <s> <?= $products['pro_list_price']; ?> </s></p>

                <p class="price">Our Price : <b> <?= $products['pro_price']; ?> </b></p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                <?php endwhile; ?>
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



