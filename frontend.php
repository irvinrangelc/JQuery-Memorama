<?php
//////////////////////////////////*
//	Inherit JQuery Memorama ver 1.0
//	
//
//
//*/
$images = array(
	1=> array(
		"src"=>"honguita.jpg",
		"title"=>"Honguita"
	),
	2=> array(
		"src"=>"honguito.jpg",
		"title"=>"Honguito"
	),
	3=> array(
		"src"=>"luigi.jpg",
		"title"=>"Luigi"
	),
	4=> array(
		"src"=>"mario.jpg",
		"title"=>"Mario"
	),
	5=> array(
		"src"=>"noset.jpg",
		"title"=>"Noset"
	),
	6=> array(
		"src"=>"princess.jpg",
		"title"=>"Princess"
	),
	7=> array(
		"src"=>"turttle.jpg",
		"title"=>"Turttle"
	)
);

function aleatorio($variable){
	$long = count($variable);
	for($i=$long; $i>0; $i--){
		$aleatorio = rand(1, $long);
		$temp = $variable[$i];	
		$variable[$i] = $variable[$aleatorio];
		$variable[$aleatorio] = $temp;
	}
	return    ($variable);
}
$items = array_merge(aleatorio($images) , aleatorio($images));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inherit. Memorama Versi&oacute;n 1.0</title>
<link href="/ui/frontend/styles/general.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="/ui/frontend/styles/memorama.css" type="text/css" rel="stylesheet" media="screen"/>
<link rel="shortcut icon" href="/favicon.png" type="image/png">

<script type="text/javascript" src="/ui/frontend/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/ui/frontend/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="/ui/frontend/scripts/inherit.functions.js"></script>
</head>
<body>
<div id="header">
	<div class="content">
		<h1>Memorama JQuery. Versi&oacute;n 1.0</h1>
	</div>
</div>
<div id="mainbox">
	<div class="memorama floatLeft">	
		<?php
		foreach($items as $item=>$value){
		?>
			<div class="wrapper-item floatLeft" id="item<?=$item?>">
				<div class="item floatLeft off active"><img src="/ui/frontend/img/letters/<?=$value["src"]?>" title="<?=$value["title"]?>"/></div>
			</div>
		<?php
		}
		?>
	</div>
</div>
<div id="footer">
	<div class="footer-grass"></div>
    <div class="footer-content">
    	<div class="footer-text">
        	<ul>
            	<li><h3>Inspiraci&oacute;n</h3></li>
                <li><h3>Recursos</h3></li>
                <li><h3>Contacto</h3></li>
            </ul>
            <div class="copy">
            	Desarrollado por <a href="#">Inherit.mx</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>