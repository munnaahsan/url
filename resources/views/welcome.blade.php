<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Send SMS via Danha Plugin Demo</title>
    <link rel="stylesheet" href="https://demo.gempixel.com/smsplugin/static/frontend/css/style.min.css" id="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<header class="header-transparent" id="header-main">
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
        <div class="container">
            <a class="navbar-brand" href="https://demo.gempixel.com/smsplugin" title="Send SMS via Twilio Plugin Demo">
                <h1 class="h5 mt-2 text-white">Send SMS via Twilio Plugin Demo</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                <div class="position-relative">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item nav-item-spaced d-lg-block">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Solutions</a>
                        <div class="dropdown-menu dropdown-menu-xl p-0">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-6 order-lg-2">
                                    <div class="dropdown-body dropdown-body-right bg-dropdown-secondary h-100">
                                        <h6 class="dropdown-header">
                                            Resources </h6>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                <div class="media d-flex">
<span class="h6">
<i data-feather="code"></i>
</span>
                                                    <div class="media-body ml-2">
                                                        <a href="https://demo.gempixel.com/smsplugin/developers" class="d-block h6 mb-0">Developer API</a>
                                                        <small class="text-sm text-muted mb-0">Guide on how to use our API</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                <div class="media d-flex">
<span class="h6">
<i data-feather="help-circle"></i>
</span>
                                                    <div class="media-body ml-2">
                                                        <a href="https://demo.gempixel.com/smsplugin/faq" class="d-block h6 mb-0">Help</a>
                                                        <small class="text-sm text-muted mb-0">Check out our frequently asked questions</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 order-lg-1 mt-4 mt-lg-0">
                                    <div class="dropdown-body">
                                        <h6 class="dropdown-header">
                                            Solutions </h6>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item border-0">
                                                <div class="media d-flex">
                                                    <div class="media-body">
                                                        <a href="https://demo.gempixel.com/smsplugin/qr-codes" class="d-block h6 mb-0">QR Codes</a>
                                                        <small class="text-sm text-muted mb-0">Customizable & trackable QR codes</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item border-0">
                                                <div class="media d-flex">
                                                    <div class="media-body">
                                                        <a href="https://demo.gempixel.com/smsplugin/bio-profiles" class="d-block h6 mb-0">Bio Profiles</a>
                                                        <small class="text-sm text-muted mb-0">Convert your social media followers</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-item-spaced d-lg-block">
                        <a class="nav-link" href="https://demo.gempixel.com/smsplugin/blog">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        </li>
                        @endauth
                @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="slice pt-md-8 pb-5 bg-section-dark" style="background: linear-gradient(220.55deg, #090953 0%, #ff003a 100%) !important;">
    <div data-offset-top="#navbar-main">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 pr-lg-5">
                    <h1 class="display-4 text-white font-weight-bolder mb-4">
                        Send SMS via Twilio Plugin Demo </h1>
                    <div class="lead text-white opacity-8">
                        Demo for the SMS plugin for Premium URL Shortener! You can send SMS directly from here and shorten links within the sms. </div>
                    <!-- <form class="mt-5" method="post" action="https://demo.gempixel.com/smsplugin/shorten" data-trigger="shorten-form"> -->
                    <form class="mt-5" method="post"  action="{{route('short_dashboard')}}" data-trigger="shorten-form">
                        @csrf
                        <div class="input-group input-group-lg mb-3">
                            <input
                                class="form-control"
                                type="text"
                                name="original_url"
                                id="original_url"
                                placeholder="Paste A Long Link">

                            <div class="input-group-append">
                                <button class="btn btn-warning d-none" type="button">Copy</button>
                                <button type="submit" class="btn btn-primary">Shorten</button>
{{--                                <button class="btn btn-success" type="submit">Shorten</button>--}}
                            </div>
                        </div>
{{--                        <a href="#advanced" data-toggle="collapse" class="btn btn-xs btn-primary mb-2">Advanced</a>--}}
                        @isset($destination_url)
                         <a href="{{$destination_url}}" class="text-primary" target="_blank"> Your Short URL : {{$destination_url}}</a>
                        @endisset
{{--                        <a href="#advanced" data-toggle="collapse" class="btn btn-xs btn-primary mb-2"></a>--}}





                        <div class="collapse row" id="advanced">
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="custom" class="control-label">Custom</label>
                                    <input type="text" class="form-control" name="custom" id="custom" placeholder="Type your custom alias here" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="pass" class="control-label">Password Protection</label>
                                    <input type="text" class="form-control border-start-0 ps-0" name="pass" id="pass" placeholder="Type your password here" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="output-result" class="border border-success p-3 rounded d-none">
                        <div class="row">
                            <div id="qr-result" class="col-md-4 p-2"></div>
                            <div id="text-result" class="col-md-8">
                                <p class="text-white">Your link has been successfully shortened. Want to more customization options?</p>
                                <a href="https://demo.gempixel.com/smsplugin/user/register" class="btn btn-sm btn-primary">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-7 mt-lg-0">
                    <div class="position-relative left-8 left-lg-0 d-none d-lg-block">
                        <figure>
                            <img src="https://demo.gempixel.com/smsplugin/static/images/landing.png" alt="Send SMS via Twilio Plugin Demo" class="img-fluid mw-lg-120 rounded-top zindex-100">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-container shape-line shape-position-bottom zindex-102">
        <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="fill-section-secondary">
