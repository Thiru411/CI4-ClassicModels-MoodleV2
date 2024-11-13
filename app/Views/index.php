<?php

echo view('header'); 
echo view('sidebar'); 

helper(['url']);

$index_path = getenv('INDEX');
$img_path = getenv('IMG');
$css_path = getenv('CSS');
$js_path = getenv('JS');
?>
    <link href="<?php echo $css_path . "/imgslider/js-image-slider.css"?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo $js_path . "/imgslider/js-image-slider.js"?>" type="text/javascript"></script>
    <link href="<?php echo $css_path . "/imgslider/generic.css"?>" rel="stylesheet" type="text/css" />
</head>
<body>
   
   
    <div id="sliderFrame"> 
        <div id="slider">
            <a href="<?php echo $index_path."/ProductController/getDrillDownProduct/$productCode1" ?>">
                <img src="<?php echo $img_path."/products/$displayImage1"?>" alt="<?php echo $displayVendor1?>" />
            </a>
            
            <a href="<?php echo $index_path."/ProductController/getDrillDownProduct/$productCode2" ?>">
            	<img src="<?php echo $img_path."/products/$displayImage2"?>" alt="<?php echo $displayVendor2?>" />
            </a>
             <a href="<?php echo $index_path."/ProductController/getDrillDownProduct/$productCode3" ?>">
            	<img src="<?php echo $img_path."/products/$displayImage3"?>" alt="<?php echo $displayVendor3?>" />
            </a>
             <a href="<?php echo $index_path."/ProductController/getDrillDownProduct/$productCode4"?>">
            	<img src="<?php echo $img_path."/products/$displayImage4"?>" alt="<?php echo $displayVendor4?>" />
            </a>
        </div>
    
        <!--thumbnails-->
        <div id="thumbs"> 
            <div class="thumb">
                <div class="frame"><img src="<?php echo $img_path."/thumbs/$displayImage1"?>" /></div>
                <div class="thumb-content"><p>&euro;<?php echo $displayPrice1; ?></p><?php echo $displayName1; ?></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo $img_path."/thumbs/$displayImage2"?>" /></div>
                <div class="thumb-content"><p>&euro;<?php echo $displayPrice2; ?></p><?php echo $displayName2; ?></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo $img_path."/thumbs/$displayImage3"?>" /></div>
                <div class="thumb-content"><p>&euro;<?php echo $displayPrice3; ?></p><?php echo $displayName3; ?></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo $img_path."/thumbs/$displayImage4"?>" /></div>
                <div class="thumb-content"><p>&euro;<?php echo $displayPrice4; ?></p><?php echo $displayName1; ?></div>
                <div style="clear:both;"></div>
            </div>
        </div>

        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
    </div>

<?php
echo view('footer'); 

?>