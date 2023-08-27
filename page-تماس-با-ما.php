<?php get_header(); ?>

<body dir="rtl" id="ContactUs" data-page="ContactUs">
     <div id="drawer" class="drawer">
          <div class="drawer-top">
               <div class="close-menu" onclick="menuController()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                         <path fill="currentColor" d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
                    </svg>
               </div>
          </div>
          <div class="drawer-menu">
               <a href="./about-us.html"><span>درباره ما</span></a>
               <a href="/contact-us.html"><span>تماس با ما</span></a>
               <a href="./blog.html"><span>بلاگ</span></a>
               <a href="./blog.html"><span>خدمات</span></a>
               <hr width="50%" style="margin: 12px 0;">
               <div class="menu-btns-div">
                    <a href=""><button class="drawer-signin">ورود</button></a>
                    <a href=""><button class="signup">عضویت</button></a>
               </div>
          </div>
     </div>
     <div id="top-section"></div>
     <div class="ContactBody">
          <div class="contact-content">
               <div id="tabs" class="loc-tabs">
                    <span onclick="changeTab(1)" id="location-tab1" class="location-tab">دفتر تهران</span>
                    <span onclick="changeTab(2)" id="location-tab2" class="location-tab">دفتر لندن</span>
                    <span onclick="changeTab(3)" id="location-tab3" class="location-tab">دفتر تورنتو</span>
               </div>
               <div class="contact-location">
                    <div id="locationDiv1" class="location-box-div"></div>
                    <div id="locationDiv2" class="location-box-div"></div>
                    <div id="locationDiv3" class="location-box-div"></div>
               </div>
               <div id="responsive-location" class="responsive-location"></div>
               <div id="map-frame"></div>
          </div>
     </div>
     <?php get_footer(); ?>