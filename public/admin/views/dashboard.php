  <!-- Page Content -->
  <div class="container">

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Welcome to admin site of Luxury Cars website. You have access to three primary database tables: cars, users, and reviews.</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Cars</h2>
            <p class="card-text">
              <strong>Total Cars in Database:</strong> 
              <?=esc($model->count_rows('cars'))?>
              <br />
              <strong>Available for Sale:</strong> 
              <?=esc($model->count_rows_conditionally('cars', 'for_sale', 1))?>
              <br />
              <strong>Available for Rent:</strong> 
              <?=esc($model->count_rows_conditionally('cars', 'for_rent', 1))?>
              <br />
              <strong>Lowest Price:</strong> 
              $<?=esc($model->get_lowest('cars', 'price', 0))?>
              <br />
              <strong>Highest Price:</strong> 
              $<?=esc($model->get_highest('cars', 'price', 0))?>
              <br />
              <strong>Average Price:</strong> 
              $<?=esc($model->get_average('cars', 'price', 0))?>
              <br />
              <strong>Average Rent Price:</strong> 
              $<?=esc($model->get_average('cars', 'price_rent', 0))?>
              <br />
            </p>

          </div>
          <div class="card-footer">
            <a href="cars.php" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Users</h2>
            <p class="card-text">
              <strong>Total Users:</strong> 
              <?=esc($model->count_rows('clients'))?>
              <br />
              <strong>Local Users:</strong> 
              <?=esc($model->count_rows_conditionally('clients', 'country', 'Canada'))?>
              <br />
              <strong>Foreign Users:</strong> 
              <?=esc($model->count_rows_conditionally_negation('clients', 'country', 'Canada'))?>
              <br />
              <strong>Clients:</strong> 
              <?=esc($model->count_rows_conditionally('clients', 'admin', 0))?>
              <br />
              <strong>Admin:</strong> 
              <?=esc($model->count_rows_conditionally('clients', 'admin', 1))?>
              <br />
            </p>
          </div>
          <div class="card-footer">
            <a href="users.php" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Reviews</h2>
            <p class="card-text">
              <strong>Total Reviews:</strong> 
              <?=esc($model->count_rows('reviews'))?>
              <br />
              <strong>Total Reviewers:</strong> 
              <?=esc($model->count_rows_distinct('reviews', 'client_id'))?>
              <br />
              <strong>Total Cars Reviewed:</strong> 
              <?=esc($model->count_rows_distinct('reviews', 'car_id'))?>
              <br />
              <strong>Average Stars:</strong> 
              <?=esc($model->get_average('reviews', 'stars', 1))?>
              <br />
            </p>
          </div>
          <div class="card-footer">
            <a href="reviews.php" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

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
