<?php
defined('_GUVENLIK') or die("Redistrect Access");
?>
<section class="gallery">
	<div class="page-header">
		<h1><?php echo $lang["gallery"];?></h1>
	</div>
    <div class="gallery-container">
            <?php
            for ($i=10;$i<126;$i++) {
      echo '<div class="gallery-box">
                <div class="inner">
                        <img data-src="assets/images/galeri/'.$i.'.jpg" class="glightbox lazy">
                </div>
            </div>';
            }
            ?>
    </div>
</section>
