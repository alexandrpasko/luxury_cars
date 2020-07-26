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
          <p>We are glad to book an appointment for a test drive. We believe that you will discover a future lifestyle, which is already available today! </p>
        </div>
      </div>
    </header>
<!--section-->
    <section>
      <div class="wrapper">
        <h1>Schedule your appointment</h1>
        <h2>Please submit the form to schedule your appointment for a test drive.</h2>
       
        <form id="first_form"
            name="first-form"
            method="post"
            action="http://www.scott-media.com/test/form_display.php"
            autocomplete="on">

          <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
            
          <fieldset>  <!--first block-->
            <legend>Personal Info</legend>
            <p>
              <label for="first_name">First name: </label>
              <input type="text"
                     id="first_name" 
                     name="first_name"
                     required="required">  
            </p>
            <p>
              <label for="last_name">Last name: </label>
              <input type="text"
                     id="last_name"
                     name="last_name"
                     required="required">
            </p>
            <p>
              <label for="email">Email: </label>
              <input type="email"
                     id="email"
                     name="email">
            </p>
            <p>
              <label for="phone_number">Phone number: </label>
              <input type="number"
                     id="phone_number"
                     name="phone_number">
            </p>   
          </fieldset> 

          <fieldset>
            <legend>Car information</legend>

            <p>
              <label>Make and model:</label>
              <input list="make_and_model" name="make_and_model" required="required" />
              <datalist id="make_and_model">
                <option value="Lamborghini Aventador">Lamborghini Aventador</option>
                <option value="Aston Martin Lagonda">Aston Martin Lagonda</option>
                <option value="Ferrari 812 GTS">Ferrari 812 GTS</option>
                <option value="Maserati Quattroporte">Maserati Quattroporte</option>
                <option value="Mercedes-Benz AMG">Mercedes-Benz AMG</option>
                <option value="Lexus LC 500">Lexus LC 500</option>
                <option value="Lamborghini Huracan">Lamborghini Huracan</option>
                <option value="Bugatti Vision Gran Turismo">Bugatti Vision Gran Turismo</option>
                <option value="Chevrolete Corvette">Chevrolete Corvette</option>
                <option value="Rolls Royce Phantom">Rolls Royce Phantom</option>
                <option value="Bugatti Chiron Super Sport">Bugatti Chiron Super Sport</option>
              </datalist>
            </p>

            <p>
              <label>Transmission:</label>
              <input list="transmission" name="transmission" required="required" />
              <datalist id="transmission">
                <option value="Manual">Manual</option>
                <option value="Automatic">Automatic</option>
              </datalist>
            </p>

            <p>
              <label for="comments">Comments: </label>
              <textarea id="comments"
                        name="comments"
                        placeholder="Please type here"
                        rows="6">
              </textarea>
            </p>

            <p>
              <label for="date">Date: </label>
              <input type="date"
                     id="date"
                     name="date">
            </p>               
          </fieldset>

          <div class="clear_both"></div>

          <input type="submit" value="Submit">
          <input type="reset" value="Clear">
                     
        </form>
      </div>
    </section>
<?php require __DIR__ . '/includes/footer_inc.php'; ?>