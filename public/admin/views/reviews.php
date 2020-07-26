  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Reviews</h1>

        <p class="clear">&nbsp;</p>
    
        <table id="admin_cars" class="table table-striped">

          <tr id="headers">
              <th>Review ID</th>
              <th>Client</th>
              <th>Car</th>
              <th>Stars</th>
              <th>Review</th>
              <th>Date Added</th>
          </tr>

          <?php foreach ($reviews as $review) : ?>

            <tr>
              <td><?=esc($review['review_id'])?></td>
              <td><?=esc($review['client_first_name'])?> <?=esc($review['client_last_name'])?></td>
              <td><?=esc($review['car_make'])?> <?=esc($review['car_model'])?></td>
              <td><?=esc($review['stars'])?></td>
              <td><?=esc($review['content'])?></td>
              <td><?=esc($review['date_added'])?></td>
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
