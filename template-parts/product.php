<div class="product">
  <img src="<?php ?>"/>
  <?php echo get_the_post_thumbnail($post->ID, 'yourTable'); ?>
  <h4><?php the_title()?></h4>
  <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
  <p><?php echo wc_price( $price ); ?></p>
  <button class="add-product">Add to cart</button>
</div>
