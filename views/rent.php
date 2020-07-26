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
          <p>Make every mile count. We stand behind every car we sell. Let us provide you with an exclusive car for your memorable trips.</p>
        </div>
      </div>
    </header>
<!--section-->
    <section>
      <div class="wrapper">

        <?php foreach ($cars as $key => $value) : ?>

          <div class="sale">
            <div class="image_container" style="background-image: url(images/<?=esc($value['photo'])?>);">
              <img src="images/rent1.jpg" alt="car" width="960" height="380">
              <h2 class="brandtop"><?=esc($value['make'])?> <?=esc($value['model'])?></h2>
              <div class="price">$<?=price(esc($value['price_rent']))?> / day</div>
            </div>
            <div class="content_container">
              <h2 class="brand"><?=esc($value['make'])?> <?=esc($value['model'])?></h2>
              <p class="description"><?=esc(substr($value['description'], 0, 320))?> ...</p>
              <h3 class="year"><?=esc($value['car_condition'])?> <?=esc($value['year'])?></h3>
              <p class="link"><a href="/index.php?page=record&chanel=rent&car_id=<?=esc($value['car_id'])?>">Learn More</a></p>
              <p class="clear"></p>
            </div>  
          </div>

        <?php endforeach ; ?>

        <!-- <p class="load_more"><a href="#">Load More</a></p> -->

        <!-- links to flip next and prev pages -->
        <p class="load_more">
          <a href="/index.php?page=rent&prev=1" 
            <?=(esc($_SESSION['limit']) > esc($_SESSION['offset'])) ? 'onclick="return false" style="color: #aaa;"' : "" ; ?> >
            &lt;prev
          </a>
           (<?=esc($_SESSION['sale_page'])?>) 
          <a href="/index.php?page=rent&next=1"
            <?=(esc($_SESSION['offset']) + esc($_SESSION['limit']) >= esc($_SESSION['total_results'])) ? 'onclick="return false" style="color: #aaa;"' : "" ; ?> >
            next&gt;
          </a>
        </p>

      </div>
    </section>
<?php require __DIR__ . '/includes/footer_inc.php'; ?>