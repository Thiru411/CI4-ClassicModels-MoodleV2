<?php
echo view('header'); 
echo view('sidebar'); 

/* Loads the form and url helper */	
helper(['url']);

$img_path = getenv('IMG');
$index_path = getenv('INDEX');

?>
</head>
<body>
<br /> 
<br />
<h2>Order Details</h2>
                <form action="" method="get">
              
                  <table width="633" border="0">
                    <tr>
                      <td width="342" colspan="3"><label>Order Number
                          <input name="OrderNumber" type="text" id="OrderNumber" value="<?php echo $Order['orderNumber'] ?>">
                      </label></td>
                      <td width="275" colspan="2"><label>Order Date
                      <input type="text" name="OrderDate" id="OrderDate" value="<?php echo $Order['orderDate'] ?>">
                    </label>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3"><label>Status
                        <input type="text" name="Status" id="Status" value="<?php echo $Order['status'] ?>">
                      </label></td>
                      <td colspan="2"><label>Required Date
                        <input type="text" name="RequiredDate" id="RequiredDate" value="<?php echo $Order['requiredDate'] ?>">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                      <td colspan="2"><label>Shipped Date
                        <input type="text" name="ShippedDate" id="ShippedDate" value="<?php echo $Order['shippedDate'] ?>">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="3"><label>Customer Number
                        <input type="text" name="CustomerNumber" id="CustomerNumber" value="<?php echo $Order['customerNumber'] ?>">
                      </label></td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3"><label>CustomerName
                        <input type="text" name="CustomerName" id="CustomerName" value="<?php echo $Order['customerName'] ?>">
                      </label></td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>LineNumber</td>
                      <td>Product Code</td>
                      <td>Quantity</td>
                      <td>Price</td>
                      <td>Total</td>
                    </tr>
                     <?php
				$totalorder = 0;
				foreach ($OrderDetails as $orderDetails){
				
				 echo "<tr>";
				 	echo "<td>" . $orderDetails['orderLineNumber'] 	. "</td>";
					echo "<td>" . $orderDetails['productCode'] . "</td>";
				  	echo "<td>" . $orderDetails['quantityOrdered']  . "</td>";
				  	echo "<td>" . $orderDetails['priceEach']. "</td>";
					$total = $orderDetails['priceEach'] * $orderDetails['quantityOrdered'] ;
 				   	echo "<td>" . $total. "</td>";
					$totalorder += $total;
 			  		
				 echo "</tr>";
				}
				?>

                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td><?php echo $totalorder ?></td>
                    </tr>
                  </table>
                  <p>
                    <label>Comments</label>
                  </p>
                  <p>
                    <textarea name="Comments" cols="40" rows="4"><?php echo $Order['comments'] ?></textarea>
                  </p>
                  <p>&nbsp;</p>
                  
                  <p>
                    
                  </p>
                  <p>&nbsp;</p>
                </form>
                
                
               
                

<?php
echo $pager->links();
echo view('footer'); 


?>
</body>
</html>
