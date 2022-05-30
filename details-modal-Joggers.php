


<div class="modal fade details-6" id="details-6" tableindex="-1" role="dialog" aria-labelledby="details-6" aria-hidden="true">

<div class="modal-dialog modal-lg">

    <div class="modal-content">

        <div class="modal-header">

            <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
                <span aria-hidden="true" > &times;</span>
            </button>

            <h4 class="modal-title text-center">Joggers</h4>
        </div>

        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/Joggers.jpg" alt="Joggers" class="details img-responsive" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <h4><b>Details</b></h4>
                        <p>
                            Buy them while they last!
                        </p>
                        <hr>
                        <p>Price: 2499 PKR</p>
                        <p>Brand: Nike</p>

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
                                        <option value="7">41/7</option>
                                        <option value="8">42/8</option>
                                        <option value="9">43/9</option>
                                        <option value="10">44/10</option>
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