<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="2.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets1/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="assets1/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="assets1/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets1/css/tailwind.css">

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->


        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="index.html"><img src="assets/images/logo-light.png" height="24" alt=""></a>
                    </div>
        
                    <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                        <li class="">
                            <a href="index.html"><i class="uil uil-chart-line me-2"></i>Dashboard</a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-browser me-2"></i>Layouts</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="index-dark.html">Dark Dashboard</a></li>
                                    <li><a href="index-rtl.html">RTL Dashboard</a></li>
                                    <li><a href="index-dark-rtl.html">Dark RTL Dashboard</a></li>
                                    <li><a href="index-sidebar-light.html">Light Sidebar</a></li>
                                    <li><a href="index-sidebar-colored.html">Colored Sidebar</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-apps me-2"></i>Apps</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="email.html">Email</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-user me-2"></i>User Profile</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="profile-billing.html">Billing Info</a></li>
                                    <li><a href="profile-payment.html">Payment</a></li>
                                    <li><a href="profile-social.html">Social Profile</a></li>
                                    <li><a href="profile-notification.html">Notifications</a></li>
                                    <li><a href="profile-setting.html">Profile Settings</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-blogger me-2"></i>Blog</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2"></i>E-Commerce</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-item-detail.html">Shop Detail</a></li>
                                    <li><a href="shop-cart.html">Shopcart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-camera me-2"></i>Gallery</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="gallery-one.html">Gallary One</a></li>
                                    <li><a href="gallery-two.html">Gallery Two</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-file me-2"></i>Pages</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="starter.html">Starter</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Term & Condition</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="">
                            <a href="ui-components.html"><i class="uil uil-chart-line me-2"></i>UI Components</a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-envelope me-2"></i>Email Template</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="email-confirmation.html">Confirmation</a></li>
                                    <li><a href="email-password-reset.html">Reset Password</a></li>
                                    <li><a href="email-alert.html">Alert</a></li>
                                    <li><a href="email-invoices.html">Invoice</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-invoice me-2"></i>Invoice</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="invoice-list.html">Invoice List</a></li>
                                    <li><a href="invoice.html">Invoice Preview</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-sign-in-alt me-2"></i>Authentication</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-signup.html">Signup</a></li>
                                    <li><a href="auth-signup-success.html">Signup Success</a></li>
                                    <li><a href="auth-re-password.html">Reset Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-layers me-2"></i>Miscellaneous</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="comingsoon.html">Comingsoon</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="error.html">Error</a></li>
                                    <li><a href="thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-slate-800 text-center">
                            <span class="relative z-10">
                                <span class="text-xl font-bold h5 text-white">Upgrade to Pro</span>

                                <span class="text-slate-400 mt-3 mb-5 block">Get one month free and subscribe to pro</span>

                                <a href="https://1.envato.market/techwind" target="_blank" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
                            </span>
                
                            <img src="assets/images/shree-276.png" class="absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center h-40 w-40 z-0 opacity-5" alt="">
                        </li>
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-gray-50 dark:bg-slate-800">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar flex justify-between">
                        <div class="flex items-center space-x-1">
                            <!-- Logo -->
                            <a href="#" class="xl:hidden block me-2">
                                <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                                <span class="md:block hidden">
                                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                            </a>
                            <!-- Logo -->

                            <!-- show or close sidebar -->
                            <a id="close-sidebar" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" href="javascript:void(0)">
                                <i data-feather="menu" class="h-4 w-4"></i>
                            </a>
                            <!-- show or close sidebar -->
            
                            <!-- Searchbar -->
                            <div class="ps-1.5">
                                <div class="form-icon relative sm:block hidden">
                                    <i class="uil uil-search absolute top-1/2 -translate-y-1/2 start-3"></i>
                                    <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-3xl outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                                </div>
                            </div>
                            <!-- Searchbar -->
                        </div>

                        <ul class="list-none mb-0 space-x-1">
                            <!-- Country Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" type="button">
                                    <img src="assets/images/flags/usa.png" alt="">
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute start-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="list-none py-2 text-start">
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-semibold py-1.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><img src="assets/images/flags/germany.png" class="h-6 w-6 rounded-full me-2 shadow dark:shadow-gray-700" alt=""> German</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-semibold py-1.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><img src="assets/images/flags/italy.png" class="h-6 w-6 rounded-full me-2 shadow dark:shadow-gray-700" alt=""> Italian</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-semibold py-1.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><img src="assets/images/flags/russia.png" class="h-6 w-6 rounded-full me-2 shadow dark:shadow-gray-700" alt=""> Russian</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-semibold py-1.5 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><img src="assets/images/flags/spain.png" class="h-6 w-6 rounded-full me-2 shadow dark:shadow-gray-700" alt=""> Spanish</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Country Dropdown -->

                            <!-- Shop cart Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" type="button">
                                    <i data-feather="shopping-cart" class="h-4 w-4"></i>
                                    <span class="absolute top-0 end-0 flex items-center justify-center bg-emerald-600 text-white text-[10px] font-bold rounded-full w-2 h-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-emerald-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                                        <li>
                                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                                <span class="flex items-center">
                                                    <img src="assets/images/shop/items/s1.jpg" class="rounded shadow dark:shadow-gray-700 w-9" alt="">
                                                    <span class="ms-3">
                                                        <span class="block font-semibold">T-shirt (M)</span>
                                                        <span class="block text-sm text-slate-400">$320 X 2</span>
                                                    </span>
                                                </span>

                                                <span class="font-semibold">$640</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                                <span class="flex items-center">
                                                    <img src="assets/images/shop/items/s2.jpg" class="rounded shadow dark:shadow-gray-700 w-9" alt="">
                                                    <span class="ms-3">
                                                        <span class="block font-semibold">Bag</span>
                                                        <span class="block text-sm text-slate-400">$50 X 5</span>
                                                    </span>
                                                </span>

                                                <span class="font-semibold">$250</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                                <span class="flex items-center">
                                                    <img src="assets/images/shop/items/s3.jpg" class="rounded shadow dark:shadow-gray-700 w-9" alt="">
                                                    <span class="ms-3">
                                                        <span class="block font-semibold">Watch (Men)</span>
                                                        <span class="block text-sm text-slate-400">$800 X 1</span>
                                                    </span>
                                                </span>

                                                <span class="font-semibold">$800</span>
                                            </a>
                                        </li>

                                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                                        <li class="flex items-center justify-between py-1.5 px-4">
                                            <h6 class="font-semibold mb-0">Total($):</h6>
                                            <h6 class="font-semibold mb-0">$1690</h6>
                                        </li>

                                        <li class="py-1.5 px-4">
                                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">View Cart</a>
                                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">Checkout</a>
                                            <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                                        </li>
                
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- Shop cart Dropdown -->

                            <!-- Notification Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" type="button">
                                    <i data-feather="bell" class="h-4 w-4"></i>
                                    <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-full w-2 h-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-full w-5 max-h-5 ms-1">3</span>
                                    </span>
                                    <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-md shadow shadow-indigo-600/10 dark:shadow-gray-700 bg-indigo-600/10 dark:bg-slate-800 text-indigo-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="shopping-cart" class="h-4 w-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block">Order Complete</span>
                                                        <small class="text-slate-400">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <img src="assets/images/client/04.jpg" class="h-10 w-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block"><span class="font-bold">Message</span> from Luis</span>
                                                        <small class="text-slate-400">1 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-md shadow shadow-indigo-600/10 dark:shadow-gray-700 bg-indigo-600/10 dark:bg-slate-800 text-indigo-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="dollar-sign" class="h-4 w-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block"><span class="font-bold">One Refund Request</span></span>
                                                        <small class="text-slate-400">2 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-md shadow shadow-indigo-600/10 dark:shadow-gray-700 bg-indigo-600/10 dark:bg-slate-800 text-indigo-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="truck" class="h-4 w-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block">Deliverd your Order</span>
                                                        <small class="text-slate-400">Yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <img src="assets/images/client/05.jpg" class="h-10 w-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block"><span class="font-bold">Cally</span> started following you</span>
                                                        <small class="text-slate-400">2 days ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- Notification Dropdown -->
            
                            <!-- User/Profile Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                    <span class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full"><img src="assets/images/client/05.jpg" class="rounded-full" alt=""></span>
                                    <span class="font-semibold text-[16px] ms-1 sm:inline-block hidden">Cristina Murfy</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="profile.html" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-user me-2"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="chat.html" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-comment me-2"></i>Chat</a>
                                        </li>
                                        <li>
                                            <a href="email.html" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-envelope me-2"></i>Email</a>
                                        </li>
                                        <li>
                                            <a href="profile-setting.html" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-setting me-2"></i>Settings</a>
                                        </li>
                                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                        <li>
                                            <a href="lock-screen.html" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-lock me-2"></i>Lockscreen</a>
                                        </li>
                                        <li>
                                            <a href="login.html" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-sign-out-alt me-2"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- User/Profile Dropdown -->
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                <div class="container-fluid relative px-3">
                    <div class="layout-specing">
                        <!-- Start Content -->
                        <div class="md:flex justify-between items-center">
                            <h5 class="text-lg font-semibold">My Very Minimal Interior Design Ideas</h5>

                            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="index.html">Techwind</a></li>
                                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Blog Detail</li>
                            </ul>
                        </div>

                        <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                            <div class="lg:col-span-8 md:col-span-6">
                                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
        
                                    <img src="assets/images/blog/bg.jpg" class="rounded-md" alt="">
        
                                    <div class="mt-6">
                                        <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script.</p>
                                        <p class="text-slate-400 italic border-x-4 border-indigo-600 rounded-ss-xl rounded-ee-xl mt-3 p-3">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                        <p class="text-slate-400 mt-3">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                                    </div>
                                </div>
        
                                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                                    <h5 class="text-lg font-semibold">Comments:</h5>
        
                                    <div class="mt-6">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/01.jpg" class="h-11 w-11 rounded-full shadow" alt="">
            
                                                <div class="ms-3 flex-1">
                                                    <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin Carlo</a>
                                                    <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                                </div>
                                            </div>
        
                                            <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 mt-6">
                                            <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
        
                                    <div class="mt-6">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/02.jpg" class="h-11 w-11 rounded-full shadow" alt="">
            
                                                <div class="ms-3 flex-1">
                                                    <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin Carlo</a>
                                                    <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                                </div>
                                            </div>
        
                                            <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 mt-6">
                                            <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
        
                                    <div class="mt-6">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/03.jpg" class="h-11 w-11 rounded-full shadow" alt="">
            
                                                <div class="ms-3 flex-1">
                                                    <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin Carlo</a>
                                                    <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                                </div>
                                            </div>
        
                                            <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 mt-6">
                                            <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
        
                                    <div class="mt-6">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/04.jpg" class="h-11 w-11 rounded-full shadow" alt="">
            
                                                <div class="ms-3 flex-1">
                                                    <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin Carlo</a>
                                                    <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                                </div>
                                            </div>
        
                                            <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 mt-6">
                                            <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                                    <h5 class="text-lg font-semibold">Leave A Comment:</h5>
        
                                    <form class="mt-6">
                                        <div class="grid lg:grid-cols-12 lg:gap-6">
                                            <div class="lg:col-span-6 mb-5">
                                                <div class="text-start">
                                                    <label for="name" class="font-semibold">Your Name:</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="lg:col-span-6 mb-5">
                                                <div class="text-start">
                                                    <label for="email" class="font-semibold">Your Email:</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="grid grid-cols-1">
                                            <div class="mb-5">
                                                <div class="text-start">
                                                    <label for="comments" class="font-semibold">Your Comment:</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send Message</button>
                                    </form>
                                </div>
                            </div>
        
                            <div class="lg:col-span-4 md:col-span-6">
                                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md p-2 text-center">Author</h5>
                                    <div class="text-center mt-6">
                                        <img src="assets/images/client/05.jpg" class="h-24 w-24 mx-auto rounded-full shadow mb-4" alt="">
        
                                        <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">Cristina Romsey</a>
                                        <p class="text-slate-400">Content Writer</p>
                                    </div>
        
                                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md p-2 text-center mt-6">Recent post</h5>
                                    <div class="flex items-center mt-6">
                                        <img src="assets/images/blog/06.jpg" class="h-16 rounded-md shadow dark:shadow-gray-700" alt="">
        
                                        <div class="ms-3">
                                            <a href="" class="font-semibold hover:text-indigo-600">Consultant Business</a>
                                            <p class="text-sm text-slate-400">1st May 2022</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mt-4">
                                        <img src="assets/images/blog/07.jpg" class="h-16 rounded-md shadow dark:shadow-gray-700" alt="">
        
                                        <div class="ms-3">
                                            <a href="" class="font-semibold hover:text-indigo-600">Grow Your Business</a>
                                            <p class="text-sm text-slate-400">1st May 2022</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mt-4">
                                        <img src="assets/images/blog/08.jpg" class="h-16 rounded-md shadow dark:shadow-gray-700" alt="">
        
                                        <div class="ms-3">
                                            <a href="" class="font-semibold hover:text-indigo-600">Look On The Glorious Balance</a>
                                            <p class="text-sm text-slate-400">1st May 2022</p>
                                        </div>
                                    </div>
        
                                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md p-2 text-center mt-6">Social sites</h5>
                                    <ul class="list-none text-center mt-6">
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                                    </ul><!--end icon-->
        
                                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md p-2 text-center mt-6">Tagscloud</h5>
                                    <ul class="list-none text-center mt-6 space-x-2">
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Business</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Finance</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Marketing</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Fashion</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Bride</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Lifestyle</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Travel</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Beauty</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Video</a></li>
                                        <li class="inline-block my-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-700 duration-500">Audio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end grid-->
                        <!-- End Content -->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
                    <div class="container-fluid">
                        <div class="grid grid-cols-1">
                            <div class="sm:text-start text-center mx-md-2">
                                <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Techwind. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Switcher -->
        <div class="fixed top-[30%] -end-3 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -end-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="assets1/libs/feather-icons/feather.min.js"></script>
        <script src="assets1/libs/simplebar/simplebar.min.js"></script>
        <script src="assets1/js/plugins.init.js"></script>
        <script src="assets1/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>