<div dir="rtl" class="Footer">
    <div class="footer-conetnts">
        <div class="f-content">
            <div class="footer-info">
                <img width="180" style="margin-bottom: 12px;"
                     src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Footer Logo">
                <span>اپلایر، پلی به آموزش با کیفیت</span>
            </div>
            <div class="f-menu-1">
                <span>درباره ما</span>
                <ul>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-1',
                        'menu_id' => 'footer-menu-ul',
                        'container' => ''
                    )) ?>
                </ul>
            </div>
            <div class="f-menu-2">
                <p style="margin-bottom: 40px;"></p>
                <ul>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-2',
                        'menu_id' => 'footer-menu-ul',
                        'container' => ''
                    )) ?>
                </ul>
            </div>
            <div class="social-div">
                <span>شبکه های اجتماعی</span>
                <div class="social-icons-box">
                    <div class="social-icon">
                        <a href="#" style="font-size: 18px;" class="fa fa-instagram icon"></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" style="font-size: 18px;" class="fa fa-twitter icon"></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" style="font-size: 18px;" class="fa fa-linkedin icon"></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" style="font-size: 18px;" class="fa fa-facebook icon"></a>
                    </div>
                    <div class="social-icon">
                        <a href="#" style="font-size: 18px;" class="fa fa-youtube-play icon"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-copy-right">
            <span style="color: #ffffff;">کلیه حقوق این وب سایت برای اپلایر محفوظ می باشد. 1402</span>
        </div>
    </div>
    <div class="footer-conetnts-responsive">
        <div class="footer-logo-div">
            <img width="180" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
        </div>
        <div class="links">
            <ul class="links-ul">
                <div>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-1',
                        'menu_id' => 'footer-menu-ul',
                        'container' => ''
                    )) ?>
                </div>
                <div>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-2',
                        'menu_id' => 'footer-menu-ul',
                        'container' => ''
                    )) ?>
                </div>
            </ul>
        </div>
        <div class="footer-social-div">
            <h2 class="social-title">شبکه های اجتماعی</h2>
            <div style="margin-bottom: 24px;" class="social-icons-box">
                <div class="social-icon">
                    <a href="#" style="font-size: 18px;" class="fa fa-instagram icon"></a>
                </div>
                <div class="social-icon">
                    <a href="#" style="font-size: 18px;" class="fa fa-twitter icon"></a>
                </div>
                <div class="social-icon">
                    <a href="#" style="font-size: 18px;" class="fa fa-linkedin icon"></a>
                </div>
                <div class="social-icon">
                    <a href="#" style="font-size: 18px;" class="fa fa-facebook icon"></a>
                </div>
                <div class="social-icon">
                    <a href="#" style="font-size: 18px;" class="fa fa-youtube-play icon"></a>
                </div>
            </div>
        </div>
        <span class="copy-right">کلیه حقوق این وب سایت برای اپلایر محفوظ می باشد. 1402</span>
    </div>
</div>
<div id="Footer"></div>
</body>


</html>