<?php

echo view('header'); 
echo view('sidebar'); 

/* Loads the form and url helper */	
helper(['url', 'form']);

$index_path = get_env("INDEX");

echo form_open("$index_path/CustomerController/getCustomerByName/");
?>
 <p>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script> $(function() {
var availableTags = [
//need to replace the following with a call to a function in the controller.
"LIT",
"Signal Gift Stores",
"Australian Collectors, Co.",
"La Rochelle Gifts",
"Baane Mini Imports",
"Mini Gifts Distributors Ltd.",
"Havel & Zbyszek Co",
"Blauer See Auto, Co.",
"Mini Wheels Co.",
"Gift Depot Inc.",
"AV Stores, Co.",
"Osaka Souveniers Co.",
"Royal Canadian Collectables, Ltd.",
"Cruz & Sons Co.",
"Tokyo Collectables, Ltd",
"Bavarian Collectables Imports, Co.",
"Gift Ideas Corp.",
"Scandinavian Gift Ideas",
"The Sharp Gifts Warehouse",
"Motor Mint Distributors Inc.",
"Kelly's Gift Shop"
];
$( "#customerName" ).autocomplete({
source: availableTags
});
});
</script>

</head>
<body>
<div class="ui-widget">
<label for="customerName">Customer Search: </label>
<input name="customerName" id="customerName" size="45" />

<input type="submit" value="Go" />
</div><br /> <br />
				<h2><?php echo $msg ?></h2>
                <table border="1">
                <th>Customer</th>
                <th>Contact First Name</th>
                <th>Contact Last Name</th>
                <th>City</th>
                <th>CreditLimit</th>
                <th>Phone</th>
                <th>More Details</th>
                <?php
			
				foreach ($AllCustomers as $customer){
				 echo "<tr>";
				 	echo "<td>" . $customer['customerName'] 	. "</td>";
					echo "<td>" . $customer['contactFirstName'] . "</td>";
				  	echo "<td>" . $customer['contactLastName']  . "</td>";
				  	echo "<td>" . $customer['city']				. "</td>";
 				   	echo "<td>" . $customer['creditLimit']      . "</td>";
 			   		echo "<td>" . $customer['phone']			. "</td>";
 			    	echo "<td> <a href=\"$index_path/CustomerController/getDrillDownCustomer/" . $customer['customerNumber'] ."\"> More...</a></td>" ;
				 echo "</tr>";
				}
				?>
                </table>
                

<?php
echo $pager->links();
echo view('footer'); 

?>
</body>
</html>
