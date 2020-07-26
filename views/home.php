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
        <h1 class="playfair"><?=$heading?></h1>
        <h2 class="playfair">Car of Your Dream</h2>
        <h3>Winnipeg Luxury Cars</h3>
        <p class="cta"><a href="/index.php?page=testdrive">Book your test drive</a></p> 
        <p class="downarrow"><img src="images/down-arrow.svg" width="50" height="50" alt=""></p>
      </div>
    </header>
<!--section-->
    <section>
      <div class="wrapper">
        <h2 class="main">For The Few Who Know the Difference</h2>
        <p class="main">Don't dream it. Drive it!
          Make every mile count. We stand behind every car we sell.
          Let us find an exclusive car that would blow your mind. Do you want 
          to show the world you're arrived? You need an exclusive car.</p>
        <div class="slider">
          <ul>
            <li class="page">
              <p><a href="/index.php?page=sale" class="sliderlink sliderlinkshort">Sale</a></p>
              <h3 class="sliderheading">Make Every Mile Count</h3>
              <div class="slidertext">
                <p>Don't dream it. Drive it! We stand behind every car we sell. Let us find an exclusive car that would blow your mind.</p>
              </div>
              <img src="images/target.svg" alt="" width="30" height="30" class="target" />
            </li>
            <li class="page">
              <p><a href="/index.php?page=rent" class="sliderlink sliderlinkshort">Rent</a></p>
              <h3 class="sliderheading">For Memorable Trips</h3>
              <div class="slidertext">
                <p>Make every mile count. We stand behind every car we sell. Let us provide you with an exclusive car for your memorable trips.</p>
              </div>
              <img src="images/target.svg" alt="" width="30" height="30" class="target" />
            </li>
            <li class="page">
              <p><a href="/index.php?page=catalog" class="sliderlink">Catalog</a></p>
              <h3 class="sliderheading">Beauty Is Not Enough</h3>
              <div class="slidertext">
                <p>We are proud to offer the best cars in Canadian auto market. We stand behind every car we sell. Let us find an exclusive car that you are looking for.</p>
              </div>
              <img src="images/target.svg" alt="" width="30" height="30" class="target" />
            </li>
            <li class="page">
              <p><a href="/index.php?page=testdrive" class="sliderlink">Test Drive</a></p>
              <h3 class="sliderheading">Get Your Favorite Here</h3>
              <div class="slidertext">
                <p>We are glad to book an appointment for a test drive. We believe that you will discover a future lifestyle, which is already available today!</p>
              </div>
              <img src="images/target.svg" alt="" width="30" height="30" class="target" />
            </li>
          </ul>
        </div>
        <!--<p class="clear"></p>-->
        <h2 class="main">An Exlusive Car For An Exclusive Person</h2>
        <p class="main">We are proud to offer the best cars in Canadian auto market. 
          Make every mile count. We stand behind every car we sell.
          Let us find an exclusive car that would blow your mind. Do you want 
          to show the world you're arrived? You need an exclusive car.</p>
      </div>
    </section>

<?php require __DIR__ . '/includes/footer_inc.php'; ?>