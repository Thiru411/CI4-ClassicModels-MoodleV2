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
<br /> <br />
				<h2></h2>
                <table border="1">
                <th>Order Number </th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Comments</th>
                
               	<th>Expand</th>
                <?php
			
				foreach ($AllOrders as $order){
					//var_dump($AllOrders);
				 echo "<tr>";
				 	echo "<td>" . $order['orderNumber'] 	. "</td>";
					echo "<td>" . $order['orderDate'] . "</td>";
				  	echo "<td>" . $order['status']  . "</td>";
				  	echo "<td>" . $order['comments']. "</td>";
 				   
 			  		echo "<td> <a href=\"$index_path/OrderController/getDrillDownOrder/" . $order['orderNumber'] ."\"> More...</a></td>" ;
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
