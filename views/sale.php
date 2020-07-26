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
        <div class="adds">

          <?php foreach ($cars as $key => $value) : ?>

            <div class="sale"><img src="images/<?=esc($value['photo'])?>" alt="car" width="300" height="150">
              <h2 class="brand"><?=esc($value['make'])?> <?=esc($value['model'])?></h2>
              <p class="description"><?=esc(substr($value['description'], 0, 90))?> ...</p>
              <h3 class="year"><?=esc($value['car_condition'])?> <?=esc($value['year'])?></h3>
              <p class="link"><a href="/index.php?page=record&car_id=<?=esc($value['car_id'])?>">Learn</a></p>
              <div class="price">$<?=esc(price($value['price']))?></div>
            </div>

          <?php endforeach ; ?>

        </div>

        <!--<p class="clear"></p>-->

        <!-- links to flip next and prev pages -->
        <p class="pages">
          <a href="/index.php?page=sale&prev=1" 
            <?=(esc($_SESSION['limit']) > esc($_SESSION['offset'])) ? 'onclick="return false" style="color: #aaa;"' : "" ; ?> >
            &lt;prev
          </a>
           (<?=esc($_SESSION['sale_page'])?>) 
          <a href="/index.php?page=sale&next=1"
            <?=(esc($_SESSION['offset']) + esc($_SESSION['limit']) >= esc($_SESSION['total_results'])) ? 'onclick="return false" style="color: #aaa;"' : "" ; ?> >
            next&gt;
          </a>
        </p>
        
      </div>
    </section>
<?php require __DIR__ . '/includes/footer_inc.php'; ?>