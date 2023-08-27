<?php


function style_scripts()
{
    // wp_enqueue_style( 'stylename1', get_template_directory_uri().'/css/bootstrap.css', array(), null );
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), null);
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), null);
    wp_enqueue_style('drawer', get_template_directory_uri() . '/css/drawer.css', array(), null);
    wp_enqueue_style('fontAweSome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), null);
    if (is_page('اپلایر')) {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null);
    } elseif (is_page('بلاگ') || is_page('دسته بندی ها')) {
        wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css', array(), null);
    } elseif (is_page('تماس با ما')) {
        wp_enqueue_style('ContactUs', get_template_directory_uri() . '/css/contact-us.css', array(), null);
    } elseif (is_page('درباره ما')) {
        wp_enqueue_style('AboutUs', get_template_directory_uri() . '/css/about-us.css', array(), null);
    } elseif (is_singular('country')) {
        wp_enqueue_style('singleCountry', get_template_directory_uri() . '/css/single-country.css', array(), null);
    } elseif (is_single()) {
        wp_enqueue_style('SinglePost', get_template_directory_uri() . '/css/single-post.css', array(), null);
    } elseif (is_page('شرایط و ظوابط')) {
        wp_enqueue_style('Terms', get_template_directory_uri() . '/css/terms.css', array(), null);
    }
}

add_action('wp_enqueue_scripts', 'style_scripts');

add_theme_support('post-thumbnails');
function register_my_menus()
{

    register_nav_menus(array(
        'top-menu' => __('منو سربرگ'),
        'drawer-menu' => ('منو سایدبار'),
        'footer-1' => __('منو فوتر یک'),
        'footer-2' => __('منو فوتر دو'),
    ));
}

add_action('init', 'register_my_menus');

function get_breadcrumb()
{
    echo '<a class="breadcrumb-item" href="' . home_url() . '" rel="nofollow">خانه</a>';
    if (is_category() || is_single()) {
        echo '<div class="breadcrumb-separator"></div>';
        echo '<div class="breadcrumb-item">' . the_category(' &bull; ') . '</div>';
        if (is_single()) {
            echo '<div class="breadcrumb-separator"></div>';
            echo '<a class="breadcrumb-item">' . the_title() . '</a>';
        }
    } elseif (is_page()) {
        echo '<div class="breadcrumb-separator"></div>';
        echo '<a class="breadcrumb-item">' . the_title() . '</a>';
    } elseif (is_search()) {
        echo '<div class="breadcrumb-separator"></div>Search Results for... ';
        echo '"<em>';
        echo '<div class="breadcrumb-item">' . the_search_query() . '</div>';
        echo '</em>"';
    }
}

function remove_comment_fields($fields)
{
    unset($fields['url']);
    unset($fields['cookies']);
    unset($fields['comment_notes_before']);
    return $fields;
}

add_filter('comment_form_default_fields', 'remove_comment_fields', 60);
function move_to_down_comment_field($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'move_to_down_comment_field');

