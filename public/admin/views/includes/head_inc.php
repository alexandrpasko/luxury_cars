<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=esc($title)?></title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/styles.css" rel="stylesheet">

</head>

<body class="<?=(esc_attr($title) == 'Luxury Cars Admin Create' || 
                esc_attr($title) == 'Luxury Cars Admin Edit Car') ? 'gray' : ''  ; ?>">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Luxury Cars Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?=(esc_attr($title) == 'Luxury Cars Admin Dashboard')? 'active' : ''  ; ?>">
            <a class="nav-link" href="index.php">Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?=(esc_attr($title) == 'Luxury Cars Admin Cars')? 'active' : ''  ; ?>">
            <a class="nav-link" href="cars.php">Cars</a>
          </li>
          <li class="nav-item <?=(esc_attr($title) == 'Luxury Cars Admin Users')? 'active' : ''  ; ?>">
            <a class="nav-link" href="users.php">Users</a>
          </li>
          <li class="nav-item <?=(esc_attr($title) == 'Luxury Cars Admin Reviews')? 'active' : ''  ; ?>">
            <a class="nav-link" href="reviews.php">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-warning" href="/../index.php?page=logout&logout_admin=1">Logout</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>

  <?php if(!empty($flash_message) && !empty($flash_class)) : ?>
    <div class="<?=esc_attr($flash_class)?>">
      <h3><?=esc($flash_message)?></h3>
    </div>
  <?php endif ; ?>
