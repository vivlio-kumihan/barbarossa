<?php get_header(); ?>

<?php
// session_start();
// if (!$_SESSION['email']) {
//   $host = $_SERVER['HTTP_HOST'];
//   $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//   header("Location: //$host$uri/login.php");
//   exit;
// }
// 画像収集
$images = glob(esc_attr(get_template_directory_uri()) . '/assets/img/thumbnail/*.jpg');
?>


<div id="container">
  <?php
  foreach ($images as $photo) {
    echo $photo;
  }
  ?>
  <h1>Photography</h1>

  <div class="slider">
    <div><img src="./assets/img/photo1.jpg" alt=""> </div>
    <div><img src="./assets/img/photo2.jpg" alt=""> </div>
    <div><img src="./assets/img/photo3.jpg" alt=""> </div>
  </div>

  <button class="header-button"><span></span></button>
  <ul class="grid-photos">
    <?php foreach ($images as $photo) { ?>
      <?php
      $path_to_thumbnail = './assets/img/thumbnail/' . basename($photo);
      $path_to_view_photo = './assets/img/album/' . basename($photo);
      ?>
      <?php echo '<a class="view-photo" href="', $path_to_view_photo, '" data-group="gallery" class="gallery">' ?>
      <?php echo '<li><img class="thumbnail-photo" src="', $path_to_thumbnail, '" alt="thumbnail"></li>'; ?>
      </a>
    <?php } ?>
  </ul>
</div>>

<?php get_footer(); ?>