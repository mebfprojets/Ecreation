<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/themes.css')}}">
        <script src="{{asset('frontend/js/modernizr.min.js')}}"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-alt-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Chat -->
                            <!-- Chat demo functionality initialized in js/app.js -> chatUi() -->
                            <a href="page_ready_chat.html" class="sidebar-title">
                                <i class="gi gi-comments pull-right"></i> <strong>Chat</strong>UI
                            </a>
                            <!-- Chat Users -->
                            <ul class="chat-users clearfix">
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-away">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-away">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-busy">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                            </ul>
                            <!-- END Chat Users -->

                            <!-- Chat Talk -->
                            <div class="chat-talk display-none">
                                <!-- Chat Info -->
                                <div class="chat-talk-info sidebar-section">
                                    <button id="chat-talk-close-btn" class="btn btn-xs btn-default pull-right">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle pull-left">
                                    <strong>John</strong> Doe
                                </div>
                                <!-- END Chat Info -->

                                <!-- Chat Messages -->
                                <ul class="chat-talk-messages">
                                    <li class="text-center"><small>Yesterday, 18:35</small></li>
                                    <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                                    <li class="chat-talk-msg animation-slideRight">How are you?</li>
                                    <li class="text-center"><small>Today, 7:10</small></li>
                                    <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm fine, thanks!</li>
                                </ul>
                                <!-- END Chat Messages -->

                                <!-- Chat Input -->
                                <form action="index.html" method="post" id="sidebar-chat-form" class="chat-form">
                                    <input type="text" id="sidebar-chat-message" name="sidebar-chat-message" class="form-control form-control-borderless" placeholder="Type a message..">
                                </form>
                                <!-- END Chat Input -->
                            </div>
                            <!--  END Chat Talk -->
                            <!-- END Chat -->

                            <!-- Activity -->
                            <a href="javascript:void(0)" class="sidebar-title">
                                <i class="fa fa-globe pull-right"></i> <strong>Activity</strong>UI
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-danger alert-alt">
                                    <small>just now</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>2 hours ago</small><br>
                                    <i class="gi gi-coins fa-fw"></i> You had a new sale!
                                </div>
                                <div class="alert alert-success alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-plus fa-fw"></i> <a href="page_ready_user_profile.html"><strong>John Doe</strong></a> would like to become friends!<br>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Accept</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-times"></i> Ignore</a>
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>2 days ago</small><br>
                                    Running low on space<br><strong>18GB in use</strong> 2GB left<br>
                                    <a href="page_ready_pricing_tables.html" class="btn btn-xs btn-primary"><i class="fa fa-arrow-up"></i> Upgrade Plan</a>
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Messages -->
                            <a href="page_ready_inbox.html" class="sidebar-title">
                                <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>UI (5)
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-alt">
                                    Debra Stanley<small class="pull-right">just now</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>New Follower</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Sarah Cole<small class="pull-right">2 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>Your subscription was updated</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Bryan Porter<small class="pull-right">10 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>A great opportunity</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Jose Duncan<small class="pull-right">30 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>Account Activation</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Henry Ellis<small class="pull-right">40 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>You reached 10.000 Followers!</strong></a>
                                </div>
                            </div>
                            <!-- END Messages -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="index.html" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">John Doe</div>
                                <div class="sidebar-user-links">
                                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                            <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                            <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                                <!-- You can also add the default color theme
                                <li class="active">
                                    <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                                </li>
                                -->
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="css/themes/modern.css" data-toggle="tooltip" title="Modern"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="css/themes/flatie.css" data-toggle="tooltip" title="Flatie"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="css/themes/spring.css" data-toggle="tooltip" title="Spring"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="css/themes/fancy.css" data-toggle="tooltip" title="Fancy"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral" data-theme="css/themes/coral.css" data-toggle="tooltip" title="Coral"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake" data-theme="css/themes/lake.css" data-toggle="tooltip" title="Lake"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-forest themed-border-forest" data-theme="css/themes/forest.css" data-toggle="tooltip" title="Forest"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-waterlily themed-border-waterlily" data-theme="css/themes/waterlily.css" data-toggle="tooltip" title="Waterlily"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-emerald themed-border-emerald" data-theme="css/themes/emerald.css" data-toggle="tooltip" title="Emerald"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-blackberry themed-border-blackberry" data-theme="css/themes/blackberry.css" data-toggle="tooltip" title="Blackberry"></a>
                                </li>
                            </ul>
                            <!-- END Theme Colors -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="index.html"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="index2.html"><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard 2</span></a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-shopping_cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">eCommerce</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ecom_dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="page_ecom_orders.html">Orders</a>
                                        </li>
                                        <li>
                                            <a href="page_ecom_order_view.html">Order View</a>
                                        </li>
                                        <li>
                                            <a href="page_ecom_products.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="page_ecom_product_edit.html">Product Edit</a>
                                        </li>
                                        <li>
                                            <a href="page_ecom_customer_view.html">Customer View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                                    <span class="sidebar-header-title">Widget Kit</span>
                                </li>
                                <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Statistics</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_social.html"><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_links.html"><i class="gi gi-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Links</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Design Kit</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_preloader.html">Page Preloader</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_color_themes.html">Color Themes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Forms</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_forms_general.html">General</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_components.html" class=" active">Components</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_wizard.html">Wizard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Tables</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_tables_general.html">General</a>
                                        </li>
                                        <li>
                                            <a href="page_tables_responsive.html">Responsive</a>
                                        </li>
                                        <li>
                                            <a href="page_tables_datatables.html">Datatables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Icon Sets</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_icons_fontawesome.html">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Page Layouts</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_layout_static.html">Static</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_mini.html">Mini Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_alternative_sidebar_partial.html">Partial Alternative Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Develop Kit</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-brush sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Ready Pages</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_400.html">400</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_401.html">401</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_403.html">403</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_500.html">500</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_503.html">503</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_blank.html">Blank</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_ready_search_results.html">Search Results (4)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_article.html">Article</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_user_profile.html">User Profile</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_contacts.html">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_elearning_courses.html">Courses</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_elearning_course_lesson.html">Course - Lesson Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_inbox.html">Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_inbox_compose.html">Compose Message</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_inbox_message.html">View Message</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_ready_chat.html">Chat</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_files.html">Files</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tickets.html">Tickets</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_bug_tracker.html">Bug Tracker</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tasks.html">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_forum.html">Forum (3)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_coming_soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                                            <ul>
                                                <li>
                                                    <a href="login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="login_full.html">Login (Full Background)</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html">Login 2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html#reminder">Password Reminder</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html#reminder">Password Reminder 2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html#register">Register</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html#register">Register 2</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-wrench sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Components</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Link 1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Link 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_comp_maps.html">Maps</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_charts.html">Charts</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_carousel.html">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_animations.html">CSS3 Animations</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            <div class="sidebar-header sidebar-nav-mini-hide">
                                <span class="sidebar-header-options clearfix">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                                </span>
                                <span class="sidebar-header-title">Activity</span>
                            </div>
                            <div class="sidebar-section sidebar-nav-mini-hide">
                                <div class="alert alert-success alert-alt">
                                    <small>5 min ago</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>10 min ago</small><br>
                                    <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                </div>
                                <div class="alert alert-danger alert-alt">
                                    <small>Yesterday</small><br>
                                    <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                                </div>
                            </div>
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->
                            <li>
                                <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-share_alt"></i>
                                    <span class="label label-primary label-indicator animation-floating">4</span>
                                </a>
                            </li>
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Account</li>
                                    <li>
                                        <a href="page_ready_timeline.html">
                                            <i class="fa fa-clock-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">10</span>
                                            Updates
                                        </a>
                                        <a href="page_ready_inbox.html">
                                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">5</span>
                                            Messages
                                        </a>
                                        <a href="page_ready_pricing_tables.html"><i class="fa fa-magnet fa-fw pull-right"></i>
                                            <span class="badge pull-right">3</span>
                                            Subscriptions
                                        </a>
                                        <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                                            <span class="badge pull-right">11</span>
                                            FAQ
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_user_profile.html">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                        <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                    <li class="dropdown-header text-center">Activity</li>
                                    <li>
                                        <div class="alert alert-success alert-alt">
                                            <small>5 min ago</small><br>
                                            <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                        </div>
                                        <div class="alert alert-info alert-alt">
                                            <small>10 min ago</small><br>
                                            <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                        </div>
                                        <div class="alert alert-warning alert-alt">
                                            <small>3 hours ago</small><br>
                                            <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                        </div>
                                        <div class="alert alert-danger alert-alt">
                                            <small>Yesterday</small><br>
                                            <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)" class="alert-link">New bug submitted</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Components Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="gi gi-cogwheels"></i>Form Components<br><small>All kinds of components to enrich your forms!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Forms</li>
                            <li><a href="">Components</a></li>
                        </ul>
                        <!-- END Components Header -->

                        <!-- Form Components Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Switches Block -->
                                <div class="block">
                                    <!-- Switches Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Switches</strong></h2>
                                    </div>
                                    <!-- END Switches Title -->

                                    <!-- Switches Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <!-- Switches are CSS based, so you can handle them as usual (regular checkboxes) -->
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="switch switch-default"><input type="checkbox" checked><span></span></label>
                                                <label class="switch switch-primary"><input type="checkbox" checked><span></span></label>
                                                <label class="switch switch-info"><input type="checkbox" checked><span></span></label>
                                                <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                                                <label class="switch switch-warning"><input type="checkbox" checked><span></span></label>
                                                <label class="switch switch-danger"><input type="checkbox" checked><span></span></label>
                                                <span class="help-block">Checked</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="switch switch-default"><input type="checkbox"><span></span></label>
                                                <label class="switch switch-primary"><input type="checkbox"><span></span></label>
                                                <label class="switch switch-info"><input type="checkbox"><span></span></label>
                                                <label class="switch switch-success"><input type="checkbox"><span></span></label>
                                                <label class="switch switch-warning"><input type="checkbox"><span></span></label>
                                                <label class="switch switch-danger"><input type="checkbox"><span></span></label>
                                                <span class="help-block">Unchecked</span>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Switches Content -->
                                </div>
                                <!-- END Switches Block -->

                                <!-- Color Pickers Block -->
                                <div class="block">
                                    <!-- Color Pickers Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Color</strong> Pickers</h2>
                                    </div>
                                    <!-- END Color Pickers Title -->

                                    <!-- Color Pickers Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <!-- Bootstrap Colorpicker (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://mjolnic.github.io/bootstrap-colorpicker/ -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="example-colorpicker">Select a Color (hex)</label>
                                            <div class="col-md-6">
                                                <input type="text" id="example-colorpicker" name="example-colorpicker" class="form-control input-colorpicker" value="#1bbae1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="example-colorpicker2">As a component (hex)</label>
                                            <div class="col-md-6">
                                                <div class="input-group input-colorpicker">
                                                    <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                                    <span class="input-group-addon"><i></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="example-colorpicker3">Select a Color (rgba)</label>
                                            <div class="col-md-6">
                                                <input type="text" id="example-colorpicker3" name="example-colorpicker3" class="form-control input-colorpicker-rgba" value="rgba(27, 186, 225, 1)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="example-colorpicker4">As a component (rgba)</label>
                                            <div class="col-md-6">
                                                <div class="input-group input-colorpicker-rgba">
                                                    <input type="text" id="example-colorpicker4" name="example-colorpicker4" class="form-control" value="rgba(27, 186, 225, 1)">
                                                    <span class="input-group-addon"><i></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Color Pickers Content -->
                                </div>
                                <!-- END Color Pickers Block -->

                                <!-- Typeahead Block -->
                                <div class="block">
                                    <!-- Typeahead Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Typeahead</strong> Autocomplete</h2>
                                    </div>
                                    <!-- END Typeahead Title -->

                                    <!-- Typeahead Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <!-- Bootstrap Typeahead (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out https://github.com/bassjobsen/Bootstrap-3-Typeahead -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="example-typeahead">Search Autocomplete</label>
                                            <div class="col-md-6">
                                                <input type="text" id="example-typeahead" name="example-typeahead" class="form-control input-typeahead" autocomplete="off" placeholder="Search Countries..">
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Typeahead Content -->
                                </div>
                                <!-- END Typeahead Block -->

                                <!-- Time and Date Pickers Block -->
                                <div class="block">
                                    <!-- Time and Date Pickers Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Time &amp; Date</strong> Pickers</h2>
                                    </div>
                                    <!-- END Time and Date Pickers Title -->

                                    <!-- Time and Date Pickers Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <!-- Timepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://jdewit.github.io/bootstrap-timepicker/ -->
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i> Timepickers</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-timepicker">Select Time</label>
                                                <div class="col-md-6">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" id="example-timepicker" name="example-timepicker" class="form-control input-timepicker">
                                                        <span class="input-group-btn">
                                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-timepicker24">Select Time (24h)</label>
                                                <div class="col-md-6">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" id="example-timepicker24" name="example-timepicker24" class="form-control input-timepicker24">
                                                        <span class="input-group-btn">
                                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i> Datepickers</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-datepicker">Datepicker</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="example-datepicker" name="example-datepicker" class="form-control input-datepicker" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <input type="text" id="example-datepicker3" name="example-datepicker3" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <input type="text" id="example-datepicker4" name="example-datepicker4" class="form-control input-datepicker" data-date-format="mm-dd-yyyy" placeholder="mm-dd-yyyy">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <input type="text" id="example-datepicker5" name="example-datepicker5" class="form-control input-datepicker-close" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <span class="help-block">Auto close on select</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Inline Datepicker</label>
                                                <div class="col-md-6">
                                                    <div id="example-datepicker-inline" class="input-datepicker"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i> Date Range Picker</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-daterange1">Select Date Range</label>
                                                <div class="col-md-8">
                                                    <div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
                                                        <input type="text" id="example-daterange1" name="example-daterange1" class="form-control text-center" placeholder="From">
                                                        <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                                                        <input type="text" id="example-daterange2" name="example-daterange2" class="form-control text-center" placeholder="To">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Time and Date Pickers Content -->
                                </div>
                                <!-- END Time and Date Pickers Block -->
                            </div>
                            <div class="col-md-6">
                                <!-- Select Components Block -->
                                <div class="block">
                                    <!-- Select Components Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Select</strong> Components</h2>
                                    </div>
                                    <!-- END Select Components Title -->

                                    <!-- Select Components Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <!-- Jquery Tags Input (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i> Tags Input</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Enter tags</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="example-tags" name="example-tags" class="input-tags" value="HTML, CSS, Javascript">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i> Chosen (Advanced Select Boxes)</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-chosen">Chosen</label>
                                                <div class="col-md-6">
                                                    <select id="example-chosen" name="example-chosen" class="select-chosen" data-placeholder="Choose a Country.." style="width: 250px;">
                                                        <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curacao">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-chosen-multiple">Chosen Multiple</label>
                                                <div class="col-md-6">
                                                    <select id="example-chosen-multiple" name="example-chosen-multiple" class="select-chosen" data-placeholder="Choose a Country.." style="width: 250px;" multiple>
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curacao">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Select2 plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://ivaynberg.github.io/select2/ -->
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i> Select2 (Advanced Select Box)</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-select2">Select2</label>
                                                <div class="col-md-6">
                                                    <select id="example-select2" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="HTML">HTML</option>
                                                        <option value="CSS">CSS</option>
                                                        <option value="Javascript">Javascript</option>
                                                        <option value="PHP">PHP</option>
                                                        <option value="MySQL">MySQL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Select Components Content -->
                                </div>
                                <!-- END Select Components Block -->

                                <!-- Sliders Block -->
                                <div class="block">
                                    <!-- Sliders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Sliders</strong></h2>
                                    </div>
                                    <!-- END Sliders Title -->

                                    <!-- Sliders Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <!-- Slider for Bootstrap (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://www.eyecon.ro/bootstrap-slider -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Horizontal</label>
                                            <div class="col-md-8">
                                                <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show">
                                                <input type="text" id="example-slider-hor2" name="example-slider-hor2" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show">
                                                <input type="text" id="example-slider-hor3" name="example-slider-hor3" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show">
                                                <input type="text" id="example-slider-hor4" name="example-slider-hor4" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show">
                                                <input type="text" id="example-slider-hor5" name="example-slider-hor5" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="100" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Vertical</label>
                                            <div class="col-md-8">
                                                <input type="text" id="example-slider-vert1" name="example-slider-vert1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                <input type="text" id="example-slider-vert2" name="example-slider-vert2" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                <input type="text" id="example-slider-vert3" name="example-slider-vert3" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                <input type="text" id="example-slider-vert4" name="example-slider-vert4" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                <input type="text" id="example-slider-vert5" name="example-slider-vert5" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Range</label>
                                            <div class="col-md-8">
                                                <input type="text" id="example-slider-range1" name="example-slider-range1" class="form-control input-slider" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[400,600]" data-slider-orientation="horizontal" data-slider-tooltip="hide">
                                                <input type="text" id="example-slider-range2" name="example-slider-range2" class="form-control input-slider" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[250,750]" data-slider-orientation="horizontal" data-slider-tooltip="hide">
                                                <input type="text" id="example-slider-range3" name="example-slider-range3" class="form-control input-slider" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[100,900]" data-slider-orientation="horizontal" data-slider-tooltip="hide">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Horizontal Contextual</label>
                                            <div class="col-md-8">
                                                <div class="input-slider-danger">
                                                    <input type="text" id="example-slider-context1" name="example-slider-context1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="hide">
                                                </div>
                                                <div class="input-slider-warning">
                                                    <input type="text" id="example-slider-context2" name="example-slider-context2" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="hide">
                                                </div>
                                                <div class="input-slider-info">
                                                    <input type="text" id="example-slider-context3" name="example-slider-context3" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="hide">
                                                </div>
                                                <div class="input-slider-success">
                                                    <input type="text" id="example-slider-context4" name="example-slider-context4" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="hide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Vertical Contextual</label>
                                            <div class="col-md-8">
                                                <span class="input-slider-danger">
                                                    <input type="text" id="example-slider-context5" name="example-slider-context5" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                </span>
                                                <span class="input-slider-warning">
                                                    <input type="text" id="example-slider-context6" name="example-slider-context6" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                </span>
                                                <span class="input-slider-info">
                                                    <input type="text" id="example-slider-context7" name="example-slider-context7" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                </span>
                                                <span class="input-slider-success">
                                                    <input type="text" id="example-slider-context8" name="example-slider-context8" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sliders Content -->
                                </div>
                                <!-- END Sliders Block -->

                                <!-- Dropzone Block -->
                                <div class="block full">
                                    <!-- Dropzone Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        </div>
                                        <h2><strong>Dropzone.js</strong> <small>Drag and Drop files</small></h2>
                                    </div>
                                    <!-- END Dropzone Title -->

                                    <!-- Dropzone Content -->
                                    <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
                                    <form action="page_forms_components.html" class="dropzone"></form>
                                    <!-- END Dropzone Content -->
                                </div>
                                <!-- END Dropzone Block -->
                            </div>
                        </div>
                        <!-- END Form Components Row -->

                        <!-- CKEditor Block -->
                        <div class="block">
                            <!-- CKEditor Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                </div>
                                <h2><strong>CKEditor</strong> <small>Full Package</small></h2>
                            </div>
                            <!-- END CKEditor Title -->

                            <!-- CKEditor Content -->
                            <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->
                                <!-- More info can be found at http://ckeditor.com -->
                                <fieldset>
                                    <legend><i class="fa fa-angle-right"></i> In-place Editor</legend>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div id="inplace-ckeditor" contenteditable="true">Click this text to edit it with CKEditor.</div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend><i class="fa fa-angle-right"></i> Default Setup</legend>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <textarea id="textarea-ckeditor" name="textarea-ckeditor" class="ckeditor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group form-actions">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END CKEditor Content -->
                        </div>
                        <!-- END CKEditor Block -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.8</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        
        <script src="{{asset('frontend/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/js/app.js')}}"></script>

        <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
        <script src="js/helpers/ckeditor/ckeditor.js"></script>
    </body>
</html>