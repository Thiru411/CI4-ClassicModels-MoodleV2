<?php

echo view('header'); 
echo view('sidebar');

/* Loads the form and url helper */	
helper(['url']); 

$img_path = getenv('IMG');
$js_path = getenv('JS');
$index_path = getenv('INDEX');

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script>
<script src="<?php echo $js_path ."/loginjq.js"?>" type="text/javascript"></script>

<div align="center" style="margin:30px">
	<div id="container">
		<div id="outer">
				Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input id="email" name="email" type="text" value="" onblur="return chkEmail();" />
		</div>
		<div id="slide"><div id="tube">&nbsp;</div></div>
		<br clear="all" />
		<div id="outer">
			Password 
			<input id="password" name="password" type="password" value="" onblur="return chkPassword();" />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Minimum 5 characters</em>
		</div>
		<div id="slide2"><div id="tube2">&nbsp;</div></div>
		<br clear="all" />
		<br clear="all" />
		<input type="button" name="submit" value="Login" id="button" onclick="chkForm()" />
	</div>
	<br clear="all" />
	<br clear="all" /><br clear="all" />
	
<br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" />



<?php

echo view('footer'); 
?>