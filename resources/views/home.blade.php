{{--@extends('layouts.app')--}}
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>URL GENERATOR</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicons/favicon.ico')}}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{asset('/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="{{asset('js/config.navbar-vertical.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset('lib/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('lib/datatables-bs4/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/datatables.net-responsive-bs4/responsive.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('lib/leaflet/leaflet.css')}}" rel="stylesheet">
    <link href="{{asset('lib/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">
    <link href="{{asset('lib/leaflet.markercluster/MarkerCluster.Default.css')}}" rel="stylesheet">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet">

</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">


    <div class="container" data-layout="container">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
            <div class="d-flex align-items-center">
                <div class="toggle-icon-wrapper">

                    <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

                </div><a class="navbar-brand" href="index.html">
                    <div class="d-flex align-items-center py-3"><img class="mr-2" src="{{asset('img/illustrations/falcon.png')}}" alt="" width="40" /><span class="text-sans-serif">URL GEN</span>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="navbar-vertical-content perfect-scrollbar scrollbar">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span>
                                </div>
                            </a>
                            <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                                <li class="nav-item active"><a class="nav-link" href="index.html">Dashboard</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="home/dashboard-alt.html">Dashboard alt</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="home/feed.html">Feed</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="home/landing.html">Landing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text">Pages</span>
                                </div>
                            </a>
                            <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                                <li class="nav-item"><a class="nav-link" href="pages/activity.html">Activity</a></li>
{{--                                <li class="nav-item"><a class="nav-link" href="pages/associations.html">Associations</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/billing.html">Billing</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/customer-details.html">Customer details</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/event-detail.html">Event detail</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/event-create.html">Event create</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/events.html">Events</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/faq.html">Faq</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/invoice.html">Invoice</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/invite-people.html">Invite people</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/notifications.html">Notifications</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/people.html">People</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/pricing.html">Pricing</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/pricing-alt.html">Pricing alt</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/profile.html">Profile</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/settings.html">Settings</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="pages/starter.html">Starter</a></li>--}}
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-errors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-errors">Errors</a>
                                    <ul class="nav collapse" id="pages-errors" data-parent="#pages">
                                        <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">404</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">500</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <div class="navbar-vertical-divider">
                        <hr class="navbar-vertical-hr my-2" />
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="widgets.html">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Widgets</span>
                                </div>
                            </a></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text">Components</span>
                                </div>
                            </a>
                            <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                                <li class="nav-item"><a class="nav-link" href="components/accordion.html">Accordion</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/alerts.html">Alerts</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/avatar.html">Avatar</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/background.html">Background</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/badges.html">Badges</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/bulk-select.html">Bulk select</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/cards.html">Cards</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/carousel.html">Carousel</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/collapse.html">Collapse</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/countup.html">Countup</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/dropdowns.html">Dropdowns</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/fancyscroll.html">Fancyscroll</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/fancytab.html">Fancytab</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/forms.html">Forms</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/hoverbox.html">Hoverbox</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/list-group.html">List group</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/modals.html">Modals</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/media-object.html">Media object</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/navs.html">Navs</a>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                                    <ul class="nav collapse" id="components-navbar" data-parent="#components">
                                        <li class="nav-item"><a class="nav-link" href="components/navbar/default.html">Default</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="components/navbar/vertical.html">Vertical</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="components/navbar/top.html">Top</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="components/navbar/combo.html">Combo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/cookie-notice.html">Cookie notice</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/page-headers.html">Page headers</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/pagination.html">Pagination</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/popovers.html">Popovers</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/progress.html">Progress</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="components/search.html">
                                        <div class="d-flex align-items-center">Search<span class="badge badge-pill ml-2 badge-soft-success">New</span>
                                        </div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link" href="components/scrollspy.html">Scrollspy</a></li>
                                <li class="nav-item"><a class="nav-link" href="components/sidepanel.html">Sidepanel</a></li>
                                <li class="nav-item"><a class="nav-link" href="components/spinners.html">Spinners</a></li>
                                <li class="nav-item"><a class="nav-link" href="components/tables.html">Tables</a></li>
                                <li class="nav-item"><a class="nav-link" href="components/tabs.html">Tabs</a> </li>
                                <li class="nav-item"><a class="nav-link" href="components/toasts.html">Toasts</a></li>
                                <li class="nav-item"><a class="nav-link" href="components/tooltips.html">Tooltips</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text">Utilities</span>
                                </div>
                            </a>
                            <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                                <li class="nav-item"><a class="nav-link" href="utilities/borders.html">Borders</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/clearfix.html">Clearfix</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/close-icon.html">Close icon</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/colors.html">Colors</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/display.html">Display</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/embed.html">Embed</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/figures.html">Figures</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/flex.html">Flex</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/grid.html">Grid</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/sizing.html">Sizing</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/spacing.html">Spacing</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/stretched-link.html">Stretched link</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/typography.html">Typography</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/vertical-align.html">Vertical align</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="utilities/visibility.html">Visibility</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text">Plugins</span>
                                </div>
                            </a>
                            <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                                <li class="nav-item"><a class="nav-link" href="plugins/bootstrap-wizard.html">Bootstrap wizard</a>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-charts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-charts">Charts</a>
                                    <ul class="nav collapse" id="plugins-charts" data-parent="#plugins">
                                        <li class="nav-item"><a class="nav-link" href="plugins/charts/chart-js.html">Chart js</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="plugins/charts/echarts.html">Echarts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/countdown.html">Countdown</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/data-table.html">Data table</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/date-picker.html">Date picker</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/draggable.html">Draggable</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/dropzone.html">Dropzone</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/emojionearea.html">Emojionearea</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/fancybox.html">Fancybox</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/fontawesome.html">Fontawesome</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/fullcalendar.html">Fullcalendar</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/inline-player.html">Inline player</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/jquery-validation.html">Jquery validation</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/lightbox.html">Lightbox</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/lottie.html">Lottie</a>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                                    <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                                        <li class="nav-item"><a class="nav-link" href="plugins/map/google-map.html">Google map</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="plugins/map/leaflet-map.html">Leaflet map</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/toastr.html">Toastr</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/owl-carousel.html">Owl carousel</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/perfect-scrollbar.html">Perfect scrollbar</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/progressbar.html">Progressbar</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/raty.html">Raty</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/select2.html">Select2</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/tinymce.html">Tinymce</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="plugins/typed-text.html">Typed text</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-vertical-divider">
                        <hr class="navbar-vertical-hr my-2" />
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text">Documentation</span>
                                </div>
                            </a>
                            <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                                <li class="nav-item"><a class="nav-link" href="documentation/getting-started.html">Getting started</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/file-structure.html">File structure</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization.html">Customization</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/dark-mode.html">Dark mode</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/fluid-layout.html">Fluid layout</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/gulp.html">Gulp</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/RTL.html">RTL</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/plugins.html">Plugins</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="changelog.html">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.8.2</span>
                                </div>
                            </a></li>
                    </ul>
                    <div class="settings px-3 px-xl-0">
                        <div class="navbar-vertical-divider px-0">
                            <hr class="navbar-vertical-hr my-3" />
                        </div><a class="btn btn-sm btn-block btn-purchase mb-3">
                            Purchase</a>
                    </div>
                </div
            </div>
        </nav>
        <div class="content">
            <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand">

                <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span>
                    </div>
                </a>
                <ul class="navbar-nav align-items-center d-none d-lg-block">
                    <li class="nav-item">
                        <div class="search-box">
                            <form class="position-relative" data-toggle="search" data-display="static">

                                <input class="form-control search-input" type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>

                            </form>

                            <button class="close" type="button" data-dismiss="search"><span class="fas fa-times"></span></button>
                            <div class="dropdown-menu">
                                <div class="scrollbar perfect-scrollbar py-3" style="height: 24rem;">
                                    <h6 class="dropdown-header px-card pt-0 pb-2">Recently Browsed</h6>
                                    <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="pages/events.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle mr-2 text-300 fs--2"></span>

                                            <div class="font-weight-normal">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="e-commerce/customers.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle mr-2 text-300 fs--2"></span>

                                            <div class="font-weight-normal">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                                        </div>
                                    </a>

                                    <hr class="border-200" />
                                    <h6 class="dropdown-header px-card pt-0 pb-2">Suggested Filter</h6>
                                    <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/customers.html">
                                        <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-warning">customers:</span>
                                            <div class="flex-1 fs--1">All customers list</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-card py-1 fs-0" href="pages/events.html">
                                        <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-success">events:</span>
                                            <div class="flex-1 fs--1">Latest events in current month</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/product-grid.html">
                                        <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-info">products:</span>
                                            <div class="flex-1 fs--1">Most popular products</div>
                                        </div>
                                    </a>

                                    <hr class="border-200" />
                                    <h6 class="dropdown-header px-card pt-0 pb-2">Files</h6>
                                    <a class="dropdown-item px-card py-2" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="file-thumbnail mr-2"><img class="border h-100 w-100 fit-cover rounded-lg" src="assets/img/products/3-thumb.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0">iPhone</h6>
                                                <p class="fs--2 mb-0"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">27 Sep at 10:30 AM</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-card py-2" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="file-thumbnail mr-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0">Falcon v1.8.2</h6>
                                                <p class="fs--2 mb-0"><span class="font-weight-semi-bold">John</span><span class="font-weight-medium text-600 ml-2">30 Sep at 12:30 PM</span></p>
                                            </div>
                                        </div>
                                    </a>

                                    <hr class="border-200" />
                                    <h6 class="dropdown-header px-card pt-0 pb-2">Members</h6>
                                    <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l status-online mr-2">
                                                <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0">Anna Karinina</h6>
                                                <p class="fs--2 mb-0">Technext Limited</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l mr-2">
                                                <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0">Antony Hopkins</h6>
                                                <p class="fs--2 mb-0">Brain Trust</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l mr-2">
                                                <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0">Emma Watson</h6>
                                                <p class="fs--2 mb-0">Google</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
{{--                    <li class="nav-item d-none d-md-block">--}}
{{--                        <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-beta6/" target="_blank"><img src="{{asset('img/logos/bootstrap-5.png')}}" alt="" height="35" /></a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                      </svg></span></span></a>

                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>--}}

