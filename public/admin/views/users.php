  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Users</h1>

        <p class="clear">&nbsp;</p>
    
        <table id="admin_cars" class="table table-striped">

          <tr id="headers">
              <th>User ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Admin</th>
          </tr>

          <?php foreach ($users as $user) : ?>

            <tr>
              <td><?=esc($user['client_id'])?></td>
              <td><?=esc($user['first_name'])?> <?=esc($user['last_name'])?></td>
              <td><?=esc($user['email'])?></td>
              <td><?=esc($user['street'])?>, <?=esc($user['city'])?>, <?=esc($user['province'])?>, <?=esc($user['country'])?></td>
              <td><?=(esc($user['admin']) === '1') ? 'yes' : 'no'?></td>
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
