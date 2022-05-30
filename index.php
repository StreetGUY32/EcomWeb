<?php 

    require_once('core/init.php'); 
    include('includes/head.php');
    include('includes/navigation.php');
    include('includes/headerfull.php');
    
    $f_qry = "SELECT * FROM products WHERE pro_featured = 1";
    $featured = $db->query($f_qry);
?>
     
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
            </div>
            <?php endwhile; ?>
        </div>

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

    include('includes/footer.php');

?>

</body>
</html>




