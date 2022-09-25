<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kumihan.com(仮)</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.bxslider.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ss-style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ss-style-pages-org.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ss-style-borad.css" />

  <script src="https://kit.fontawesome.com/678cad97f5.js" crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modaal.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.bxslider.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/behavior.js" defer></script>
  <script>
    $(document).ready(function() {
      $('.slider').bxSlider();
    });
  </script>
</head>

<body>
  <header>
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
              <li><a href="/index.php">ホーム</a></li>
              <li><a href="/book.php">本</a></li>
              <li><a href="/typesetting.php">組版</a></li>
              <li><a href="/programming.php">プログラミング</a></li>
              <li><a href="/photo.php">写真</a></li>
              <li><a class="sub-menu" href="/member.php">メンバーページ</a>
                <ul class="sub-menu">
                  <li><a href="/register.php">sign up</a></li>
                  <li><a href="/login.php">log in</a></li>
                  <li><a href="/contact.php">contact</a></li>
                  <li><a href="/board.php">bbs</a></li>
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
          <li class="menu-bar-item"><a href="/index.php">ホーム</a></li>
          <li class="menu-bar-item"><a href="/book.php">本</a></li>
          <li class="menu-bar-item"><a href="/typesetting.php">組版</a></li>
          <li class="menu-bar-item"><a href="/programming.php">プログラミング</a></li>
          <li class="menu-bar-item"><a href="/photo.php">写真</a></li>
          <li class="menu-bar-item"><a href="/member.php">メンバーページ</a>
            <ul class="sub-menu">
              <li class="menu-bar-item"><a href="/register.php">sign up</a></li>
              <li class="menu-bar-item"><a href="/login.php">log in</a></li>
              <li class="menu-bar-item"><a href="/contact.php">contact</a></li>
              <li class="menu-bar-item"><a href="/board.php">bbs</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <?php wp_head(); ?>
  </header>