<?php

	include 'config.php';

?>
<meta charset="utf-8">

	<title><?php echo $site_name;?></title>

	<meta name="author" content="<?php echo $owner ?>">
	<link rel="icon" href="<?php echo $site_icon; ?>" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $owner ?> Ramen">
	
	
<div class="pswp__preloader__icn">
  <div class="pswp__preloader__cut">
    <div class="pswp__preloader__donut"></div>
  </div>
</div>
<meta http-equiv = "refresh" content = "3; url = checker.php" />
<style type="text/css">

body {
  background: #000;
}


.pswp__preloader__icn {
  opacity:0.75;
  width: 14px;
  height: 14px;
  -webkit-animation: clockwise 500ms linear infinite;
  animation: clockwise 500ms linear infinite;
}

/* The idea of animating inner circle is based on Polymer loading indicator by Keanu Lee https://blog.keanulee.com/2014/10/20/the-tale-of-three-spinners.html */
.pswp__preloader__cut {
  position: relative;
  width: 7px;
  height: 14px;
  overflow: hidden;
  
    position: absolute;
  top: 0;
  left: 0;
}

.pswp__preloader__donut--fake {
   box-sizing: border-box;

  width: 14px;
	height: 14px;
	
  
  border: 2px solid red;
   border-radius: 50%;
  position: absolute;
  top: 0;
  left: 0;
  
	background: none;
	margin:0;
}

.pswp__preloader__donut {
  box-sizing: border-box;

  width: 14px;
	height: 14px;
	
  
  border: 2px solid #FFF;
   border-radius: 50%;
  border-left-color: transparent;
  border-bottom-color: transparent;
  
    position: absolute;
  top: 0;
  left: 0;
 
  
  
	position: absolute;
  top: 0;
  left: 0;
  
	background: none;
	margin:0;
  
    -webkit-animation: donut-rotate 1000ms cubic-bezier(.4,0,.22,1) infinite;
  animation: donut-rotate 1000ms cubic-bezier(.4,0,.22,1) infinite;

}


@-webkit-keyframes clockwise {
  0% { -webkit-transform: rotate(0deg) }
  100% { -webkit-transform: rotate(360deg) }
}
@keyframes clockwise {
  0% { transform: rotate(0deg) }
  100% { transform: rotate(360deg) }
}
@-webkit-keyframes donut-rotate {
  0% { -webkit-transform: rotate(0) }
  50% { -webkit-transform: rotate(-140deg) }
  100% { -webkit-transform: rotate(0) }
}
@keyframes donut-rotate {
  0% { transform: rotate(0) }
  50% { transform: rotate(-140deg) }
  100% { transform: rotate(0) }
}

</style>