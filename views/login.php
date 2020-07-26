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
        <h1>Login to Your Account</h1>
        <h2>You need to enter your email address and a password associated with it.</h2>
       
        <form id="login_form"
            name="login_form"
            method="post"
            action="/index.php?page=login_validation"
            autocomplete="on"
            novalidate>

          <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
            
          <fieldset>  <!--first block-->
            <!-- <legend></legend> -->
            <p>
              <label for="email">Email: </label>
              <input type="email"
                     id="email"
                     name="email"
                     maxlength="50"
                     value="<?=esc(old('email',$post))?>">
            </p>
            <p class="errors"><?=esc(old('email',$errors))?></p>
            <p>
              <label for="password">Password: </label>
              <input type="password"
                     id="password"
                     name="password"
                     maxlength="255"
                     value="<?=esc(old('password',$post))?>">
            </p>
            <p class="errors"><?=esc(old('password',$errors))?></p> 
          </fieldset> 

          <!-- <fieldset>
            <legend>Address Information</legend>           
          </fieldset> -->

          <div class="clear_both"></div>

          <input type="submit" value="Submit">
          <input type="reset" value="Clear">
                     
        </form>
      </div>
    </section>
    
<?php require __DIR__ . '/includes/footer_inc.php'; ?>