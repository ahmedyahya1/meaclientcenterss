<?php
  $customlink = ex_teampress_customlink(get_the_ID());
  global $number_excerpt;
  $image = get_post_meta( get_the_ID(), 'extp_image', true );
?>
<figure class="tpstyle-20 tpstyle-20-blue tppost-<?php the_ID();?>">
  <div class="tpstyle-20-image">
    <a href="<?php echo $customlink; ?>" class="<?php if($image!='') {echo "second_img_config";}?>">
      <?php the_post_thumbnail('full'); ?>
      <?php if($image!=''){?>
        <img class="second-img second-cus" src="<?php echo esc_url($image); ?>">
        <?php }
      ?>
    </a>
    <div class="tpstyle-20-icons">
      <?php echo ex_teampress_social(get_the_ID());?>
    </div>
  </div>
  <figcaption>
    <h3><a href="<?php echo $customlink; ?>"><?php the_title(); ?></a></h3>
    <?php $position = get_post_meta( get_the_ID(), 'extp_position', true ); 
      if($position!=''){ ?>
        <h5><?php echo $position; ?></h5>
    <?php }?>
    <?php 
	if($number_excerpt > 0){?>
	<p><?php echo wp_trim_words(get_the_excerpt(),$number_excerpt,'...'); ?></p>
	<?php }?>
  </figcaption>
  <?php extp_custom_single_color(20);?>
</figure>
