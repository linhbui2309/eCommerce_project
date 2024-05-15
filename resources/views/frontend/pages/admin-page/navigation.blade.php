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
                                    <li><a href="{{route('profile.index')}}">Profile</a></li>
                                    <li><a href="profile-billing.html">Billing Info</a></li>
                                    <li><a href="profile-payment.html">Payment</a></li>
                                    <li><a href="profile-social.html">Social Profile</a></li>
                                    <li><a href="profile-notification.html">Notifications</a></li>
                                    <li><a href="">Profile Settings</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-blogger me-2"></i>Blog</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                                    <li><a href="{{url('blogs-details')}}">Blog Detail</a></li>
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