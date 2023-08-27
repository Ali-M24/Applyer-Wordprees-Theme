<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php the_title(); ?></title>
     <script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
     <?php wp_head(); ?>
</head>


<?php if (is_front_page()) { ?>

     <body dir="rtl" id="Home" data-page="HomePage">
          <div class="Header">
               <div class="header-content">
                    <div id="drawer" class="drawer">
                         <div class="drawer-top">
                              <div class="close-menu" onclick="menuController()">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
                                   </svg>
                              </div>
                         </div>
                         <nav class="drawer-menu">
                              <?php wp_nav_menu(array(
                                   'theme_location' => 'drawer-menu',
                                   'menu_id' => 'drawer-menu-ul',
                                   'container' => ''
                              )) ?>
                              <hr width="50%" style="margin: 12px 0;">
                              <div class="menu-btns-div">
                                   <a href="">
                                        <button class="drawer-signin">ورود</button>
                                   </a>
                                   <a href="">
                                        <button class="signup">عضویت</button>
                                   </a>
                              </div>
                         </nav>
                    </div>
                    <header class="header-bg">
                         <div class="top-sec">
                              <div class="right-side">
                                   <a href="<?php echo get_site_url() ?>">
                                        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                                   </a>
                                   <ul class="menu-ul">
                                        <div class="home-page-header-menu">
                                             <?php wp_nav_menu(array(
                                                  'theme_location' => 'top-menu',
                                                  'menu_id' => 'header-menu-ul',
                                                  'container' => ''
                                             )) ?>
                                        </div>
                                        <li onmouseover="countriesHover()" onmouseleave="countriesHoverout()" class="header-hover-li"><a class="links-a" href="./contact-us.html">خدمات</a>
                                             <div id="hover-section" class="menu-hover-sec">
                                                  <a class="country-link" href="<?php get_site_url(); ?>/کشور/انگلیس">
                                                       <div class="country-hover-item eng-hover">
                                                            <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Uk.png" alt="">
                                                            <h2>تحصیل در انگلستان</h2>
                                                       </div>
                                                  </a>
                                                  <a class="country-link" href="<?php get_site_url(); ?>/کشور/کانادا">
                                                       <div class="country-hover-item">
                                                            <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Canada.png" alt="">
                                                            <h2>تحصیل در کانادا</h2>
                                                       </div>
                                                  </a>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                              <div class="left-side">
                                   <a href="https://app.applyer.io/login" class="signin">ورود</a>
                                   <a href="https://app.applyer.io/signup">
                                        <button class="signup">عضویت</button>
                                   </a>
                              </div>
                              <div class="menu-button" onclick="menuController()">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="none">
                                             <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                             <path fill="currentColor" d="M20 17.5a1.5 1.5 0 0 1 .144 2.993L20 20.5H4a1.5 1.5 0 0 1-.144-2.993L4 17.5h16Zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 0 1 0-3h16Zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 1 1 0-3h16Z" />
                                        </g>
                                   </svg>
                              </div>
                         </div>
                    </header>
               <?php } else { ?>

                    <body dir="rtl">
                         <div id="drawer" class="drawer">
                              <div class="drawer-top">
                                   <div class="close-menu" onclick="menuController()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                             <path fill="currentColor" d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
                                        </svg>
                                   </div>
                              </div>
                              <nav class="drawer-menu">
                                   <?php wp_nav_menu(array(
                                        'theme_location' => 'drawer-menu',
                                        'menu_id' => 'drawer-menu-ul',
                                        'container' => ''
                                   )) ?>
                                   <hr width="50%" style="margin: 12px 0;">
                                   <div class="menu-btns-div">
                                        <a href="">
                                             <button class="drawer-signin">ورود</button>
                                        </a>
                                        <a href="">
                                             <button class="signup">عضویت</button>
                                        </a>
                                   </div>
                              </nav>
                         </div>
                         <header class="header-bg">
                              <div class="top-sec">
                                   <div class="right-side">
                                        <a href="<?php echo get_site_url() ?>">
                                             <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                                        </a>
                                        <ul class="menu-ul">
                                             <div class="home-page-header-menu">
                                                  <?php wp_nav_menu(array(
                                                       'theme_location' => 'top-menu',
                                                       'menu_id' => 'header-menu-ul',
                                                       'container' => ''
                                                  )) ?>
                                             </div>
                                             <li onmouseover="countriesHover()" onmouseleave="countriesHoverout()" class="header-hover-li"><a class="links-a" href="./contact-us.html">خدمات</a>
                                                  <div id="hover-section" class="menu-hover-sec">
                                                       <a class="country-link" href="<?php get_site_url(); ?>/کشور/انگلیس">
                                                            <div class="country-hover-item eng-hover">
                                                                 <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Uk.png" alt="">
                                                                 <h2>تحصیل در انگلستان</h2>
                                                            </div>
                                                       </a>
                                                       <a class="country-link" href="<?php get_site_url(); ?>/کشور/کانادا">
                                                            <div class="country-hover-item">
                                                                 <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Canada.png" alt="">
                                                                 <h2>تحصیل در کانادا</h2>
                                                            </div>
                                                       </a>
                                                  </div>
                                             </li>
                                        </ul>
                                   </div>
                                   <div class="left-side">
                                        <a href="https://app.applyer.io/login" class="signin">ورود</a>
                                        <a href="https://app.applyer.io/signup">
                                             <button class="signup">عضویت</button>
                                        </a>
                                   </div>
                                   <div class="menu-button" onclick="menuController()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                             <g fill="none">
                                                  <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                                  <path fill="currentColor" d="M20 17.5a1.5 1.5 0 0 1 .144 2.993L20 20.5H4a1.5 1.5 0 0 1-.144-2.993L4 17.5h16Zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 0 1 0-3h16Zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 1 1 0-3h16Z" />
                                             </g>
                                        </svg>
                                   </div>
                              </div>
                         </header>
                    <?php } ?>