add_action('template_include', function ($template) {
    $url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/');
    if (preg_match('/^category(\/page(\/[0-9]+)+)?$/', $url_path)) {
        // load the file if exists
        $new_template = locate_template('page-بلاگ.php');
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
});


// Script Script Script Script Script Script Script Script Script ScriptScriptScriptScriptScript
add_action('wp_head', function () { ?>
    <script>
        function countriesHover() {
            document.getElementById('hover-section').style.display = 'block'
        }

        function countriesHoverout() {
            document.getElementById('hover-section').style.display = 'none'
        }

        var headerOpen = false;

        function menuController() {
            if (headerOpen === false) {
                document.getElementById('drawer').style.display = "block"
                headerOpen = !headerOpen;
            } else {
                document.getElementById('drawer').style.display = "none"
                headerOpen = !headerOpen;
            }
        }

        var ActiveTabInfo = [{
                index: 1,
                title: "ثبت نام و پرکردن اطلاعات",
                desc: "از شما خواسته می شود تا اطلاعات مرتبط با سوابق تحصیلی مانند رشته، دانشگاه، معدل و سال فراغت از تحصیل و همچنین سوابق شغلی خود را وارد کنید. با پر کردن این اطلاعات ۳۰ دقیقه با منتور خود بصورت رایگان می توانید مشاوره رایگان داشته باشید.",
                imageSourse: "<?php echo get_template_directory_uri(); ?>/images/item1.png",
                user: "توسط متقاضی",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path fill="currentColor" d="M24.85 3.15a3.932 3.932 0 0 0-5.561 0L4.502 17.937c-.44.44-.76.986-.927 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.626 3.626 0 0 0 1.587-.928L22.25 11.311a1.75 1.75 0 0 1-.047 2.426L20.22 15.72a.75.75 0 1 0 1.06 1.06l1.983-1.982a3.25 3.25 0 0 0 .047-4.548l1.54-1.54a3.932 3.932 0 0 0 0-5.56Zm-4.5 1.06a2.432 2.432 0 1 1 3.439 3.44L9.003 22.437a2.126 2.126 0 0 1-.93.544l-4.241 1.187l1.187-4.24a2.13 2.13 0 0 1 .544-.93L20.35 4.21Z"/></svg>`
            },
            {
                index: 2,
                title: "انتخاب منتور",
                desc: "ما بر اساس پرونده شما بهترین و منطبق ترین منتور را به شما پیشنهاد می دهیم تا تجربه زمینه و کشور موردنظر شما را داشته باشد این انطباق منتور با پرونده شما کیفیت خدمات اپلایر را بسیار افزایش می دهد.",
                imageSourse: "<?php echo get_template_directory_uri(); ?>/images/item1.png",
                user: "توسط اپلایر",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 1.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5ZM8.75 6a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0ZM12 12.25c-2.313 0-4.445.526-6.024 1.414C4.42 14.54 3.25 15.866 3.25 17.5v.102c-.001 1.162-.002 2.62 1.277 3.662c.629.512 1.51.877 2.7 1.117c1.192.242 2.747.369 4.773.369s3.58-.127 4.774-.369c1.19-.24 2.07-.605 2.7-1.117c1.279-1.042 1.277-2.5 1.276-3.662V17.5c0-1.634-1.17-2.96-2.725-3.836c-1.58-.888-3.711-1.414-6.025-1.414ZM4.75 17.5c0-.851.622-1.775 1.961-2.528c1.316-.74 3.184-1.222 5.29-1.222c2.104 0 3.972.482 5.288 1.222c1.34.753 1.961 1.677 1.961 2.528c0 1.308-.04 2.044-.724 2.6c-.37.302-.99.597-2.05.811c-1.057.214-2.502.339-4.476.339c-1.974 0-3.42-.125-4.476-.339c-1.06-.214-1.68-.509-2.05-.81c-.684-.557-.724-1.293-.724-2.601Z" clip-rule="evenodd"/></svg>`
            },
            {
                index: 3,
                title: "انتخاب رشته",
                desc: "منتور به شما کمک میکنه تا لیستی از بهترین رشته ها که مطابق با شرایط و علایق شماست آماده کنید. تا از بین آنها یک یا چند رشته را برای ادامه انتخاب کنید. تهیه درست این لیست بسیار تایین کننده و مهم است که نیاز به تجربه زیادی دارد.",
                imageSourse: "<?php echo get_template_directory_uri(); ?>/images/item1.png",
                user: "توسط منتور شما",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 3a2 2 0 0 1 2-2h9.982a2 2 0 0 1 1.414.586l4.018 4.018A2 2 0 0 1 21 7.018V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm2-.5a.5.5 0 0 0-.5.5v18a.5.5 0 0 0 .5.5h14a.5.5 0 0 0 .5-.5V8.5h-4a2 2 0 0 1-2-2v-4Zm10 0v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 0-.146-.336l-4.018-4.018A.5.5 0 0 0 15 2.5Z"/></svg>`
            },
            {
                index: 4,
                title: "آماده کردن مدارک",
                desc: "وقتی رشته های موردنظرت رو انتخاب میکنی منتور بهت کمک میکنه مدارک موردنیاز رو برای اپلای تو اون رشته ها آماده کنی. پیشنهاد ما اینه برای بیشتر از یه رشته بصورت موازی مدارک آماده کنی و اپلای کنی تا شانس دریافت پذیرش تحصیلت بیشتر بشه.",
                imageSourse: "<?php echo get_template_directory_uri(); ?>/images/item1.png",
                user: "توسط منتور شما",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 3a2 2 0 0 1 2-2h9.982a2 2 0 0 1 1.414.586l4.018 4.018A2 2 0 0 1 21 7.018V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm2-.5a.5.5 0 0 0-.5.5v18a.5.5 0 0 0 .5.5h14a.5.5 0 0 0 .5-.5V8.5h-4a2 2 0 0 1-2-2v-4Zm10 0v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 0-.146-.336l-4.018-4.018A.5.5 0 0 0 15 2.5Z"/></svg>`
            },
            {
                index: 5,
                title: "اپلای دانشگاه",
                desc: "پروسه اپلای دانشگاه توسط کارشناس اپلایر و به کمک منتور شما انجام می شود.",
                imageSourse: "<?php echo get_template_directory_uri(); ?>/images/item1.png",
                user: "توسط منتوز شما و اپلایر",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="m16 3.875l-.438.219L5.563 9L5 9.281V11h22V9.281L26.437 9l-10-4.906zm0 2.25L21.875 9h-11.75zM7 12v10H6v2h20v-2h-1V12h-2v10h-2V12h-2v10h-2V12h-2v10h-2V12h-2v10H9V12zM4 25v2h24v-2z"/></svg>`
            },
            {
                index: 6,
                title: "اپلای ویزا",
                desc: "پروسه اپلای ویزا توسط کارشناس حقوقی و به کمک منتور شما انجام می شود.",
                imageSourse: "<?php echo get_template_directory_uri(); ?>/images/item1.png",
                user: "توسط منتور شما و وکیل",
                icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="M18.5 5.5h2v18h-17v-20c8.5-1 14.75-3 14.75-3h.25v5Zm0 0H6m10.5 9A4.5 4.5 0 0 0 12 10m4.5 4.5A4.5 4.5 0 0 1 12 19m4.5-4.5c-.5.5-2 1-4.5 1s-4-.5-4.5-1M12 10a4.5 4.5 0 0 0-4.5 4.5M12 10c.966 0 1.75 2.015 1.75 4.5S12.966 19 12 19m0-9c-.966 0-1.75 2.015-1.75 4.5S11.034 19 12 19m-4.5-4.5A4.5 4.5 0 0 0 12 19"/></svg>`
            }
        ];

        function activeTab(index) {
            var i = 1;
            while (i < 7) {
                document.getElementById(`process${i}`).classList.remove('process-active');
                i++;
            }
            document.getElementById(`process${index}`).classList.add('process-active');
            var itemJson = ActiveTabInfo[index - 1];
            document.getElementById("activeItemInfo").innerHTML =
                `
                    <div class="left-process-item">
                         <h4>${itemJson.title}</h4>
                         <span>${itemJson.desc}</span>
                         <img src="${itemJson.imageSourse}"></img>
                    </div>
               `
        }

        var LocationsArray = [{
                index: 1,
                city: "تهران",
                adress: "جردن، خیابان نلسون ماندلا، برج افرا،واحد 84",
                phone: "021-22883944",
                email: "info@applyer.io",
                map: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155220.42891273493!2d-79.51594268280597!3d43.70625018113028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1688886970684!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`,
                responsiveMap: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155220.42891273493!2d-79.51594268280597!3d43.70625018113028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1688886970684!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
            },
            {
                index: 2,
                city: "لندن",
                adress: "Pippins Cherry Drive, Forty Green, Beaconsfield, England, HP9 1XP",
                phone: "447425526600+",
                email: "info@applyer.io",
                map: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.83988665725!2d-0.2664032959395031!3d51.52873980504949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2s!4v1688888974501!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`,
                responsiveMap: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.83988665725!2d-0.2664032959395031!3d51.52873980504949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2s!4v1688888974501!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
            },
            {
                index: 3,
                city: "تورنتو",
                adress: "Pippins Cherry Drive, Forty Green, Beaconsfield, England, HP9 1XP",
                phone: "447425526600+",
                email: "info@applyer.io",
                map: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155220.42891273493!2d-79.51594268280597!3d43.70625018113028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1688886970684!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`,
                responsiveMap: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155220.42891273493!2d-79.51594268280597!3d43.70625018113028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1688886970684!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
            }
        ]

        function clickOnLocation(index) {
            LocationsArray.forEach(e => {
                document.getElementById(`location${e.index}`).classList.remove('location-box-clicked');
            })
            document.getElementById('map-frame').innerHTML = LocationsArray[index - 1].map;
            document.getElementById(`location${index}`).classList.add('location-box-clicked');
            document.getElementById(`location${index}`).classList.remove('haveBorder');
        }

        function changeTab(index) {
            var i = 1;
            while (i < 4) {
                document.getElementById(`location-tab${i}`).classList.remove('tab-active');
                i++;
            }
            document.getElementById(`location-tab${index}`).classList.add('tab-active');
            var tabItem = LocationsArray[index - 1]
            document.getElementById(`responsive-location`).innerHTML =
                `
                    <div id="locationRes${tabItem.index}" onclick="clickOnLocation(${tabItem.index})" class="location-box">
                         <span class="location-title">${tabItem.city}</span>
                         <span class="location-adress">${tabItem.adress}</span>
                         <span class="location-phone">${tabItem.phone}</span>
                         <span class="location-email">${tabItem.email}</span>
                    </div>
               `
            document.getElementById(`locationRes${tabItem.index}`).style.backgroundColor = 'transparent'
            document.getElementById('map-frame').innerHTML = LocationsArray[index - 1].map;
        }

        /////////////////////////////////////////////////////
        window.onload = function() {
            const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
            accordionItemHeaders.forEach(accordionItemHeader => {
                accordionItemHeader.addEventListener("click", event => {
                    accordionItemHeader.classList.toggle("active");
                    const accordionItemBody = accordionItemHeader.nextElementSibling;
                    if (accordionItemHeader.classList.contains("active")) {
                        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                    } else {
                        accordionItemBody.style.maxHeight = 0;
                    }
                });
            });

            const raccordionItemHeaders = document.querySelectorAll(".raccordion-item-header");
            raccordionItemHeaders.forEach(raccordionItemHeader => {
                raccordionItemHeader.addEventListener("click", event => {
                    console.log('first')
                    raccordionItemHeader.classList.toggle("active");
                    const accordionItemBody = raccordionItemHeader.nextElementSibling;
                    if (raccordionItemHeader.classList.contains("active")) {
                        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                        raccordionItemHeader.classList.add("orange-head")
                    } else {
                        accordionItemBody.style.maxHeight = 0;
                        raccordionItemHeader.classList.remove("orange-head")
                    }
                });
            });

            if (document.querySelector("body").getAttribute("data-page") === "HomePage") {
                ////right side items
                ActiveTabInfo.forEach(element => {
                    document.getElementById(`r-item${element.index}`).innerHTML =
                        `
               <div id="process${element.index}" class="process-box" tabindex="${element.index}" onclick="activeTab(${element.index})">
               ${element.icon}
                    <span style="margin-left: 24px;" class="process-box-title">${element.title}</span>
                    <div class="process-box-desc">
                         <span>${element.user}</span>
                    </div>
               </div>
          `
                });
                ////defualt item
                var itemJson = ActiveTabInfo[0];
                document.getElementById("activeItemInfo").innerHTML =
                    `
               <div class="left-process-item">
                    <h4>${itemJson.title}</h4>
                    <span>${itemJson.desc}</span>
                    <img src="${itemJson.imageSourse}"></img>
               </div>
          `
                document.getElementById(`process1`).classList.add('process-active');

                //process import items
            }

            function getLocationBox(e) {
                if (e.index == 1 || e.index == 2) {
                    return `
                         <div id="location${e.index}" onclick="clickOnLocation(${e.index})" class="location-box haveBorder">
                              <span class="location-title">${e.city}</span>
                              <span class="location-adress">${e.adress}</span>
                              <span class="location-phone">${e.phone}</span>
                              <span class="location-email">${e.email}</span>
                         </div>
                    `
                } else {
                    return `
                         <div id="location${e.index}" onclick="clickOnLocation(${e.index})" class="location-box">
                              <span class="location-title">${e.city}</span>
                              <span class="location-adress">${e.adress}</span>
                              <span class="location-phone">${e.phone}</span>
                              <span class="location-email">${e.email}</span>
                         </div>
                    `
                }
            }

            var locationDefultItem = LocationsArray[0]
            document.getElementById('map-frame').innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d414551.4570907356!2d51.26041549770892!3d35.734007591577324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00491ff3dcd9%3A0xf0b3697c567024bc!2sTehran%2C%20Tehran%20Province!5e0!3m2!1sen!2s!4v1688886891347!5m2!1sen!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
            document.getElementById(`responsive-location`).innerHTML =
                `
                    <div style="" id="locationRes${locationDefultItem.index}" onclick="clickOnLocation(${locationDefultItem.index})" class="location-box">
                         <span class="location-title">${locationDefultItem.city}</span>
                         <span class="location-adress">${locationDefultItem.adress}</span>
                         <span class="location-phone">${locationDefultItem.phone}</span>
                         <span class="location-email">${locationDefultItem.email}</span>
                    </div>
               `
            LocationsArray.forEach(e => {
                document.getElementById(`locationDiv${e.index}`).innerHTML = getLocationBox(e);

            });
            document.getElementById(`location-tab1`).classList.add('tab-active');
            var tabFirstItem = LocationsArray[0]
            document.getElementById(`locationRes${tabFirstItem.index}`).style.backgroundColor = 'transparent'
            document.getElementById(`locationRes${tabFirstItem.index}`).style.marginRight = '12px'

        }
    </script>
    <?php });
// Script Script Script Script Script Script Script Script Script ScriptScriptScriptScriptScript
function latest_post()
{
    global $post;

    $args = array(
        'posts_per_page' => 3, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>

            <?php echo  '<div style="background-image: url(' . $url . ')  class="bold-post">' ?>
            <div class="bold-post-info">
                <span class="bold-post-info-title">
                    <?php the_title(); ?>
                </span>
                <div class="bold-post-info-desc">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1Z" />
                        </svg><?php comments_number(); ?></span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="white" d="M19.5 4h-3V2.5a.5.5 0 0 0-1 0V4h-7V2.5a.5.5 0 0 0-1 0V4h-3A2.503 2.503 0 0 0 2 6.5v13A2.503 2.503 0 0 0 4.5 22h15a2.502 2.502 0 0 0 2.5-2.5v-13A2.502 2.502 0 0 0 19.5 4zM21 19.5a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 19.5V11h18v8.5zm0-9.5H3V6.5C3 5.672 3.67 5 4.5 5h3v1.5a.5.5 0 0 0 1 0V5h7v1.5a.5.5 0 0 0 1 0V5h3A1.5 1.5 0 0 1 21 6.5V10z" />
                        </svg>
                        <?php get_the_date() ?></span>

                </div>
            </div>
<?php
        endwhile;
    endif;
}

add_shortcode('lastest-post', 'latest_post');

// Our custom post type function
function create_posttype()
{
    register_post_type(
        'country',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('کشورها'),
                'singular_name' => __('کشورها')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'کشور'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'comments'),
            'show_ui' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
function switch_on_comments_automatically()
{
    global $wpdb;
    $wpdb->query($wpdb->prepare("UPDATE $wpdb->posts SET comment_status = 'open'"));
}
switch_on_comments_automatically();
