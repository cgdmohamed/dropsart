<?php
$theme_path = get_template_directory_uri();
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
$user_id                   = get_current_user_id();
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="navbar-area navbar-area-two">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="<?php echo esc_html(get_site_url()); ?>" class="logo">
                <?php
                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="<?php echo esc_html(get_site_url()); ?>">
                        <?php
                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>

                    <div class="collapse navbar-collapse mean-menu d-flex justify-content-end">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a href="<?php echo esc_html(get_site_url()); ?>" class="nav-link active">
                                    الرئيسية
                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    الدورات
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.html" class="nav-link">الدورات المسجلة</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-course.html" class="nav-link">الدورات المباشرة</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    عنا
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="instructors.html" class="nav-link">عن المدرب</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">عن الشركة</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    المنتجات
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.html" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.html" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.html" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-product.html" class="nav-link">Single Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.html" class="nav-link">Wishlist</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    المدونة
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-column-one.html" class="nav-link">Blog Column One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-two.html" class="nav-link">Blog Column Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-three.html" class="nav-link">Blog Column Three</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-blog.html" class="nav-link">Single Blog</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">إتصل بنا</a>
                            </li>
                        </ul>

                        <!-- Start Other Option -->
                        <div class="others-option">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-icon">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>

                            <div class="register">
                            <a href="<?php echo get_site_url() ?>/dashboard">
                                <?php if (!is_user_logged_in()) {
                                ?>
                                    <a href="/dashboard" class="default-btn">
                                        دخول / تسجيل
                                    </a>
                                <?php
                                } else {
                                    echo tutor_utils()->get_tutor_avatar($user_id, 'sm');
                                }
                                ?>
                            </a>
                            </div>
                        </div>
                        <!-- End Other Option -->
                    </div>
                </nav>
            </div>
        </div>

        <!-- Start Others Option For Responsive -->
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-icon">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>

                            <div class="register">
                            <a href="/dashboard">
                                <?php if (!is_user_logged_in()) {
                                ?>
                                    <a href="/dashboard" class="default-btn">
                                        دخول / تسجيل
                                    </a>
                                <?php
                                } else {
                                    echo tutor_utils()->get_tutor_avatar($user_id, 'sm');
                                }
                                ?>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Others Option For Responsive -->
    </div>