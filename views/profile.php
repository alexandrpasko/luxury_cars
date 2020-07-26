<?php

  // veiws header
  require __DIR__ . '/includes/header_inc.php';

  // views embedded styles
  require __DIR__ . '/includes/styles_embedded_inc.php';
  
  // views navigation
  require __DIR__ . '/includes/navigation_inc.php';

?>

<!--header-->
    <header>
      <div class="wrapper">
        <h1 class="first_heading"><?=esc($heading)?></h1>
        <div class="slogan">
          <p>We are glad to have you as a registered user. We believe that you will discover a future lifestyle, which is already available today! </p>
        </div>
      </div>
    </header>
<!--section-->
    <section>
      <div class="wrapper">

        <h1><?=esc($result['first_name'])?> <?=esc($result['last_name'])?></h1>
        <h2>Your profile has the following information:</h2>
        <p class="output"><strong>First Name: </strong><span><?=esc($result['first_name'])?></span></p>
        <p class="output"><strong>Last Name: </strong><span><?=esc($result['last_name'])?></span></p>
        <p class="output"><strong>Email: </strong><span><?=esc($result['email'])?></span></p>
        <p class="output"><strong>Phone: </strong><span><?=esc($result['phone'])?></span></p>
        <p class="output"><strong>Street: </strong><span><?=esc($result['street'])?></span></p>
        <p class="output"><strong>City: </strong><span><?=esc($result['city'])?></span></p>
        <p class="output"><strong>Postal code: </strong><span><?=esc($result['postal_code'])?></span></p>
        <p class="output"><strong>Province: </strong><span><?=esc($result['province'])?></span></p>
        <p class="output"><strong>Country: </strong><span><?=esc($result['country'])?></span></p>
        <p id="link">
          <a href="/index.php?page=sale" id="browse">Browse Cars</a>
          <a href="#" id="reviews" onclick="return false">My Reviews</a>
        </p>

        <!-- div is visiable when see reviews link is clicked -->
        <div class="my_reviews">
          <div class='clear'></div>

          <?php if(!empty($reviews)) : ?>
            
            <?php foreach ($reviews as $review) : ?>
              <hr />
              <h3 class="comment_header">
                <?php for($i = 0; $i < esc($review['stars']); $i++ ) : ?>
                  <i class="fas fa-star"></i>
                <?php endfor ; ?>&nbsp;&nbsp;
                <?=esc($review['car_make'])?> <?=esc($review['car_model'])?> 

              </h3>
              <p>Added: <?=esc($review['date_added'])?></p>
              <p><?=substr(esc($review['content']), 0, 80)?> ...</p>
              <p>
                <a href="/index.php?page=record&style=visible&car_id=<?=esc_attr($review['car_id'])?>#focus" class="see_details">See Details</a>
              </p>
            <?php endforeach ; ?>

          <?php else : ?>

            <hr />
            <h3 class="comment_header">No reviews written by you yet</h3>

          <?php endif ; ?>
          
        </div><!-- end hidden see reviews div -->

      </div><!-- wrapper end -->
    </section>

<?php require __DIR__ . '/includes/footer_inc.php'; ?>