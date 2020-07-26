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
        <h1>Register</h1>
        <h2>Create your account. It's free, and only takes a minute.</h2>
       
        <form id="first_form"
            name="first_form"
            method="post"
            action="/index.php?page=register_validation"
            autocomplete="on"
            novalidate>

          <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
            
          <fieldset>  <!--first block-->
            <legend>Personal Info</legend>
            <p>
              <label for="first_name">First name: </label>
              <input type="text"
                     id="first_name" 
                     name="first_name"
                     maxlength="20"
                     value="<?=esc(old('first_name',$post))?>">  
            </p>
            <p class="errors"><?=esc(old('first_name',$errors))?></p>
            <p>
              <label for="last_name">Last name: </label>
              <input type="text"
                     id="last_name"
                     name="last_name"
                     maxlength="20"
                     value="<?=esc(old('last_name',$post))?>">
            </p>
            <p class="errors"><?=esc(old('last_name',$errors))?></p>
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
              <label for="phone">Phone number: </label>
              <input type="text"
                     id="phone"
                     name="phone"
                     maxlength="20"
                     value="<?=esc(old('phone',$post))?>">
            </p>
            <p class="errors"><?=esc(old('phone',$errors))?></p>
            <p>
              <label for="password">Password: </label>
              <input type="password"
                     id="password"
                     name="password"
                     maxlength="255"
                     value="<?=esc(old('password',$post))?>">
            </p>
            <p class="errors"><?=esc(old('password',$errors))?></p>
            <p>
              <label for="password_confirm">Confirm password: </label>
              <input type="password"
                     id="password_confirm"
                     name="password_confirm"
                     maxlength="255"
                     value="<?=esc(old('password_confirm',$post))?>">
            </p>
            <p class="errors"><?=esc(old('password_confirm',$errors))?></p>   
          </fieldset> 

          <fieldset>
            <legend>Address Information</legend>

            <p>
              <label for="street">Street: </label>
              <input type="text"
                     id="street"
                     name="street"
                     maxlength="40"
                     value="<?=esc(old('street',$post))?>">
            </p>
            <p class="errors"><?=esc(old('street',$errors))?></p>
            <p>
              <label for="city">City: </label>
              <input type="text"
                     id="city"
                     name="city"
                     maxlength="20"
                     value="<?=esc(old('city',$post))?>">
            </p>
            <p class="errors"><?=esc(old('city',$errors))?></p>
            <p>
              <label for="postal_code">Postal Code: </label>
              <input type="text"
                     id="postal_code"
                     name="postal_code"
                     maxlength="7"
                     value="<?=esc(old('postal_code',$post))?>">
            </p>
            <p class="errors"><?=esc(old('postal_code',$errors))?></p>
            <p>
              <label for="province">Province: </label>
              <input type="text"
                     id="province"
                     name="province"
                     maxlength="20"
                     value="<?=esc(old('province',$post))?>">
            </p>
            <p class="errors"><?=esc(old('province',$errors))?></p>
            <p>
              <label for="country">Country: </label>
              <input type="text"
                     id="country"
                     name="country"
                     maxlength="20"
                     value="<?=esc(old('country',$post))?>">
            </p> 
            <p class="errors"><?=esc(old('country',$errors))?></p>            
          </fieldset>

          <div class="clear_both"></div>

          <input type="submit" value="Submit">
          <input type="reset" value="Clear">
                     
        </form>
      </div>
    </section>
<?php require __DIR__ . '/includes/footer_inc.php'; ?>