<?php
defined('_GUVENLIK') or die("Redistrect Access");
?>
<section class="turkey-map">
	<div class="page-header">
		<h1><?php echo $lang["turkey_map"];?></h1>
	</div>
	<article class="trmap">
        <iframe src="assets/images/destinations/map/harita.<?php echo $SelectLang["code"];?>.svg" style="width: 100%;height: 100%;"></iframe>
	</article>
</section>