<polygon points="2560 0 2560 100 0 100"></polygon>
</svg>
    </div>
</section>
<section class="slice slice-lg bg-section-secondary">
    <div class="container pt-6 pt-lg-8">
        <div class="mb-8 text-center">
            <h2>One short link, infinite possibilities.</h2>
            <div class="fluid-paragraph mt-3">
                <p class="lead lh-180">
                    A short link is a powerful marketing tool when you use it carefully. It is not just a link but a medium between your customer and their destination. A short link allows you to collect so much data about your customers and their behaviors. </p>
            </div>
        </div>
        <div class="row mx-lg-n5 mt-sm-4">
            <div class="col-md-4 px-lg-5">
                <div class="card bg-primary hover-translate-y-n10 shadow-none border-0">
                    <div class="card-body">
                        <div class="pb-4">
                            <div class="icon bg-white rounded-circle icon-shape shadow">
                                <i data-feather="target"></i>
                            </div>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5 class="text-white">Smart Targeting</h5>
                            <p class="text-white opacity-8 mb-0">
                                Target your customers to increase your reach and redirect them to a relevant page. Add a pixel to retarget them in your social media ad campaign to capture them. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-lg-5">
                <div class="card bg-dark hover-translate-y-n10 shadow-none border-0">
                    <div class="card-body">
                        <div class="pb-4">
                            <div class="icon bg-white rounded-circle icon-shape shadow">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5 class="text-white">In-Depth Analytics</h5>
                            <p class="text-white opacity-8 mb-0">
                                Share your links to your network and measure data to optimize your marketing campaign's performance. Reach an audience that fits your needs. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-lg-5">
                <div class="card bg-dark-dark hover-translate-y-n10 shadow-none border-0">
                    <div class="card-body">
                        <div class="pb-4">
                            <div class="icon bg-white rounded-circle icon-shape shadow">
                                <i data-feather="star"></i>
                            </div>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5 class="text-white">Digital Experience</h5>
                            <p class="text-white opacity-8 mb-0">
                                Use various powerful tools increase conversion and provide a non-intrusive experience to your customers without disengaging them. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice">
    <div class="container">
        <div class="section-process-step">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <h5 class="h3">Perfect for sales & marketing</h5>
                    <p class="lead my-4">
                        Understanding your users and customers will help you increase your conversion. Our system allows you to track everything. Whether it is the amount of clicks, the country or the referrer, the data is there for you to analyze it. </p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Redirection Tools</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Powerful Statistics</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Beautiful Profiles</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="card mb-0 mr-lg-5">
                        <div class="card-body p-2">
                            <img src="https://demo.gempixel.com/smsplugin/static/images/profiles.png" alt="Perfect for sales & marketing" class="img-responsive w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-process-step">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-5">
                    <h5 class="h3">Powerful tools that work</h5>
                    <p class="lead my-4">
                        Our product lets your target your users to better understand their behavior and provide them a better overall experience through smart re-targeting. We provide you many powerful tools to reach them better. </p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-success text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Link Management</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-success text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-user-secret"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Privacy Control</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-success text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Powerful Dashboard</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-0 ml-lg-5">
                        <div class="card-body p-2">
                            <img src="https://demo.gempixel.com/smsplugin/static/images/filters.png" alt="Powerful tools that work" class="img-responsive w-100 py-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-process-step">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="card mb-0 ml-lg-5">
                        <div class="card-body p-2">
                            <img src="https://demo.gempixel.com/smsplugin/static/images/qrcodes.png" alt="Powerful tools that work" class="img-responsive w-100 py-5">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h5 class="h3">QR Codes</h5>
                    <p class="lead my-4">
                        Easy to use, dynamic and customizable QR codes for your marketing campaigns. Analyze statistics and optimize your marketing strategy and increase engagement. </p>
                    <a href="https://demo.gempixel.com/smsplugin/user/register" class="btn btn-primary my-3">
                        Get Started </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg bg-dark">
    <div class="container position-relative zindex-100">
        <div class="row row-grid align-items-center justify-content-between">
            <div class="col-lg-5">
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row row-grid align-items-center">
                            <div class="col-lg-8">
                                <div class="media align-items-center">
                                    <img alt="New York, United States" src="https://demo.gempixel.com/smsplugin/static/images/flags/us.svg" class="avatar text-white rounded mr-3">
                                    <div class="media-body">
                                        <h6 class="mb-1">Someone visited your link</h6>
                                        <div class="h6 mb-0 text-sm">
                                            <span class="font-weight-bold">New York, United States</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                                <span class="badge badge-pill badge-soft-success">2 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row row-grid align-items-center">
                            <div class="col-lg-8">
                                <div class="media align-items-center">
                                    <img alt="Paris, France" src="https://demo.gempixel.com/smsplugin/static/images/flags/fr.svg" class="avatar text-white rounded mr-3">
                                    <div class="media-body">
                                        <h6 class="mb-1">Someone visited your link</h6>
                                        <div class="h6 mb-0 text-sm">
                                            <span class="font-weight-bold">Paris, France</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                                <span class="badge badge-pill badge-soft-success">5 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row row-grid align-items-center">
                            <div class="col-lg-8">
                                <div class="media align-items-center">
                                    <img alt="London, United Kingdom" src="https://demo.gempixel.com/smsplugin/static/images/flags/gb.svg" class="avatar text-white rounded mr-3">
                                    <div class="media-body">
                                        <h6 class="mb-1">Someone visited your link</h6>
                                        <div class="h6 mb-0 text-sm">
                                            <span class="font-weight-bold">London, United Kingdom</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                                <span class="badge badge-pill badge-soft-success">8 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="media d-flex mb-4">
                    <div class="media-body ml-4">
                        <h2 class="text-white mt-4">Optimize your marketing strategy</h2>
                        <p class="text-white opacity-8">
                            Understanding your users and customers will help you increase your conversion. Our system allows you to track everything. Whether it is the amount of clicks, the country or the referrer, the data is there for you to analyze it. </p>
                        <a href="https://demo.gempixel.com/smsplugin/user/register" class="btn btn-primary my-3">
                            Get Started </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5 justify-content-center text-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="text-white mt-4">More features than asked for</h2>
            </div>
        </div>
        <div class="row mx-lg-n4">
            <div class="col-lg-4 col-md-6 px-lg-4">
                <div class="card">
                    <div class="p-3 d-flex">
                        <div>
                            <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                <i data-feather="loader"></i>
                            </div>
                        </div>
                        <div>
                            <span class="h6">Custom Landing Page</span>
                            <p class="text-sm text-muted mb-0">
                                Create a custom landing page to promote your product or service on forefront and engage the user in your marketing campaign. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-lg-4">
                <div class="card">
                    <div class="p-3 d-flex">
                        <div>
                            <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                <i data-feather="layers"></i>
                            </div>
                        </div>
                        <div>
                            <span class="h6">CTA Overlays</span>
                            <p class="text-sm text-muted mb-0">
                                Use our overlay tool to display unobtrusive notifications, polls or even a contact on the target website. Great for campaigns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-lg-4">
                <div class="card">
                    <div class="p-3 d-flex">
                        <div>
                            <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                <i data-feather="compass"></i>
                            </div>
                        </div>
                        <div>
                            <span class="h6">Event Tracking</span>
                            <p class="text-sm text-muted mb-0">
                                Add your custom pixel from providers such as Facebook and track events right when they are happening. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-lg-4">
                <div class="card">
                    <div class="p-3 d-flex">
                        <div>
                            <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                <i data-feather="users"></i>
                            </div>
                        </div>
                        <div>
                            <span class="h6">Team Management</span>
                            <p class="text-sm text-muted mb-0">
                                Invite your team members and assign them specific privileges to manage links, bundles, pages and other features. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-lg-4">
                <div class="card">
                    <div class="p-3 d-flex">
                        <div>
                            <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                <i data-feather="globe"></i>
                            </div>
                        </div>
                        <div>
                            <span class="h6">Branded Domain Names</span>
                            <p class="text-sm text-muted mb-0">
                                Easily add your own domain name for short your links and take control of your brand name and your users' trust. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-lg-4">
                <div class="card">
                    <div class="p-3 d-flex">
                        <div>
                            <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                <i data-feather="terminal"></i>
                            </div>
                        </div>
                        <div>
                            <span class="h6">Robust API</span>
                            <p class="text-sm text-muted mb-0">
                                Use our powerful API to build custom applications or extend your own application with our powerful tools. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-container shape-line shape-position-bottom">
        <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve">
