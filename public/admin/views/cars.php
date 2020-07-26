  <!-- Page Content -->
  <div class="container">


    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Cars (primary table)</h1>

        <div>
          <a class="btn btn-success float-left margin-bottom" href="car_add.php">Add a car</a> 
          <form class="form form-inline float-right" action="/admin/cars.php?search=1" method="post">
            <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
            <input type="text" name="search" placeholder="Search cars"/>
            <button>Search</button>
          </form>
        </div>
   
        <table id="admin_cars" class="table table-striped">

          <tr id="headers">
              <th>Car ID</th>
              <th>Make</th>
              <th>Model</th>
              <th>Year</th>
              <th>Condition</th>
              <th>Added</th>
              <th>Image</th>
              <th class="actions">Actions</th>
          </tr>

          <?php foreach ($cars as $car) : ?>

            <tr>
              <td><?=esc($car['car_id'])?></td>
              <td><?=esc($car['make'])?></td>
              <td><?=esc($car['model'])?></td>
              <td><?=esc($car['year'])?></td>
              <td><?=esc($car['car_condition'])?></td>
              <td><?=esc($car['date_added'])?></td>
              <td>
                <img class="thumbnail" src="../../images/<?=esc($car['photo'])?>" alt="car image" />
              </td>
              <td>
                <a class="btn btn-primary btn-sm mb" href="/admin/cars_edit.php?car_id=<?=esc($car['car_id'])?>">edit</a>
                <br />
                <form action="car_delete.php" 
                      method="post" 
                      onsubmit="return confirm('Do you really want to delete this car?');">
                  <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
                  <input type="hidden" name="car_id" value="<?=esc_attr($car['car_id'])?>">
                  <button class="delete btn btn-danger btn-sm mb">delete</button>
                </form>
              </td>
            </tr>

          <?php endforeach ?>

        </table>
        
      </div>
    </div>
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
