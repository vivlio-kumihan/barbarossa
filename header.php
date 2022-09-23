<?php
// session_start();
// if (!$_SESSION['email']) {
//   $host = $_SERVER['HTTP_HOST'];
//   $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//   header("Location: //$host$uri/login.php");
//   exit;
// }
?>

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset="<?php bloginfo('charaset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?>|<?php bloginfo('discription'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ss-style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ss-style-pages-org.css" />
  <script src="https://kit.fontawesome.com/678cad97f5.js" crossorigin="anonymous" defer></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="greeting">
    <div class="hp-only">
      <div class="hamburger-menu-container">
        <h1 class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.png" alt="logo">
          <span>kumihan.com</span>
        </h1>
        <div class="hamburger-menu">
          <input type="checkbox" id="menu-btn-check">
          <label for="menu-btn-check" class="menu-btn"><span></span></label>
          <label for="menu-btn-check" id="nav-black"></label>
          <div class="menu-content">
            <ul>
              <li><a href="./book.html">本</a></li>
              <li><a href="./typesetting.php">組版</a></li>
              <li><a href="./programming.php">プログラミング</a></li>
              <li><a href="./photo.php">写真</a></li>
              <li><a class="sub-menu" href="<?php echo home_url(); ?>">メンバーページ</a>
                <ul class="sub-menu">
                  <li><a href="./register.php">sign up</a></li>
                  <li><a href="./login.php">log in</a></li>
                  <li><a href="./contact.php">contact</a></li>
                  <li><a href="./board.php">bbs</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="pc-only">
      <div class="menu-bar">
        <h1 class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.png" alt="logo">
          <span>kumihan.com</span>
        </h1>
        <ul class="menu-bar-lists">
          <li class="menu-bar-item"><a href="./book.html">本</a></li>
          <li class="menu-bar-item"><a href="./typesetting.php">組版</a></li>
          <li class="menu-bar-item"><a href="./programming.php">プログラミング</a></li>
          <li class="menu-bar-item"><a href="./photo.php">写真</a></li>
          <li class="menu-bar-item"><a href="./member.php">メンバーページ</a>
            <ul class="sub-menu">
              <li class="menu-bar-item"><a href="./register.php">sign up</a></li>
              <li class="menu-bar-item"><a href="./login.php">log in</a></li>
              <li class="menu-bar-item"><a href="./contact.php">contact</a></li>
              <li class="menu-bar-item"><a href="./board.php">bbs</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div id="banner">
      <div class="main-visual">
        <div class="slogan">
          <h1 class="logo pc-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white@2x.png" alt="logo">
            <span>kumihan.com</span>
          </h1>
          <h3>ことばを残す</h3>
          <p>
            本当に残したい<br class="hp-only">
            『ことば』を記録していきたいと<br class="hp-only">
            思っているみなさんへ<br>
            WEB標準の技術を使い<br class="hp-only">
            『本』を手本にパッケージング</br>
            その時々に必要な形で<br class="hp-only">
            しっかりと想いを伝える……
          </p>
          <p>
            そんなお手伝ができればと<br class="hp-only">
            日々、考えております。
          </p>
        </div>
      </div>
    </div>
  </div>