<?php 

include "./lang/lang.php";
require "./functions.php";

$vulnID = $_GET["id"];
$lang = getLang();
$tr = tr('./lang');
$labs = getLabs($vulnID);
$vuln = getVuln($vulnID);


?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--    Document Title-->
  <title>VulnLab</title>
  <!--    Favicons-->
  <link rel="shortcut icon" type="image/x-icon" href="<?= __BASEURL__ ?>/public/assets/img/favicons/favicon.png">
  <!--    Stylesheets-->
  <link rel="stylesheet" crossorigin="anonymous"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
  <link href="<?= __BASEURL__ ?>/public/assets/css/theme.css" rel="stylesheet" />
  <link href="<?= __BASEURL__ ?>/public/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
  <main class="main" id="top">
    <!-- NAV START -->
    <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
      <div class="container"><a class="navbar-brand" href="<?= __BASEURL__?>"> <img
            src="<?= __BASEURL__ ?>/public/assets/img/gallery/logo.png" alt="..." /></a>
        <div class="navbar-nav ms-auto">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <?php

      echo '<img src="'.__BASEURL__.'/public/assets/img/'.$lang.'.png" style="width: 26px; margin-right:5px;" /> '.getLangName($lang).'';
    
    ?>
  </button>
  <ul class="dropdown-menu position-absolute w-100" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#" onclick="setLanguage('en')"><img src="<?= __BASEURL__ ?>/public/assets/img/en.png" style="width: 26px; margin-right:5px;" />English </a></li>
    <li><a class="dropdown-item" href="#" onclick="setLanguage('tr')"><img src="<?= __BASEURL__ ?>/public/assets/img/tr.png" style="width: 26px; margin-right:5px;" />Türkçe </a></li>
    <li><a class="dropdown-item" href="#" onclick="setLanguage('fr')"><img src="<?= __BASEURL__ ?>/public/assets/img/fr.png" style="width: 26px; margin-right:5px;" />Français </a></li>
  </ul>
</div>

        </div>
      </div>
    </nav>

        <!-- NAV END -->

<script>
  function setLanguage(lang) {
    document.cookie = "lang="+lang+";path=/";
    location.reload();
  }
</script>
    
<section id="labs">
        <div class="container">
          <h1 class="display-6 fw-semi-bold"> <?= $vuln["title"][$lang]; ?> </h1>
          <p class="fs-2"> <?= $vuln["description"][$lang]; ?> </p>
          
          <div class="row mb-4 mt-6">

            <?php foreach ($labs as  $lab) {
              ?>
              <div class="row mb-3">
                <div class="col-md-12">
                <a href="<?=__BASEURL__?><?=$lab['url'] ?>" class="text-decoration-none text-muted">
                  <div class="border rounded-1 border-700 h-100 features-items">
                    <div class="p-4">
                      <h3 class="lh-base"><?= $lab["title"][$lang] ?></h3>
                      <p class="mb-0"><?= $lab["description"][$lang] ?></p>
                    </div>
                  </div>
            </a>
                </div>
              </div>
              <?php }?>
       
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- <section> begin ============================-->
        <section>

          <div class="container">
            <div class="py-md-3">
              <hr class="mt-1 text-1000" />
            </div>

            <div class="row mx-md-5 px-md-5 d-flex justify-content-evenly">
                  <div class="col-6 col-lg-auto mt-5 mt-lg-0"><img src="../public/assets/img/gallery/brands/sibervatangray.png" alt="Yavuzlar" style="height:35px;" /></div>
                  <div class="col-6 col-lg-auto mt-5 mt-lg-0"><img src="../public/assets/img/gallery/brands/yavuzlargray.png" alt="Siber Vatan" style="height:35px;" /></div>
             </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
            <!-- ============================================-->
<!-- <section> begin ============================-->
<section class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 text-center text-xl-start">
                <!-- <a href="#!">
                    <img class="footer-img me-xl-5 me-3" src="<?= __BASEURL__ ?>/public/assets/img/gallery/facebook-line1.svg" alt="fb" style="width:20px;height:20px;" />
                </a> -->
                <a href="https://www.linkedin.com/company/siberyavuzlar/">
                    <img class="footer-img me-xl-5 me-3" src="<?= __BASEURL__ ?>/public/assets/img/gallery/linkedin-line1.svg" alt="in" style="width:20px;height:20px;" />
                </a>
                <a href="https://twitter.com/siberyavuzlar/">
                    <img class="footer-img me-xl-5 me-3" src="<?= __BASEURL__ ?>/public/assets/img/gallery/twitter-line1.svg" alt="twitter" style="width:20px;height:20px;" />
                </a>
                <a href="https://www.instagram.com/siberyavuzlar/">
                    <img class="footer-img me-xl-5 me-3" src="<?= __BASEURL__ ?>/public/assets/img/gallery/instagram-line1.svg" alt="instragram" style="width:20px;height:20px;" />
                </a>
            </div>
       
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
                <p class="mb-0">&copy; <a class="text-300" href="https://siberyavuzlar.com/" target="_blank"> Yavuzlar Web
                        Security</a></p>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<!-- <section> close ============================-->
</main>
<!--    End of Main Content-->


<!--    JavaScripts START-->
<script src="<?= __BASEURL__ ?>/public/vendors/@popperjs/popper.min.js"></script>
<script src="<?= __BASEURL__ ?>/public/vendors/bootstrap/bootstrap.min.js"></script>
<script src="<?= __BASEURL__ ?>/public/vendors/is/is.min.js"></script>
<script src="<?= __BASEURL__ ?>/public/vendors/swiper/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
<script src="<?= __BASEURL__ ?>/public/assets/js/theme.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"rel="stylesheet">
<!--    JavaScripts END-->

<!-- END BODY -->
</body>
</html>