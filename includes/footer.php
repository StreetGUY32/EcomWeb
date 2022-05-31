<!-- FOOTER -->
        
    <footer class="text-center" id="footer">

        &copy; Copyright 2021 - 2022 Stoner's Place
        
    </footer>
</div>

<script>

function detailsmodal(id)
{
   var data = {"id" : id};
   
   jQuery.ajax(
    {
        url : '/Practice/EcomWeb/EcomWeb/detailsmodal.php',
        method : "post",
        data : data,
        success: function(data){
        jQuery('body').append(data);
        jQuery('#details-modal').modal('toggle');
     },

        error: function()
        {
        alert("Something went wrong!");
        }

   });
 }

</script>

