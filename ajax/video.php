<?php
	require_once 'ajaxConfig.php';
    @$links=$_POST['links'];
?>
<iframe class="w-100i ds-block" 
width="100%" height="435"
src="https://www.youtube.com/embed/<?=$func->getYoutube($links)?>?rel=0&autoplay=0"
frameborder="0" allowfullscreen></iframe>