<polygon points="2560 0 2560 100 0 100"></polygon>
</svg>
    </div>
</section>
<section class="slice slice-lg">
    <div class="container">
        <div class="mb-5 text-center">
            <h3>Integrations</h3>
        </div>
        <div class="hover-blurable">
            <a href="https://demo.gempixel.com/smsplugin/user/register">
                <div class="blurable-item client-group row justify-content-center">
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Slack" src="https://demo.gempixel.com/smsplugin/static/images/wp.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">WordPress</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Slack" src="https://demo.gempixel.com/smsplugin/static/images/slack.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Slack</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Slack" src="https://demo.gempixel.com/smsplugin/static/images/shortcuts.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Shortcuts</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Google Tag Manager" src="https://demo.gempixel.com/smsplugin/static/images/gtm.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Google Tag Manager</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Facebook Pixels" src="https://demo.gempixel.com/smsplugin/static/images/facebook.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Facebook</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Zapier" src="https://demo.gempixel.com/smsplugin/static/images/zapier.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Zapier</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Bing" src="https://demo.gempixel.com/smsplugin/static/images/bing.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Bing</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Twitter" src="https://demo.gempixel.com/smsplugin/static/images/twitter.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Twitter</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Snapchat" src="https://demo.gempixel.com/smsplugin/static/images/snapchat.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Snapchat</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Reddit" src="https://demo.gempixel.com/smsplugin/static/images/reddit.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Reddit</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Google Analytics" src="https://demo.gempixel.com/smsplugin/static/images/ga.svg" style="width:50px">
                        <p class="font-weight-bold text-dark my-3">Google Analytics</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="LinkedIn" src="https://demo.gempixel.com/smsplugin/static/images/linkedin.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">LinkedIn</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Pinterest" src="https://demo.gempixel.com/smsplugin/static/images/pinterest.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Pinterest</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Quora" src="https://demo.gempixel.com/smsplugin/static/images/quora.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Quora</p>
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3 text-center mb-3">
                        <img alt="Quora" src="https://demo.gempixel.com/smsplugin/static/images/adroll.svg" style="height:50px">
                        <p class="font-weight-bold text-dark my-3">Adroll</p>
                    </div>
                </div>
                <span class="blurable-hidden btn btn-sm btn-primary">Get Started</span>
            </a>
        </div>
    </div>
