


<div class="modal fade details-1" id="details-4" tableindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">

<div class="modal-dialog modal-lg">

    <div class="modal-content">

        <div class="modal-header">

            <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
                <span aria-hidden="true" > &times;</span>
            </button>

            <h4 class="modal-title text-center">Polo Shirt</h4>
        </div>

        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/PoloShirt.png" alt="polo shirt" class="details img-responsive" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <h4><b>Details</b></h4>
                        <p>
                            Buy them while they last!
                        </p>
                        <hr>
                        <p>Price: 2499 PKR</p>
                        <p>Brand: Polo</p>

                        <form action="add_cart.php" method="POST">
                            <div class="form-group">
                                <div class="col-xs-3">
                                    <label for="quantity" id="quantity-label" >Quantity:</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity">
                                </div> <br> <br> <br>
                            </div>
                            <div class="form-group">
                                    <label for="size">Size:</label>
                                    <select name="size" id="size" class="form-control">
                                        <option value=""></option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select> 
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" >Close</button>
            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
        </div>

    </div>


</div>

</div>