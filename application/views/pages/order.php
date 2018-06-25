<br/>
<div class="container">
<h2 align="center"></h2>
<label>search details</label>


<div class="form-group">
<div class="input-group">
<span class="input-group-addon">Search</span>
<input type="text" name="search_text" id="search_text" class="form-control
input-lg"  placeholder="Type "/>

</div>
</div>
<br/>
<div id="result"></div>

</div>
<div style="clear:both"></div>
<br/>
<br/>
<br/>
<script>
$(document).ready(function(){
    
    load_data();

    function load_data(query)
    {
        $.ajax({
            url:"<?php echo base_url(); ?> Sales/fetch",
            method:"POST",
            data:{query:query},
            success:function(data){
                $('#result').html(data);
            }
        })
    }
    
});
</script>


<div>
</div>