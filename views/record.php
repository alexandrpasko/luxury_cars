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
          <p>Don't dream it. Drive it! We stand behind every car we sell. Let us find an exclusive car that would blow your mind.</p>
        </div>
      </div>
    </header>
<!--section-->
    <section>
      <div class="wrapper">
        <div id="single_record">

          <div id="record_header">
            <h2 class="brand"><?=esc($record['make'])?> <?=esc($record['model'])?><span class="header_price">$<?=price(esc($record['price']))?></span></h2>
          </div>
          
          <div id="photo">
            <img src="images/<?=esc($record['photo'])?>" alt="car" width="300" height="150">
            <div id="left_arrow"><i class="fas fa-chevron-left arrow"></i></div>
            <div id="right_arrow"><i class="fas fa-chevron-right arrow"></i></div>
          </div>
            
          <div id="attributes">
            <!-- <h3 class="price">$179,999.00</h3> -->
            <p class="attribute">
              <i class="fas fa-file-invoice-dollar"></i>
              
            <?php if($rent === true) : ?>
              Rent Price:
              <span id="price" class="results">$<?=price(esc($record['price_rent']))?> / day</span>
            </p>
            <?php else : ?>
              Price:
              <span id="price" class="results">$<?=price(esc($record['price']))?></span>
            </p>
            <?php endif ; ?>


            <p class="attribute">
              <i class="fas fa-user-check"></i> 
              Condition:
              <span id="condition" class="results"><?=esc($record['car_condition'])?></span>
            </p>
            <p class="attribute">
              <i class="far fa-calendar-alt"></i> 
              Year:
              <span id="year" class="results"><?=esc($record['year'])?></span>
            </p>
            <p class="attribute">
              <i class="fas fa-car-side"></i> 
              Body Type:
              <span id="body_type" class="results"><?=esc($record['body_type'])?></span>
            </p>
            <p class="attribute">
              <i class="fas fa-paint-brush"></i> 
              Color:
              <span id="color" class="results"><?=esc($record['color'])?></span>
            </p>
            <p class="attribute">
              <i class="fas fa-tachometer-alt"></i> 
              Mileage:
              <span id="mileage" class="results"><?=esc($record['mileage'])?> km</span>
            </p>
            <p class="attribute">
              <i class="fas fa-cogs"></i> 
              Transmission:
              <span id="transmission" class="results"><?=esc($record['transmission'])?></span>
            </p>
            <p class="attribute">
              <i class="fas fa-gas-pump"></i> 
              Fuel:
              <span id="fuel" class="results"><?=esc($record['fuel'])?></span>
            </p>
          </div>

          <p class="description"><?=esc($record['description'])?></p>

          <!-- offer to login or register if not yet -->
          <?php if(empty($_SESSION['client_id'])) : ?>
            <hr>
            <p class="message">Do you want to leave a review? Please 
              <a href="/index.php?page=login&target=1">login</a> or 
              <a href="/index.php?page=register&target=1">register</a> to share your experience
            </p>
          <?php endif ; ?>


          <p class="link">
            <a href="/index.php?page=testdrive" id="link_testdrive">Test drive</a>

            <?php if(!empty($_SESSION['client_id'])) : ?>
              <a class="leave_review" href="#" id="link_leave_review" onclick="return false">
                <?=(!empty($_GET['class'])) ? 'Cancel Review' : 'Leave Review' ; ?>
              </a>
            <?php endif ; ?>

            <a href="#" id="link_see_reviews" onclick="return false">
              <?=(!empty($_GET['style'])) ? 'Hide Reviews' : 'See Reviews'?>
            </a>
            
            <!-- need this for proper toggle if div see reviews visible already -->
            <?php if(!empty($_GET['style'])) : ?>
              <script>var see_reviews = false;</script>
            <?php else : ?>
              <script>var see_reviews = true;</script>
            <?php endif ; ?>
          </p>
          
          <!-- div is visiable when leave a review link is clicked -->
          <div id="complete_form" class="leave_review_hidden <?=(!empty($_GET['class'])) ? esc_attr($_GET['class']) : '' ; ?>">

            <!-- need this script for proper toggle if div see reviews visible already -->
            <?php if(!empty($_GET['class'])) : ?>
              <script>var leave_review = false;</script>
            <?php else : ?>
              <script>var leave_review = true;</script>
            <?php endif ; ?>

            <div class='clear'></div>
            <hr />
            <h3 class="comment_header">Leave a Review for 
              <?=esc($record['make'])?> <?=esc($record['model'])?> <?=esc($record['year'])?>
            </h3>

            <form action="/index.php?page=leave_review" method="post" novalidate>

              <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
              
              <input type="hidden" name="car_id" value="<?=esc($record['car_id'])?>">

              <p class="form_paragraph">Please select number of stars:</p>
              <input type="radio" id="five_star" name="stars" value="5" 
              <?=(esc(old('stars',$post)) == 5) ? ' checked' : ''; ?>>
              <label for="five_star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </label><br>
              <input type="radio" id="four_star" name="stars" value="4" 
              <?=(esc(old('stars',$post)) == 4) ? ' checked' : ''; ?>>
              <label for="four_star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </label><br>
              <input type="radio" id="three_star" name="stars" value="3" 
              <?=(esc(old('stars',$post)) == 3) ? ' checked' : ''; ?>>
              <label for="three_star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </label><br>
              <input type="radio" id="two_star" name="stars" value="2" 
              <?=(esc(old('stars',$post)) == 2) ? ' checked' : ''; ?>>
              <label for="two_star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </label><br>

              <input type="radio" id="one_star" name="stars" value="1" 
              <?=(esc(old('stars',$post)) == 1) ? ' checked' : ''; ?>>
              <label for="one_star">
                <i class="fas fa-star"></i>
              </label><br>
              <p class="errors"><?=esc(old('stars',$errors))?></p>

              <p class="form_paragraph">Please describe briefly about your experience:</p>
              <textarea name="content" placeholder="type here ..."><?=esc(old('content',$post))?></textarea>
              <p class="errors"><?=esc(old('content',$errors))?></p>

              <input class="button submit" type="submit" value="Submit">
              <input class="button" type="reset" value="Clear">

            </form>     
          </div><!-- end of hidden leave review div -->

          <!-- div is visiable when see reviews link is clicked -->
          <div id="focus" class="read_reviews_hidden <?=(!empty($_GET['style'])) ? esc_attr($_GET['style']) : '' ; ?>">
          
            <div class='clear'></div>

            <?php if(!empty($reviews)) : ?>
              
              <?php foreach ($reviews as $review) : ?>
                <hr />
                <h3 class="comment_header">Review by 
                  <?=esc($review['first_name'])?> <?=esc($review['last_name'])?>:
                </h3>
                <p>
                  <?php for($i = 0; $i < esc($review['stars']); $i++ ) : ?>
                    <i class="fas fa-star"></i>
                  <?php endfor ; ?>                 
                </p>
                <p><?=esc($review['content'])?></p>
                <p>Added: <?=esc($review['date_added'])?></p>
              <?php endforeach ; ?>

            <?php else : ?>
  
              <hr />
              <h3 class="comment_header">No reviews found for this car</h3>

            <?php endif ; ?>

          </div><!-- end hidden see reviews div -->

        </div><!-- end single_record -->
      </div><!-- end wrapper -->
    </section>
<?php require __DIR__ . '/includes/footer_inc.php'; ?>