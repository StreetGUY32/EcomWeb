
<?php

    require_once 'core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    include 'includes/headerfull.php';

    $sql = "SELECT * FROM products WHERE pro_featured = 1";
    $featured = $db->query($sql);

?>


<!--remove the spaces and center the products-->
  <div class="col-md-2"></div>

<!--main content of featured products-->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">
          Featured Products
        </h2>

      <?php while($product = mysqli_fetch_assoc($featured)) : ?>

      <div class="col-md-3 text-center">
            <h4>
                <?= $product['pro_title']; ?>
            </h4>
            <img src="<?=$product['pro_image']; ?>" alt="<?=$product['pro_title']; ?>" id="img-align"/>

            <p class="list-price text-danger">
                List Price: <s>PKR<?=$product['pro_list_price']; ?></s>
            </p>

            <p class="price">
                Our Price: PKR<?=$product['pro_price']; ?>
            </p>

            <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id']; ?>)">
                Details
            </button>
      </div>
    <?php endwhile; ?>
  </div>

<?php

    include 'includes/footer.php';

 ?>
<!--end of details modal-->
</body>
</html>
