<?php

echo view('header'); 
echo view('sidebar'); 

/* Loads the form and url helper */	
helper(['url']);

$index_path = getenv('INDEX');

?>
  <script>
$(function() {
		   
$( "#datepicker" ).datepicker({ minDate: +3, maxDate: "+1Y" , dateFormat:"yy-mm-dd"});
$( "#datepicker2" ).datepicker({ minDate: +3, maxDate: "+1Y" , dateFormat:"yy-mm-dd"});
});
</script>

</head>
<body>
<br /> 
<br />
<h2>Create the Order </h2>
                <form method="post" action="<?php echo "$index_path/OrderController/createOrder"; ?>">
                  <p>
                    <label>Date Required: </label>
                      <input type="text" name="requiredDate" id="datepicker" />
                  </p>
                  <p>
                    <label>Date Shipped: </label>
                      <input type="text" name="shippedDate" id="datepicker2" />
                  </p>				  
                  <p>
                    <label>Comments</label>
                  </p>
                  <p>
                    <textarea name="comments" cols="40" rows="4"></textarea>
                  </p>
                  <p>
                    <input type="submit" name="createOrder" value="Create Order">
                  </p>
                  
                  <p>
                  </p>
                  <p>&nbsp;</p>
</form>
                
         
<?php

echo view('footer'); 

?>
</body>
</html>
