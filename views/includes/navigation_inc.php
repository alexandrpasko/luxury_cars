    <!--[if LT IE 9]>
      <script src="old_ie.js"></script>
      <link rel="stylesheet" 
          href="styles/desktop.css" 
          type="text/css" />
      <style type="text/css">
        nav div.wrapper:before{ 
        content: "Please update you browser or use an alternateve browser to see and browse this website properly.";
        color: #f00;
        font-size: 1.2em;
        text-align: center;
        }
        nav, section, header, footer, div.wrapper, ul.footerlinks{
        display: block;
        }
      </style>
    <![endif]-->
  </head>
  
<!--

   ALEXAN    DR         PASKOALE   XA     ND    RPASKO    AL    EX   ANDRPA     SKOALEX 
  AL    EX   AN         DR          PA   SK    OA    LE   XAN   DR   PA   SK    OA    LE
  AL    EX   AN         DR           PA SK     OA    LE   XAND  RP   AS    KO   AL    EX
  ALEXANDR   PA         SKOALEXA      NDR      PASKOALE   XA ND RP   AS    KO   ALEXAND
  AL    EX   AN         DR           PA SK     OA    LE   XA  NDRP   AS    KO   AL  EX 
  AL    EX   AN         DR          PA   SK    OA    LE   XA   NDR   PA   SK    OA   LE
  AL    EX   ANDRPASK   OALEXAND   RP     AS   KO    AL   EX    AN   DRPASK     OA    LE


  ALEXAND     RPASKO     ALEXAND   RP    AS    KOALEX
  AL    EX   AN    DR   PA         SK   OA    LE    XA
  AL    EX   AN    DR   PA         SK  OA     LE    XA 
  ALEXAND    RP    AS    KOALEX    ANDRP      AS    KO
  AL         EXANDRPA         SK   OA  LE     XA    ND
  AL         EX    AN         DR   PA   SK    OA    LE
  AL         EX    AN   DRPASKO    AL    EX    ANDRPA
 
id="Alexandr_Pasko_Web_Development_Diploma_2019";
font-family: "ALEXANDR_PASKO", "no_need_backup_runs_everywhere";
Cool font, hey?
-->
   
  <body>
<!--navigation-->    
    <nav>
      <div class="wrapper">
        <!--logo-->
        <div id="logo_container"><a href="/"><img src="images/logoy.svg" width="155" height="41" alt="logo" /></a></div>
        <!--nav-->
        <div id="navcontainer">
          <!--hamburger-->
          <div class="navbars" id="topbar"></div>
          <div class="navbars" id="middlebar"></div>
          <div class="navbars" id="bottombar"></div>
          <!--nav links list-->
          <ul id="navigation">
            <li>
              <a id="home" class="nav_links<?php if($title == 'Luxury Cars Home'){echo ' current_page';}; ?>" href="/">Home</a>
            </li>
            <li>
              <a id="sale" class="nav_links<?php if($title == 'Luxury Cars Sale'){echo ' current_page';}; ?>" href="/index.php?page=sale">Sale</a>
            </li>
            <li>
              <a id="rent" class="nav_links<?php if($title == 'Luxury Cars Rent'){echo ' current_page';}; ?>" href="/index.php?page=rent">Rent</a>
            </li>
            <li>
              <a id="catalog" class="nav_links<?php if($title == 'Luxury Cars Catalog' || $title == 'Luxury Cars Description'){echo ' current_page';}; ?>" href="/index.php?page=catalog">Catalog</a>
            </li>
            <li>
              <a id="testdrive" class="nav_links<?php if($title == 'Luxury Cars Testdrive'){echo ' current_page';}; ?>" href="/index.php?page=testdrive">Test drive</a>
            </li>
          </ul>
        </div>
        <!-- icons -->
        <?php if (!empty($_SESSION['client_id'])) : ?>
          <a href="/index.php?page=profile" title="profile" class="user_icon"><i class="fas fa-user" <?php if($title == 'Luxury Cars Welcome'){echo ' style="color: #fff;"';}; ?>></i></a>
          <a href="/index.php?page=logout" title="log out" class="user_icon"><i class="fas fa-sign-out-alt"></i></a>
        <?php else : ?>
          <a href="/index.php?page=register" title="create an account" class="user_icon"><i class="fas fa-user-plus" <?php if($title == 'Luxury Cars Register'){echo ' style="color: #fff;"';}; ?>></i></a>
          <a href="/index.php?page=login" title="log in" class="user_icon"><i class="fas fa-sign-in-alt" <?php if($title == 'Luxury Cars Login'){echo ' style="color: #fff;"';}; ?>></i></a>
        <?php endif ; ?>
        
        <div class="search_div user_icon" title="search"><i class="fas fa-search"></i></div>

        <form class="search_form" action="/index.php?page=catalog&search=1" method="post">
          <input type="hidden" name="csrf_token" value="<?=esc_attr(create_csrf_token())?>">
          <input class="search_input" type="text" name="search" placeholder="type here to search cars"/>
          <button class="search_button user_icon" title="search"><i class="fas fa-search"></i></button>
        </form>

        <!-- <a href="#" title="search" class="user_icon"><i class="fas fa-search"></i></a> -->

      </div>
      <?php if(!empty($flash_message) && !empty($flash_class)) : ?>
        <div class="<?=esc_attr($flash_class)?>">
          <h3><?=esc($flash_message)?></h3>
        </div>
      <?php endif ; ?>
    </nav>