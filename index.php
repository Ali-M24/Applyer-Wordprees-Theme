<?php get_header() ?>
<div class="bottom-sec">
    <div class="header-about">
        <h2 class="about-text">ما در اپلایر
            از آغاز تا پایان یک
            مهاجرت تحصیلی موفق
            در کنارتان هستیم</h2>
        <span>با اپلایر مسیر آرزوهات هموار تره بهت کمک میکنیم بهترین و متناسب ترین کشور، دانشگاه و رشته
            رو انتخاب کنی و مراحل اپلای و دریافت پذیرش تحصیلی رو قدم به قدم با منتور های ما طی
            کنی.</span>
        <div class="signup-div">
            <button class="signup">مشاوره رایگان</button>
        </div>
    </div>
    <img class="women-img" src="<?php echo get_template_directory_uri(); ?>/images/women.png" alt="">
</div>
</div>
</div>
<div class="Body">
    <div class="apllyer-property">
        <h4>ویژگی های اپلایر</h4>
        <div class="property-boxs">
            <div class="property-box">
                <div class="property-head">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/1.png" alt="">
                    <h5>مشاوره رایگان</h5>
                </div>
                <span class="property-desc">
                    مشاوره ها رو رایگان کردیم تا بتونید از خدمات ما به خوبی استفاده کنید و مسیر آینده شغلیتون
                    رو انتخاب کنید.
                </span>
            </div>
            <div class="property-box">
                <div class="property-head">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="">
                    <h5>تضمین خدمات</h5>
                </div>
                <span class="property-desc">
                    خدماتمون رو تضمین میکنیم و در صورت عدم موفقیت در دریافت پذیرش و ویزا تمام مبلغ پرداختی شما
                    را بازگشت می دهیم.
                </span>
            </div>
            <div class="property-box">
                <div class="property-head">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/3.png" .png alt="">
                    <h5>منتور های تخصصی</h5>
                </div>
                <span class="property-desc">
                    بر اساس پرونده شما منطبق ترین منتور را به شما پیشنهاد می دهیم که سابقه تحصیل در زمینه و
                    کشور موردنظر شما را داشته باشد.
                </span>
            </div>
        </div>
    </div>
    <div class="supported-country">
        <h4>کشور های تحت پوشش</h4>
        <span class="supported-text">ما تلاش میکنیم خدمات خود را به سرعت گسترش دهیم. درحال حاظر برای حفظ کیفیت به
            متقاضیان کشور های انگلستان و کانادا خدمات ارائه می دهیم.</span>
        <div class="country-bg">
            <div class="countries">
                <div class="country-info canada">
                    <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/canada.png" alt="">
                    <h6 class="country-name">تحصیل در کانادا</h6>
                    <a href="<?php get_site_url(); ?>/کشور/کانادا">
                        <p class="country-more-info">اطلاعات بیشتر</p>
                    </a>
                </div>
                <div class="country-info eng">
                    <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Uk.png" alt="">
                    <h6 class="country-name">تحصیل در انگلستان</h6>
                    <a href="<?php get_site_url(); ?>/کشور/انگلیس">
                        <p class="country-more-info">اطلاعات بیشتر</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="countries-responsive">
            <div class="country-info">
                <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Canada.png" alt="">
                <h6 class="country-name">تحصیل در کانادا</h6>
                <a href="<?php get_site_url(); ?>/کشور/کانادا">
                    <p class="country-more-info">اطلاعات بیشتر</p>
                </a>
            </div>
            <div class="country-info">
                <img class="country-flag" src="<?php echo get_template_directory_uri(); ?>/images/Uk.png" alt="">
                <h6 class="country-name">تحصیل در انگلستان</h6>
                <a href="<?php get_site_url(); ?>/کشور/انگلیس">
                    <p class="country-more-info">اطلاعات بیشتر</p>
                </a>
            </div>
        </div>
    </div>
    <div class="work-process">
        <h4 style="margin-bottom: 40px;">روند پروژه ها در اپلایر</h4>
        <div class="process-sec">
            <div class="right-process">
                <img class="processBoard" src="<?php echo get_template_directory_uri(); ?>/images/processBoard.png" alt="ProcessBar">
                <div id="processboxitems" class="process-box-sec">
                    <div id="r-item1"></div>
                    <div id="r-item2"></div>
                    <div id="r-item3"></div>
                    <div id="r-item4"></div>
                    <div id="r-item5"></div>
                    <div id="r-item6"></div>
                </div>
            </div>
            <div id="activeItemInfo" class="left-process"></div>
        </div>
        <div class="process-accordion">
            <div id="accordion-item1" class="accordion-item">
                <div id="raccordion-item-header" class="raccordion-item-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                        <path fill="currentColor" d="M24.85 3.15a3.932 3.932 0 0 0-5.561 0L4.502 17.937c-.44.44-.76.986-.927 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.626 3.626 0 0 0 1.587-.928L22.25 11.311a1.75 1.75 0 0 1-.047 2.426L20.22 15.72a.75.75 0 1 0 1.06 1.06l1.983-1.982a3.25 3.25 0 0 0 .047-4.548l1.54-1.54a3.932 3.932 0 0 0 0-5.56Zm-4.5 1.06a2.432 2.432 0 1 1 3.439 3.44L9.003 22.437a2.126 2.126 0 0 1-.93.544l-4.241 1.187l1.187-4.24a2.13 2.13 0 0 1 .544-.93L20.35 4.21Z" />
                    </svg>
                    <span style="margin-right: 12px;">ثبت نام و پرکردن اطلاعات</span>
                </div><!-- /.raccordion-item-header -->
                <div class="raccordion-item-body">
                    <div class="raccordion-item-body-content">
                        ابتدا ثبت نام کنید و سپس فرم پرونده اولیه را تکمیل کنید. پس از تکمیل فرم پرونده ما به
                        منطبق ترین منتور را برای شما انتخاب میکنیم تا با شما تماس بگیرد و مسیر کلی پرونده شما
                        را توضیح و سوالات شما را پاسخ دهد.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div id="accordion-item2" class="accordion-item">
                <div id="raccordion-item-header" class="raccordion-item-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M12 1.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5ZM8.75 6a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0ZM12 12.25c-2.313 0-4.445.526-6.024 1.414C4.42 14.54 3.25 15.866 3.25 17.5v.102c-.001 1.162-.002 2.62 1.277 3.662c.629.512 1.51.877 2.7 1.117c1.192.242 2.747.369 4.773.369s3.58-.127 4.774-.369c1.19-.24 2.07-.605 2.7-1.117c1.279-1.042 1.277-2.5 1.276-3.662V17.5c0-1.634-1.17-2.96-2.725-3.836c-1.58-.888-3.711-1.414-6.025-1.414ZM4.75 17.5c0-.851.622-1.775 1.961-2.528c1.316-.74 3.184-1.222 5.29-1.222c2.104 0 3.972.482 5.288 1.222c1.34.753 1.961 1.677 1.961 2.528c0 1.308-.04 2.044-.724 2.6c-.37.302-.99.597-2.05.811c-1.057.214-2.502.339-4.476.339c-1.974 0-3.42-.125-4.476-.339c-1.06-.214-1.68-.509-2.05-.81c-.684-.557-.724-1.293-.724-2.601Z" clip-rule="evenodd" />
                    </svg>
                    <span style="margin-right: 12px;">انتخاب منتور</span>
                </div><!-- /.raccordion-item-header -->
                <div class="raccordion-item-body">
                    <div class="raccordion-item-body-content">
                        از شما خواسته می شود تا اطلاعات مرتبط با سوابق تحصیلی مانند رشته، دانشگاه، معدل و سال
                        فراغت از تحصیل و همچنین سوابق شغلی خود را وارد کنید.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div id="accordion-item3" class="accordion-item">
                <div id="raccordion-item-header" class="raccordion-item-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3 3a2 2 0 0 1 2-2h9.982a2 2 0 0 1 1.414.586l4.018 4.018A2 2 0 0 1 21 7.018V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm2-.5a.5.5 0 0 0-.5.5v18a.5.5 0 0 0 .5.5h14a.5.5 0 0 0 .5-.5V8.5h-4a2 2 0 0 1-2-2v-4Zm10 0v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 0-.146-.336l-4.018-4.018A.5.5 0 0 0 15 2.5Z" />
                    </svg>
                    <span style="margin-right: 12px;">انتخاب رشته</span>
                </div><!-- /.raccordion-item-header -->
                <div class="raccordion-item-body">
                    <div class="raccordion-item-body-content">
                        از شما خواسته می شود تا اطلاعات مرتبط با سوابق تحصیلی مانند رشته، دانشگاه، معدل و سال
                        فراغت از تحصیل و همچنین سوابق شغلی خود را وارد کنید.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div id="accordion-item4" class="accordion-item">
                <div id="raccordion-item-header" class="raccordion-item-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3 3a2 2 0 0 1 2-2h9.982a2 2 0 0 1 1.414.586l4.018 4.018A2 2 0 0 1 21 7.018V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm2-.5a.5.5 0 0 0-.5.5v18a.5.5 0 0 0 .5.5h14a.5.5 0 0 0 .5-.5V8.5h-4a2 2 0 0 1-2-2v-4Zm10 0v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 0-.146-.336l-4.018-4.018A.5.5 0 0 0 15 2.5Z" />
                    </svg>
                    <span style="margin-right: 12px;">آماده کردن مدارک</span>
                </div><!-- /.raccordion-item-header -->
                <div class="raccordion-item-body">
                    <div class="raccordion-item-body-content">
                        از شما خواسته می شود تا اطلاعات مرتبط با سوابق تحصیلی مانند رشته، دانشگاه، معدل و سال
                        فراغت از تحصیل و همچنین سوابق شغلی خود را وارد کنید.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div id="accordion-item5" class="accordion-item">
                <div id="raccordion-item-header" class="raccordion-item-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m16 3.875l-.438.219L5.563 9L5 9.281V11h22V9.281L26.437 9l-10-4.906zm0 2.25L21.875 9h-11.75zM7 12v10H6v2h20v-2h-1V12h-2v10h-2V12h-2v10h-2V12h-2v10h-2V12h-2v10H9V12zM4 25v2h24v-2z" />
                    </svg>
                    <span style="margin-right: 12px;">اپلای دانشگاه</span>
                </div><!-- /.raccordion-item-header -->
                <div class="raccordion-item-body">
                    <div class="raccordion-item-body-content">
                        از شما خواسته می شود تا اطلاعات مرتبط با سوابق تحصیلی مانند رشته، دانشگاه، معدل و سال
                        فراغت از تحصیل و همچنین سوابق شغلی خود را وارد کنید.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div id="accordion-item6" class="accordion-item">
                <div id="raccordion-item-header" class="raccordion-item-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" d="M18.5 5.5h2v18h-17v-20c8.5-1 14.75-3 14.75-3h.25v5Zm0 0H6m10.5 9A4.5 4.5 0 0 0 12 10m4.5 4.5A4.5 4.5 0 0 1 12 19m4.5-4.5c-.5.5-2 1-4.5 1s-4-.5-4.5-1M12 10a4.5 4.5 0 0 0-4.5 4.5M12 10c.966 0 1.75 2.015 1.75 4.5S12.966 19 12 19m0-9c-.966 0-1.75 2.015-1.75 4.5S11.034 19 12 19m-4.5-4.5A4.5 4.5 0 0 0 12 19" />
                    </svg>
                    <span style="margin-right: 12px;">اپلای ویزا</span>
                </div><!-- /.raccordion-item-header -->
                <div class="raccordion-item-body">
                    <div class="raccordion-item-body-content">
                        از شما خواسته می شود تا اطلاعات مرتبط با سوابق تحصیلی مانند رشته، دانشگاه، معدل و سال
                        فراغت از تحصیل و همچنین سوابق شغلی خود را وارد کنید.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
        </div>
    </div>
    <div class="questions-sec">
        <h4>سوالات متداول</h4>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header">
                    چطور می توانم قبل از شروع مشاوره رایگان دریافت کنم؟
                </div><!-- /.accordion-item-header -->
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        ابتدا ثبت نام کنید و سپس فرم پرونده اولیه را تکمیل کنید. پس از تکمیل فرم پرونده ما به
                        منطبق ترین منتور را برای شما انتخاب میکنیم تا با شما تماس بگیرد و مسیر کلی پرونده شما
                        را توضیح و سوالات شما را پاسخ دهد.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    تضمین خدمات چیست؟ و چطور می توان شامل تضمین خدمات شد؟
                </div><!-- /.accordion-item-header -->
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        تضمین خدمات درصورت انتخاب پکیج صفر تا صد یعنی چهار خدمت زیر اعمال می شود. و در صورتی
                        که موفق به دریافت پذیرش و ویزای تحصیلی نشوید کلیه هزینه ها به متقاضی بازگشت داده می
                        شود.
                        ۱- انتخاب لیست رشته ها
                        ۲- آماده سازی مدارک (برای حداقل ۳ رشته بصورت موازی)
                        ۳- اپلای دانشگاه
                        ۴- اپلای ویزا

                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    مزایای منتور های تخصصی چیست؟
                </div><!-- /.accordion-item-header -->
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        منتور های تخصصی تجربه تحصیل و یا تدریس در زمینه تحصیلی شما و یا کشور موردنظر شما را
                        دارند و تجربه پرونده های پرتعداد مطابق با شرایط شما باعث افزایش کیفیت خدمات آنها می
                        شود.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    آیا می توان هزینه را قسطی پرداخت کرد؟
                </div><!-- /.accordion-item-header -->
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        بله درصورتی که از خدمات صفر تا صد اپلایر استفاده کنید هم شامل تضمین بازگشت وجه و هم
                        شامل پرداخت اقساطی (پرداخت در دو قسط) می شود.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    چطور می توانم بورسیه تحصیلی دریافت کنم؟
                </div><!-- /.accordion-item-header -->
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        منتور ها پس از بررسی شرایط پرونده شما می توانند به شما درباره بورسیه تحصیلی راهنمایی
                        و هماهنگی لازم را ارائه کنند.
                    </div>
                </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
        </div>
    </div>
    <div class="users-cm">
        <h4>دیدگاه کاربران</h4>
        <div class="cms">
            <div class="cm">
                <div class="cm-head">
                    <div class="cm-profile">
                    </div>
                    <div class="cm-head-info">
                        <span class="cm-name"><img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="">سینا نعمت
                            الهی</span>
                        <span class="cm-wl-position">دانشجوی کامپیتر دانشگاه شریف</span>
                    </div>
                </div>
                <span class="cm-text">من مطمئن نبودم که موفق بشوم. اما در اپلایر به من این اعتماد را دادند که
                    می توانم در رشته و دانشگاه مورد علاقه ام در خارج از کشور تحصیل کنم. مرحله به مرحله پیش
                    رفتیم منتور ها در آماده کردن مدارکم و رفع نقاط ضعفم به من کمک کردند و در نهایت به آرزوی
                    تحصیل هنر در انگلستان رسیدم.
                </span>
            </div>
            <div class="cm cm-green">
                <div class="cm-head">
                    <div class="cm-profile">
                    </div>
                    <div class="cm-head-info">
                        <span class="cm-name"><img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="">سینا نعمت
                            الهی</span>
                        <span class="cm-wl-position">دانشجوری کامپیتر دانشگاه شریف</span>
                    </div>
                </div>
                <span class="cm-text">اپلایر به من یک منتور که سابقه تحصیل پزشکی در انگلیس داشت پیشنهاد کرد از
                    این بابت بسیار خوشحالم که منتورم اینقدر روی پرونده من تسلط و پیگیری داشت.
                </span>
            </div>
            <div class="cm">
                <div class="cm-head">
                    <div class="cm-profile">
                    </div>
                    <div class="cm-head-info">
                        <span class="cm-name"><img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="">سینا نعمت
                            الهی</span>
                        <span class="cm-wl-position">دانشجوری کامپیتر دانشگاه شریف</span>
                    </div>
                </div>
                <span class="cm-text">معدل پایینم انگیزه من را بسیار کم کرده بود اما مشاوره اولیه با منتور من
                    را دلگرم کرد و پرونده خود را با کمک منتور پیگیری کردیم. در نهایت با مشاوره منتور وزن سایر
                    بخش های رزومه خود را افزایش دادم و موفق به دریافت پذیرش از دانشگاه ساسکاچوان کانادا شدم.
                </span>
            </div>

        </div>
    </div>
    <div class="green-bg">
        <div class="blog-star">
            <h4>پیشنهادی از <span style="color: #05474d;">بلاگ</span>
            </h4>
            <div class="post-section">
                <?php
                $uri = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));
                $current_page_number = is_numeric(end($uri)) ? end($uri) : (get_query_var('paged') ? get_query_var('paged') : 1);
                $wp_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'paged' => $current_page_number));
                ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="blog-star-post">
                            <div class="post-img">
                                <!--                                <img src="--><?php //echo get_template_directory_uri(); 
                                                                                    ?><!--/images/posttest.png"-->
                                <!--                                     alt="post image">-->
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="post-title"><?php the_title(); ?></div>
                            </a>
                            <div class="post-desc"><?php the_excerpt() ?></div>
                            <div class="post-info">
                                <span class="info-comment"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1Z" />
                                    </svg><?php comments_number(); ?></span>
                                <span class="info-date"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19.5 4h-3V2.5a.5.5 0 0 0-1 0V4h-7V2.5a.5.5 0 0 0-1 0V4h-3A2.503 2.503 0 0 0 2 6.5v13A2.503 2.503 0 0 0 4.5 22h15a2.502 2.502 0 0 0 2.5-2.5v-13A2.502 2.502 0 0 0 19.5 4zM21 19.5a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 19.5V11h18v8.5zm0-9.5H3V6.5C3 5.672 3.67 5 4.5 5h3v1.5a.5.5 0 0 0 1 0V5h7v1.5a.5.5 0 0 0 1 0V5h3A1.5 1.5 0 0 1 21 6.5V10z" />
                                    </svg>
                                    <?php echo get_the_date(); ?></span>
                            </div class="post-info-desc">
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                else : endif; ?>
            </div>
        </div>
        <div class="service-plans">
            <h4>تعرفه خدمات</h4>
            <div class="price-box">
                <div class="plans-item">
                    <span class="plan-item-title">
                        مشاوره با منتور
                    </span>
                    <span class="plan-item-price">
                        رایگان به مدت محدود <span style="text-decoration: red 2px solid line-through;">5,000,000</span>
                    </span>
                </div>
                <div class="plans-item">
                    <span class="plan-item-title">
                        انتخاب رشته
                    </span>
                    <span class="plan-item-price">
                        5,000,000 تومان
                    </span>
                </div>
                <div class="plans-item">
                    <span class="plan-item-title">
                        آماده کردن مدارک برای هر رشته
                    </span>
                    <span class="plan-item-price">
                        300,000 تومان به ازای هر رشته
                    </span>
                </div>
                <div class="plans-item">
                    <span class="plan-item-title">
                        اپلای برای دانشگاه
                    </span>
                    <span class="plan-item-price">
                        500,000 تومان
                    </span>
                </div>
                <div class="plans-item no-border">
                    <span class="plan-item-title">
                        اپلای برای ویزا
                    </span>
                    <span class="plan-item-price">
                        8,000,000 تومان
                    </span>
                </div>
            </div>
        </div>
        <div class="service-guarantee">
            <img src="<?php echo get_template_directory_uri(); ?>/images/crct.png" alt="crct logo">
            <div class="guarantee-content">
                <h4>تضمین خدمات</h4>
                <span>اپلایر تضمین میکند در صورتی که خدمات ارائه شده از کیفیت مطلوب برخوردار باشد و در
                    صورتی که
                    در نهایت متقاضی موفق به دریافت پذیرش تحصیلی و ویزای تحصیلی نشد اپلایر مبلغ دریافت شده
                    را
                    بصورت کامل به متقاضی بازگشت می دهد.</span>
            </div>
        </div>
        <div class="service-guarantee-responsive">
            <div class="service-guarantee-responsive-head">
                <img src="<?php echo get_template_directory_uri(); ?>/images/crct.png" alt="crct logo">
                <h4>تضمین خدمات</h4>
            </div>
            <div class="guarantee-content">
                <span>اپلایر تضمین میکند در صورتی که خدمات ارائه شده از کیفیت مطلوب برخوردار باشد و در
                    صورتی که
                    در نهایت متقاضی موفق به دریافت پذیرش تحصیلی و ویزای تحصیلی نشد اپلایر مبلغ دریافت شده
                    را
                    بصورت کامل به متقاضی بازگشت می دهد.</span>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>