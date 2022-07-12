<div class="product">
  <div class="imageproduct">
    
    <img src="<?php ?>"/>
    <?php echo get_the_post_thumbnail($post->ID, 'yourTable'); ?>
    

  </div>
  
  <button class="add-product">Add to cart</button>

  <div class="titleprice">
    
    <h4><?php the_title()?></h4>
    <div class="price">
      <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
      <p><?php echo wc_price( $price ); ?></p>
    </div>
    
  </div>
</div>
