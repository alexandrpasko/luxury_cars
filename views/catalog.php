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
          <p>We are proud to offer the best cars in Canadian auto market. We stand behind every car we sell. Let us find an exclusive car that you are looking for.</p>
        </div>
      </div>
    </header>
<!--section-->
    <section>
      <div class="wrapper">
        <h2 class="title" style="color: #0e0e0e;">We Sell Luxury</h2>
        <h2>
          <?php if (!empty($_GET['search']) && !empty($_POST['search'])) : ?>
            The list represents currently available selection searched by term 
            <strong><?=esc(($_POST['search']))?></strong>
          <?php elseif (isset($filters_number) && $filters_number > 0) : ?>
            The list represents currently available selection searched by
            <strong> 
            <?=esc($filters_number)?> 
             filters:
            </strong>
            <i style="color: #6b6969">
            <?=esc(array_to_string_values($filters_fields))?>.
            </i>
          <?php else : ?>
            The list represents currently available selection. Book your appointment on a "Testdrive" page.
          <?php endif ; ?>
        </h2>
        <!-- filter div -->       
        <div id="filters">
          <p>
            <span class="filter">
              <i class="fas fa-sliders-h"></i>
              filter&nbsp;<?=(isset($filters_number) && $filters_number > 0) ? $filters_number : '' ;?>
            </span>
            <span class="results">results:
              <span class="gold">&nbsp;<?=count($cars)?></span>
            </span>
          </p>

          <!-- hidden div with filter selection -->
          <div class="hidden_form">
            <form id="form_filter" action="/index.php?page=catalog&filter=1" method="post" novalidate>
              <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
              <select name="make" id="make">
                <option class="category" value="">make</option>
                <?php foreach ($makes as $make) : ?>
                  <option value="<?=esc_attr($make['make'])?>" 
                    <?=(esc(old('make', $_POST)) == esc($make['make'])) ? 'selected' : '' ; ?>>
                    <?=esc($make['make'])?>
                  </option>
                <?php endforeach ; ?>
              </select>
              <select name="body_type" id="body_type">
                <option class="category" value="">body type</option>
                <?php foreach ($body_types as $body_type) : ?>
                  <option value="<?=esc_attr($body_type['body_type'])?>" 
                    <?=(esc(old('body_type', $_POST)) == esc($body_type['body_type'])) ? 'selected' : '' ; ?>>
                    <?=esc($body_type['body_type'])?>
                  </option>
                <?php endforeach ; ?>
              </select>
              <select name="transmission" id="transmission">
                <option class="category" value="">transmission</option>
                <?php foreach ($transmissions as $transmission) : ?>
                  <option value="<?=esc_attr($transmission['transmission'])?>" 
                    <?=(esc(old('transmission', $_POST)) == esc($transmission['transmission'])) ? 'selected' : '' ; ?>>
                    <?=esc($transmission['transmission'])?>
                  </option>
                <?php endforeach ; ?>
              </select>
              <select name="car_condition" id="car_condition">
                <option class="category" value="">condition</option>                
                <option value="new" <?=(esc(old('car_condition', $_POST)) == 'new') ? 'selected' : '' ; ?>>new</option>
                <option value="used" <?=(esc(old('car_condition', $_POST)) == 'used') ? 'selected' : '' ; ?>>used</option>
              </select>              
              <select name="min_price" id="min_price">
                <option class="category" value="1">minimum price</option>                
                <option value="50000" <?=(esc(old('min_price', $_POST)) == '50000') ? 'selected' : '' ; ?>>$50,000</option>
                <option value="100000" <?=(esc(old('min_price', $_POST)) == '100000') ? 'selected' : '' ; ?>>$100,000</option>
                <option value="150000" <?=(esc(old('min_price', $_POST)) == '150000') ? 'selected' : '' ; ?>>$150,000</option>
                <option value="200000" <?=(esc(old('min_price', $_POST)) == '200000') ? 'selected' : '' ; ?>>$200,000</option>
                <option value="250000" <?=(esc(old('min_price', $_POST)) == '250000') ? 'selected' : '' ; ?>>$250,000</option>
              </select>
              <select name="max_price" id="max_price">
                <option class="category" value="9999999">maximum price</option>                
                <option value="100000" <?=(esc(old('max_price', $_POST)) == '100000') ? 'selected' : '' ; ?>>$100,000</option>
                <option value="200000" <?=(esc(old('max_price', $_POST)) == '200000') ? 'selected' : '' ; ?>>$200,000</option>
                <option value="300000" <?=(esc(old('max_price', $_POST)) == '300000') ? 'selected' : '' ; ?>>$300,000</option>
                <option value="400000" <?=(esc(old('max_price', $_POST)) == '400000') ? 'selected' : '' ; ?>>$400,000</option>
                <option value="500000" <?=(esc(old('max_price', $_POST)) == '500000') ? 'selected' : '' ; ?>>$500,000</option>
              </select>
              <select name="sort_by" id="sort_by">
                <option class="category" value="default">sort by</option>                
                <option value="price_asc" 
                  <?=(esc(old('sort_by', $_POST)) == 'price_asc') ? 'selected' : '' ; ?>>
                  price low to high</option>
                <option value="price_desc" 
                  <?=(esc(old('sort_by', $_POST)) == 'price_desc') ? 'selected' : '' ; ?>>
                  price high to low</option>
                <option value="year_desc" 
                  <?=(esc(old('sort_by', $_POST)) == 'year_desc') ? 'selected' : '' ; ?>>
                  year newer first</option>
                <option value="year_asc" 
                  <?=(esc(old('sort_by', $_POST)) == 'year_asc') ? 'selected' : '' ; ?>>
                  year older first</option>
              </select>

              <button>apply</button>
              <a class="reset" href="/index.php?page=catalog">reset</a>                                     
            </form>

          </div><!-- end of hidden div with filter selection -->

        </div><!-- end of filter div -->
        
        <!-- table with cars -->
        <?php if (count($cars) > 0) : ?>
          <table>
            <tr class="tdcolor">
              <th>Option</th>
              <th>Model</th>
              <th>Year</th>
              <th class="temporary">Description</th>
              <th>Price</th>
            </tr>
            
            <?php foreach ($cars as $key => $value) : ?>
              <tr>
                <td class="image">
                  <a href="/index.php?page=record&car_id=<?=esc($value['car_id'])?>">
                    <img class="option" src="images/<?=esc($value['photo'])?>" alt="car" width="150" height="75" />
                  </a>
                </td>
                <td><?=esc($value['make'])?> <?=esc($value['model'])?></td>
                <td><?=esc($value['year'])?></td>
                <td class="temporary"><?=substr(esc($value['description']), 0, 110)?> ...</td>
                <td>$<?=price(esc($value['price']))?></td>
              </tr>
            <?php endforeach ; ?>

            <tr class="tdcolor">
              <td id="signature" colspan="5">Winnipeg Luxury Cars &#124; luxury.cars@gmail.com</td>
            </tr>
          </table>
        <?php else : ?>
          <h2>Sorry, nothing was found. Please reset or adjust filters.</h2>
        <?php endif ; ?>

      </div>
    </section>
<?php require __DIR__ . '/includes/footer_inc.php'; ?>