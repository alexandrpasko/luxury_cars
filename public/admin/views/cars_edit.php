<!-- Page Content -->
  <div class="container" id="edit_car">
    <div class="row">

      <div class="col-lg-12">
        
        <h1 class="mt-5">Edit Car</h1>
        
        <p><a class="btn btn-warning" href="cars.php">Back</a>&nbsp;<a class="btn btn-success" href="car_add.php">Add a car</a></p>
        <p class="clear">&nbsp;</p>

        <form action="cars_edit_validate.php?car_id=<?=esc($car['car_id'])?>" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend>Update The Car (Car ID: <?=esc($car['car_id'])?>)</legend>

            <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">

            <input type="hidden" name="car_id" value="<?=esc($car['car_id'])?>" />

            <div class="form-group">
              <label for="make">Car Make:</label>
              <input type="text" name="make" id="make" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['make']) : esc($car['make']) ?>" />
              <p class="errors"><?=esc(old('make',$errors))?></p>
            </div>
            <!-- value="<?=esc($car['make'])?>" /> -->

            <div class="form-group">
              <label for="model">Car Model:</label>
              <input type="text" name="model" id="model" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['model']) : esc($car['model']) ?>" />
              <p class="errors"><?=esc(old('model',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="color">Color:</label>
              <input type="text" name="color" id="color" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['color']) : esc($car['color']) ?>" />
              <p class="errors"><?=esc(old('color',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="body_type">Body Type:</label><br />
              <select class="form-control" name="body_type" id="body_type">
                <option value="">choose body type</option>
                <?php if(!empty($post)) : ?>
                  <option value="convertible" <?=esc(($post['body_type']) === 'convertible') ? 'selected' : ''?>>convertible</option>
                  <option value="coupe" <?=esc(($post['body_type']) === 'coupe') ? 'selected' : ''?>>coupe</option>
                  <option value="sedan" <?=esc(($post['body_type']) === 'sedan') ? 'selected' : ''?>>sedan</option>
                  <option value="crossover" <?=esc(($post['body_type']) === 'crossover') ? 'selected' : ''?>>crossover</option>
                  <option value="SUV" <?=esc(($post['body_type']) === 'SUV') ? 'selected' : ''?>>SUV</option>
                  <option value="hatchback" <?=esc(($post['body_type']) === 'hatchback') ? 'selected' : ''?>>hatchback</option>
                  <option value="vagon" <?=esc(($post['body_type']) === 'vagon') ? 'selected' : ''?>>vagon</option>
                  <option value="van" <?=esc(($post['body_type']) === '>van') ? 'selected' : ''?>>van</option>            
                  <option value="pickup" <?=esc(($post['body_type']) === 'pickup') ? 'selected' : ''?>>pickup</option>
                <?php else : ?>
                  <option value="convertible" <?=esc(($car['body_type']) === 'convertible') ? 'selected' : ''?>>convertible</option>
                  <option value="coupe" <?=esc(($car['body_type']) === 'coupe') ? 'selected' : ''?>>coupe</option>
                  <option value="sedan" <?=esc(($car['body_type']) === 'sedan') ? 'selected' : ''?>>sedan</option>
                  <option value="crossover" <?=esc(($car['body_type']) === 'crossover') ? 'selected' : ''?>>crossover</option>
                  <option value="SUV" <?=esc(($car['body_type']) === 'SUV') ? 'selected' : ''?>>SUV</option>
                  <option value="hatchback" <?=esc(($car['body_type']) === 'hatchback') ? 'selected' : ''?>>hatchback</option>
                  <option value="vagon" <?=esc(($car['body_type']) === 'vagon') ? 'selected' : ''?>>vagon</option>
                  <option value="van" <?=esc(($car['body_type']) === '>van') ? 'selected' : ''?>>van</option>            
                  <option value="pickup" <?=esc(($car['body_type']) === 'pickup') ? 'selected' : ''?>>pickup</option>
                <?php endif ; ?>
              </select>
              <p class="errors"><?=esc(old('body_type',$errors))?></p>
            </div>

            <label for="car_new">Car Condition:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="car_condition" id="car_new" value="new"  
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['car_condition']) === 'new') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['car_condition']) === 'new') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="car_new">new</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="car_condition" id="car_used" value="used" 
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['car_condition']) === 'used') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['car_condition']) === 'used') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="car_used">used</label>
              </div>
              <p class="errors"><?=esc(old('car_condition',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" name="year" id="year" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['year']) : esc($car['year']) ?>" />
              <p class="errors"><?=esc(old('year',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="mileage">Mileage:</label>
              <input type="text" name="mileage" id="mileage" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['mileage']) : esc($car['mileage']) ?>" />
              <p class="errors"><?=esc(old('mileage',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="price">Sale Price:</label>
              <input type="text" name="price" id="price" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['price']) : esc($car['price']) ?>" />
              <p class="errors"><?=esc(old('price',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="price_rent">Rent Price:</label>
              <input type="text" name="price_rent" id="price_rent" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['price_rent']) : esc($car['price_rent']) ?>" />
              <p class="errors"><?=esc(old('price_rent',$errors))?></p>
            </div>

            <label for="car_automatic">Transmission:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="transmission" id="car_manual" value="manual" 
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['transmission']) === 'manual') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['transmission']) === 'manual') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="car_manual">manual</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="transmission" id="car_automatic" value="automatic" 
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['transmission']) === 'automatic') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['transmission']) === 'automatic') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="car_automatic">automatic</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('transmission',$errors))?></p>

            <div class="form-group">
              <label for="fuel">Fuel:</label><br />
              <select class="form-control" name="fuel" id="fuel">
                <option value="">choose fuel type</option>
                <?php if(!empty($post)) : ?>
                  <option value="gasoline" <?=esc(($post['fuel']) === 'gasoline') ? 'selected' : ''?>>gasoline</option>
                  <option value="diesel" <?=esc(($post['fuel']) === 'diesel') ? 'selected' : ''?>>diesel</option>
                  <option value="electric" <?=esc(($post['fuel']) === 'electric') ? 'selected' : ''?>>electric</option>
                  <option value="hybrid" <?=esc(($post['fuel']) === 'hybrid') ? 'selected' : ''?>>hybrid</option>
                  <option value="other" <?=esc(($post['fuel']) === 'other') ? 'selected' : ''?>>other</option>
                <?php else : ?>
                  <option value="gasoline" <?=esc(($car['fuel']) === 'gasoline') ? 'selected' : ''?>>gasoline</option>
                  <option value="diesel" <?=esc(($car['fuel']) === 'diesel') ? 'selected' : ''?>>diesel</option>
                  <option value="electric" <?=esc(($car['fuel']) === 'electric') ? 'selected' : ''?>>electric</option>
                  <option value="hybrid" <?=esc(($car['fuel']) === 'hybrid') ? 'selected' : ''?>>hybrid</option>
                  <option value="other" <?=esc(($car['fuel']) === 'other') ? 'selected' : ''?>>other</option>                    
                <?php endif ; ?>
              </select>
              <p class="errors"><?=esc(old('fuel',$errors))?></p>
            </div>

            <label for="sale_yes">Available for Sale:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_sale" id="sale_yes" value="1"  
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['for_sale']) === '1') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['for_sale']) === '1') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="sale_yes">yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_sale" id="sale_no" value="0" 
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['for_sale']) === '0') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['for_sale']) === '0') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="sale_no">no</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('for_sale',$errors))?></p>

            <label for="rent_yes">Available for Rent:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_rent" id="rent_yes" value="1" 
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['for_rent']) === '1') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['for_rent']) === '1') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="rent_yes">yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_rent" id="rent_no" value="0" 
                  <?php if(!empty($post)) : ?>
                    <?=esc(($post['for_rent']) === '0') ? 'checked' : ''?>
                  <?php else : ?>
                    <?=esc(($car['for_rent']) === '0') ? 'checked' : ''?>
                  <?php endif ; ?>
                />
                <label class="form-check-label" for="rent_no">no</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('for_rent',$errors))?></p>

            <div class="form-group">
              <label for="photo">Photo file name (add the file 2/1 ratio to image folder):</label>
              <input type="text" name="photo" id="photo" class="form-control" 
              value="<?=(!empty($post)) ? esc($post['photo']) : esc($car['photo']) ?>" />
              <p class="errors"><?=esc(old('photo',$errors))?></p>
              <img src="../../images/<?=esc($car['photo'])?>" alt="<?=esc($car['photo'])?>" style="max-width: 500px; margin-top: 20px;">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description"><?=(!empty($post)) ? esc($post['description']) : esc($car['description']) ?></textarea>
              <p class="errors"><?=esc(old('description',$errors))?></p>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </fieldset>
        </form>
        
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Alexandr Pasko 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