{{--                    </li>--}}
                    <li class="nav-item dropdown dropdown-on-hover">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none" style="max-width: 20rem">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush font-weight-normal fs--1">
                                    <div class="list-group-title border-bottom">NEW</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush bg-200" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />

                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>

                                            </div>
                                        </a>

                                    </div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush bg-200" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>

                                            </div>
                                        </a>

                                    </div>
                                    <div class="list-group-title">EARLIER</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />

                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>

                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="{{asset('img/team/4-thumb.png')}}" alt="User Image" />

                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                            <div class="bg-white rounded-soft py-2">
                                <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/settings.html">Settings</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="card-deck">
                <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card" style="background-image:url({{asset('img/illustrations/corner-1.png')}});">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <h6>Links<span class="badge badge-soft-warning rounded-capsule ml-2">-0.23%</span></h6>
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning">0</div>
                        <a class="font-weight-semi-bold fs--1 text-nowrap" href="#">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                    </div>
                </div>
                <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card" style="background-image:url({{asset('img/illustrations/corner-2.png')}});"></div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <h6>Click<span class="badge badge-soft-info rounded-capsule ml-2">0.0%</span></h6>
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">6k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="">All Clicks<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                    </div>
                </div>
                <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card" style="background-image:url({{asset('img/illustrations/corner-3.png')}});">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <h6>Recent Clicks<span class="badge badge-soft-success rounded-capsule ml-2">9.54%</span></h6>
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup='{"count":43594,"format":"comma","prefix":"$"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Statistics<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../assets/img/illustrations/corner-4.png);">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="row no-gutters">
                <div class="col-lg-8 pr-lg-2">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Short your URL</h5>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{route('short.url')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <label for="event-name">Put Link</label>
                                            <input
                                                class="form-control"
                                                type="text"
                                                name="original_url"
                                                id="original_url"
                                                placeholder="Paste A Long Link">
                                        </div>
                                    </div>
                                    <div class="col-3 mt-4 pull-left">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Shorten
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-lg-2">
                    <div class="sticky-top sticky-sidebar">
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header">
                                <h5 class="mb-0">Other Info</h5>
                            </div>
                            <div class="card-body bg-light">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="mb-0" for="organizer">Organizer</label>
                                        <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                                    </div>
                                    <select class="form-control selectpicker" id="organizer" multiple size="1" name="organizer" data-options='{"placeholder":"Select Organizer..."}'>
                                        <option>Massachusetts Institute of Technology</option>
                                        <option>University of Chicago</option>
                                        <option>GSAS Open Labs At Harvard</option>
                                        <option>California Institute of Technology</option>
                                    </select>
                                </div>
                                <hr class="border-dashed border-bottom-0">
                                <h6>Listing Privacy</h6>
                                <div class="form-group custom-control custom-radio">
                                    <input class="custom-control-input" id="customRadio4" type="radio" name="listingPrivacy" checked>
                                    <label class="custom-control-label" for="customRadio4"> <strong>Public page:</strong></label><small class="form-text mt-0">Discoverable by anyone on Falcon, our distribution partners, and search engines.</small>
                                </div>
                                <div class="form-group custom-control custom-radio">
                                    <input class="custom-control-input" id="customRadio5" type="radio" name="listingPrivacy">
                                    <label class="custom-control-label" for="customRadio5"> <strong>Private page:</strong></label><small class="form-text mt-0">Accessible only by people you specify. </small>
                                </div>
                                <hr class="border-dashed border-bottom-0">
                                <h6>Remaining Tickets</h6>
                                <div class="form-group custom-control custom-checkbox mb-0">
                                    <input class="custom-control-input" id="customRadio6" type="checkbox">
                                    <label class="custom-control-label" for="customRadio6">Show the number of remaining tickets.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


{{--            <footer>--}}
{{--                <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">--}}
{{--                    <div class="col-12 col-sm-auto text-center">--}}
{{--                        <p class="mb-0 text-600">Thank you for creating with Custom URL <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="">Themewagon</a></p>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-sm-auto text-center">--}}
{{--                        <p class="mb-0 text-600">v-Danha-2.0</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </footer>--}}
        </div>
        <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true" data-options='{"autoShow":true,"autoShowDelay":3000,"showOnce":true}'>
            <div class="modal-dialog modal-dialog-vertical" role="document">
                <div class="modal-content border-0 vh-100 scrollbar perfect-scrollbar">
                    <div class="modal-header modal-header-settings">
                        <div class="z-index-1 py-1 flex-grow-1">
                            <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette mr-2 fs-0"></span>Settings</h5>
                            <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
                        </div>
                        <button class="close z-index-1" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body px-card">
                        <h5 class="fs-0">Color Scheme</h5>
                        <p class="fs--1">Choose the perfect color mode for your app. </p>
                        <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                            <div class="btn btn-theme-default custom-control custom-radio custom-radio-success active">
                                <label class="cursor-pointer hover-overlay" for="theme-mode-default"><img class="w-100" src="assets/img/generic/falcon-mode-default.jpg" alt="" /></label>
                                <label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-default">
                                    <input class="custom-control-input" id="theme-mode-default" type="radio" name="colorScheme" checked="checked" value="theme-mode-default" data-page-url="index.html" /><span class="custom-control-label">Light</span>
                                </label>
                            </div>
                            <div class="btn btn-theme-dark custom-control custom-radio custom-radio-success">
                                <label class="cursor-pointer hover-overlay" for="theme-mode-dark"><img class="w-100" src="assets/img/generic/falcon-mode-dark.jpg" alt="" /></label>
                                <label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-dark">
                                    <input class="custom-control-input" id="theme-mode-dark" type="radio" name="colorScheme" value="theme-mode-dark" data-page-url="documentation/dark-mode.html" /><span class="custom-control-label">Dark</span>
                                </label>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                            <div class="media flex-grow-1"><img class="mr-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                                <div class="media-body">
                                    <h5 class="fs-0">RTL Mode</h5>
                                    <p class="fs--1 mb-0">Switch your language direction </p>
                                </div>
                            </div>
                            <div class="custom-control custom-switch">
                                <input class="custom-control-input" id="mode-rtl" type="checkbox" data-home-url="index.html" data-url="documentation/RTL.html" />
                                <label class="custom-control-label" for="mode-rtl"> </label>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                            <div class="media flex-grow-1"><img class="mr-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
                                <div class="media-body">
                                    <h5 class="fs-0">Fluid Layout</h5>
                                    <p class="fs--1 mb-0">Toggle container layout system </p>
                                </div>
                            </div>
                            <div class="custom-control custom-switch">
                                <input class="custom-control-input" id="mode-fluid" type="checkbox" data-home-url="index.html" data-url="documentation/fluid-layout.html" />
                                <label class="custom-control-label" for="mode-fluid"> </label>
                            </div>
                        </div>
                        <hr />
                        <div class="media"><img class="mr-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
                            <div class="media-body">
                                <h5 class="fs-0 d-flex align-items-center">Navigation Position <span class="badge badge-pill badge-soft-success fs--2 ml-2">Updated</span></h5>
                                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" checked="checked" data-page-url="components/navbar/vertical.html" />
                                    <label class="custom-control-label" for="option-navbar-vertical">Vertical</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="components/navbar/top.html" />
                                    <label class="custom-control-label" for="option-navbar-top">Top</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mr-0">
                                    <input class="custom-control-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="components/navbar/combo.html" />
                                    <label class="custom-control-label" for="option-navbar-combo">Combo</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
                        <p class="fs--1">Switch between styles for your vertical navbar </p>
                        <div class="btn-group-toggle btn-block btn-group-navbar-style" data-toggle="buttons">
                            <div class="btn-group btn-block">
                                <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2 active">
                                    <label class="cursor-pointer w-100" for="navbar-style-transparent"><img class="w-100" src="assets/img/generic/default.png" alt="" /></label>
                                    <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-transparent">
                                        <input class="custom-control-input" id="navbar-style-transparent" type="radio" name="navbarVertical" checked="checked" data-page-url="index.html" value="transparent" /><span class="custom-control-label"> Transparent</span>
                                    </label>
                                </div>
                                <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2">
                                    <label class="cursor-pointer w-100" for="navbar-style-inverted"><img class="w-100" src="assets/img/generic/inverted.png" alt="" /></label>
                                    <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-inverted">
                                        <input class="custom-control-input" id="navbar-style-inverted" type="radio" name="navbarVertical" data-page-url="layouts/navbar-vertical-inverted.html" value="inverted" /><span class="custom-control-label"> Inverted</span>
                                    </label>
                                </div>
                            </div>
                            <div class="btn-group btn-block mt-3">
                                <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2">
                                    <label class="cursor-pointer w-100" for="navbar-style-card"><img class="w-100" src="assets/img/generic/card.png" alt="" /></label>
                                    <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-card">
                                        <input class="custom-control-input" id="navbar-style-card" type="radio" name="navbarVertical" data-page-url="layouts/navbar-vertical-card.html" value="card" /><span class="custom-control-label"> Card</span>
                                    </label>
                                </div>
                                <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2">
                                    <label class="cursor-pointer w-100" for="navbar-style-vibrant"><img class="w-100" src="assets/img/generic/vibrant.png" alt="" /></label>
                                    <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-vibrant">
                                        <input class="custom-control-input" id="navbar-style-vibrant" type="radio" name="navbarVertical" data-page-url="layouts/navbar-vertical-vibrant.html" value="vibrant" /><span class="custom-control-label"> Vibrant</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="text-center mt-5"><img class="mb-4" src="assets/img/illustrations/settings.png" alt="" width="120" />
                            <h5>Like What You See?</h5>
                            <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 text-white position-relative modal-shape-header">
                        <div class="position-relative z-index-1">
                            <div>
                                <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                                <p class="fs--1 mb-0">Please create your free Falcon account</p>
                            </div>
                        </div>
                        <button class="close text-white position-absolute t-0 r-0 mt-1 mr-1" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <form>
                            <div class="form-group">
                                <label for="modal-auth-name">Name</label>
                                <input class="form-control" type="text" id="modal-auth-name" />
                            </div>
                            <div class="form-group">
                                <label for="modal-auth-email">Email address</label>
                                <input class="form-control" type="email" id="modal-auth-email" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="modal-auth-password">Password</label>
                                    <input class="form-control" type="password" id="modal-auth-password" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="modal-auth-confirm-password">Confirm Password</label>
                                    <input class="form-control" type="password" id="modal-auth-confirm-password" />
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="modal-auth-register-checkbox" />
                                <label class="custom-control-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button>
                            </div>
                        </form>
                        <div class="w-100 position-relative mt-5">
                            <hr class="text-300" />
                            <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="row no-gutters">
                                <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                                <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/@fortawesome/all.min.js')}}"></script>
<script src="{{asset('lib/stickyfilljs/stickyfill.min.js')}}"></script>
<script src="{{asset('lib/sticky-kit/sticky-kit.min.js')}}"></script>
<script src="{{asset('lib/is_js/is.min.js')}}"></script>
<script src="{{asset('lib/lodash/lodash.min.js')}}"></script>
<script src="{{asset('lib/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<script src="{{asset('lib/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('lib/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lib/datatables-bs4/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('lib/datatables.net-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('lib/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('lib/leaflet/leaflet.js')}}"></script>
<script src="{{asset('lib/leaflet.markercluster/leaflet.markercluster.js')}}"></script>
<script src="{{asset('lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>

</body>

</html>




























{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