</section>
<section class="py-lg-6 bg-section-secondary">
    <div class="container pt-4 position-relative zindex-100">
        <div class="row mt-4">
            <div class="col-lg-12 mx-auto">
                <div class="row">
                    <div class="col-lg-4 col-6 mb-5 mb-lg-0">
                        <div class="text-center">
                            <h3 class="h5 text-capitalize text-primary">Powering</h3>
                            <div class="h1 text-primary">
                                <span class="counter">1</span>
                                <span class="counter-extra">+</span>
                            </div>
                            <h3 class="h6 text-capitalize">Links</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 mb-5 mb-lg-0">
                        <div class="text-center">
                            <h3 class="h5 text-capitalize text-primary">Serving</h3>
                            <div class="h1 text-primary">
                                <span class="counter">0</span>
                                <span class="counter-extra">+</span>
                            </div>
                            <h3 class="h6 text-capitalize">Clicks</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 mb-5 mb-lg-0">
                        <div class="text-center">
                            <h3 class="h5 text-capitalize text-primary">Trusted by</h3>
                            <div class="h1 text-primary">
                                <span class="counter">1</span>
                                <span class="counter-extra">+</span>
                            </div>
                            <h3 class="h6 text-capitalize">Happy Customers</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="position-relative" id="footer-main">
    <div class="footer pt-lg-7 footer-dark bg-section-dark">
        <div class="container pt-4">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3 class="text-secondary mb-2">Marketing with confidence.</h3>
                            <p class="lead mb-0 text-white opacity-8">
                                Start your marketing campaign now and reach your customers efficiently. </p>
                        </div>
                        <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                            <a href="https://demo.gempixel.com/smsplugin/user/register" class="btn btn-primary my-2 ml-0 ml-sm-3">
                                Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider divider-fade divider-dark my-5">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <p class="mt-4 text-sm opacity-8 pr-lg-4">Demo for the SMS plugin for Premium URL Shortener! You can send SMS directly from here and shorten links within the sms.</p>
                    <ul class="nav mt-4">
                    </ul>
                </div>
                <div class="col-lg-4 col-6 col-sm-6 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Solutions</h6>
                    <ul class="list-unstyled">
                        <li><a href="https://demo.gempixel.com/smsplugin/qr-codes">QR Codes</a></li>
                        <li><a href="https://demo.gempixel.com/smsplugin/bio-profiles">Bio Profiles</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-6 col-sm-6 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link" href="https://demo.gempixel.com/smsplugin/faq">Help</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://demo.gempixel.com/smsplugin/developers">Developer API</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://demo.gempixel.com/smsplugin/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <hr class="divider divider-fade divider-dark my-4">
            <div class="row align-items-center justify-content-md-between pb-4">
                <div class="col-md-4">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2022 <a href="https://demo.gempixel.com/smsplugin" class="font-weight-bold">Send SMS via Twilio Plugin Demo</a>. All Rights Reserved </div>
                </div>
                <div class="col-md-8">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item"><a class="nav-link" href="https://demo.gempixel.com/smsplugin/report">Report</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--<script src="https://demo.gempixel.com/smsplugin/static/bundle.pack.js"></script>-->
<!--<script src="https://demo.gempixel.com/smsplugin/static/frontend/libs/clipboard/dist/clipboard.min.js"></script>-->
<script type="text/javascript">
    // var lang = {"error":"Please enter a valid URL.","cookie":"This website uses cookies to ensure you get the best experience on our website.","cookieok":"Got it!","cookiemore":"Learn more","cookielink":"https:\/\/demo.gempixel.com\/smsplugin\/page\/terms","couponinvalid":"The coupon enter is not valid","minurl":"You must select at least 1 url.","minsearch":"Keyword must be more than 3 characters!","nodata":"No data is available for this request.","datepicker":{"7d":"Last 7 Days","3d":"Last 30 Days","tm":"This Month","lm":"Last Month"}}        </script>
<script>
    feather.replace({
        'width': '1em',
        'height': '1em'
    })
</script>
<!-- <script src="https://demo.gempixel.com/smsplugin/static/frontend/js/app.min.js"></script> -->
<!-- <script src="https://demo.gempixel.com/smsplugin/static/server.min.js"></script> -->
</body>
</html>

    {{-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body> --}}
