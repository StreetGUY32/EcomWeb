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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="whiteText" >
                <?php echo $parent['category']; ?> 
                <span class="caret"></span>
            </a>

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
