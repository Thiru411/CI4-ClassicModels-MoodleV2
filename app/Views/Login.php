<html>
    <head>
        <title>My Store</title>
    </head>
    <body>
	<H1> Store Login</H1>
		<?php echo form_open('CustomerController/validateUser'); ?>
		<table cellpadding=\"3\" cellspacing=\"3\">
			<tr>
				<td valign="Left"><p><strong>Email:</strong></td>
				<td><input type="text" name="email" value="<?php echo set_value('email'); ?>"></td>
				<td border="0"><?php if (isset($validation)) { echo $validation->getError('email'); }?></td>
			</tr>
			<tr>
				<td valign="left"><strong>Password:</strong></td>
				<td><input type="text" name="password" value="<?php echo set_value('password'); ?>"></td>
				<td><?php if (isset($validation)) { echo $validation->getError('password'); }?></td></br>
			</tr>
			
			<tr valign="right">
			<td></td><td></td>
				<td>
				<p><input size = "10" type="submit" name="Login" value="Login"></p> </td> 
			</tr>
		</table>
		<br><p><?php echo anchor('Home/Logout/', 'Logout'); ?></p></br>
</body>
</html>
