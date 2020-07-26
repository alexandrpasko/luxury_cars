<!-- Page Content -->
  <div class="container" id="edit_car">
    <div class="row">

      <div class="col-lg-12">
        
        <h1 class="mt-5">Add Car</h1>
        
        <p><a class="btn btn-warning" href="cars.php">Back</a>&nbsp;<!-- <a class="btn btn-success" href="car_add.php">Add a car</a> --></p>
        <p class="clear">&nbsp;</p>

        <form action="cars_edit_validate.php" method="post" enctype="multipart/form-data">

          <fieldset>
            <legend>Please fill out the form to add a car to database</legend>

            <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">

            <input type="hidden" name="car_id" value="<?=esc($car['car_id'])?>" />

            <div class="form-group">
              <label for="make">Car Make:</label>
              <input type="text" name="make" id="make" class="form-control" 
              value="<?=esc(old('make',$post))?>" />
              <p class="errors"><?=esc(old('make',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="model">Car Model:</label>
              <input type="text" name="model" id="model" class="form-control" 
              value="<?=esc(old('model',$post))?>" />
              <p class="errors"><?=esc(old('model',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="color">Color:</label>
              <input type="text" name="color" id="color" class="form-control" 
              value="<?=esc(old('color',$post))?>" />
              <p class="errors"><?=esc(old('color',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="body_type">Body Type:</label><br />
              <select class="form-control" name="body_type" id="body_type">
                <option value="">choose body type</option>

                  <option value="convertible" <?=esc(old('body_type',$post) === 'convertible') ? 'selected' : ''?>>convertible</option>
                  <option value="coupe" <?=esc(old('body_type',$post) === 'coupe') ? 'selected' : ''?>>coupe</option>
                  <option value="sedan" <?=esc(old('body_type',$post) === 'sedan') ? 'selected' : ''?>>sedan</option>
                  <option value="crossover" <?=esc(old('body_type',$post) === 'crossover') ? 'selected' : ''?>>crossover</option>
                  <option value="SUV" <?=esc(old('body_type',$post) === 'SUV') ? 'selected' : ''?>>SUV</option>
                  <option value="hatchback" <?=esc(old('body_type',$post) === 'hatchback') ? 'selected' : ''?>>hatchback</option>
                  <option value="vagon" <?=esc(old('body_type',$post) === 'vagon') ? 'selected' : ''?>>vagon</option>
                  <option value="van" <?=esc(old('body_type',$post) === '>van') ? 'selected' : ''?>>van</option>            
                  <option value="pickup" <?=esc(old('body_type',$post) === 'pickup') ? 'selected' : ''?>>pickup</option>

              </select>
              <p class="errors"><?=esc(old('body_type',$errors))?></p>
            </div>

            <label for="car_new">Car Condition:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="car_condition" id="car_new" value="new"  
                    <?=esc(old('car_condition',$post) === 'new') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="car_new">new</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="car_condition" id="car_used" value="used" 
                    <?=esc(old('car_condition',$post) === 'used') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="car_used">used</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('car_condition',$errors))?></p>

            <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" name="year" id="year" class="form-control" 
              value="<?=esc(old('year',$post))?>" />
              <p class="errors"><?=esc(old('year',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="mileage">Mileage:</label>
              <input type="text" name="mileage" id="mileage" class="form-control" 
              value="<?=esc(old('mileage',$post))?>" />
              <p class="errors"><?=esc(old('mileage',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="price">Sale Price:</label>
              <input type="text" name="price" id="price" class="form-control" 
              value="<?=esc(old('price',$post))?>" />
              <p class="errors"><?=esc(old('price',$errors))?></p>
            </div>

            <div class="form-group">
              <label for="price_rent">Rent Price:</label>
              <input type="text" name="price_rent" id="price_rent" class="form-control" 
              value="<?=esc(old('price_rent',$post))?>" />
              <p class="errors"><?=esc(old('price_rent',$errors))?></p>
            </div>

            <label for="car_automatic">Transmission:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="transmission" id="car_manual" value="manual" 
                    <?=esc(old('transmission',$post) === 'manual') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="car_manual">manual</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="transmission" id="car_automatic" value="automatic" 
                    <?=esc(old('transmission',$post) === 'automatic') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="car_automatic">automatic</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('transmission',$errors))?></p>

            <div class="form-group">
              <label for="fuel">Fuel:</label><br />
              <select class="form-control" name="fuel" id="fuel">
                <option value="">choose fuel type</option>
                <option value="gasoline" <?=esc(old('fuel',$post) === 'gasoline') ? 'selected' : ''?>>gasoline</option>
                <option value="diesel" <?=esc(old('fuel',$post) === 'diesel') ? 'selected' : ''?>>diesel</option>
                <option value="electric" <?=esc(old('fuel',$post) === 'electric') ? 'selected' : ''?>>electric</option>
                <option value="hybrid" <?=esc(old('fuel',$post) === 'hybrid') ? 'selected' : ''?>>hybrid</option>
                <option value="other" <?=esc(old('fuel',$post) === 'other') ? 'selected' : ''?>>other</option>
              </select>
              <p class="errors"><?=esc(old('fuel',$errors))?></p>
            </div>

            <label for="sale_yes">Available for Sale:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_sale" id="sale_yes" value="1"  
                    <?=esc(old('for_sale',$post) === '1') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="sale_yes">yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_sale" id="sale_no" value="0" 
                    <?=esc(old('for_sale',$post) === '0') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="sale_no">no</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('for_sale',$errors))?></p>

            <label for="rent_yes">Available for Rent:</label>
            <div class="radio_button">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_rent" id="rent_yes" value="1" 
                    <?=esc(old('for_rent',$post) === '1') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="rent_yes">yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="for_rent" id="rent_no" value="0" 
                    <?=esc(old('for_rent',$post) === '0') ? 'checked' : ''?>
                />
                <label class="form-check-label" for="rent_no">no</label>
              </div>
            </div>
            <p class="errors"><?=esc(old('for_rent',$errors))?></p>

            <div class="form-group">
              <label for="photo">Photo file name (add the file 2/1 ratio to image folder):</label>
              <input type="text" name="photo" id="photo" class="form-control" 
              value="<?=esc(old('photo',$post))?>" />
              <p class="errors"><?=esc(old('photo',$errors))?></p>
              <!-- <?php if(!empty($post['photo'])) : ?>
                <img src="../../images/<?=esc($car['photo'])?>" alt="<?=esc($car['photo'])?>" style="max-width: 500px; margin-top: 20px;">
              <?php endif ; ?> -->
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description"><?=esc(old('description',$post))?></textarea>
              <p class="errors"><?=esc(old('description',$errors))?></p>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
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
