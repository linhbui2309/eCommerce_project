            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="index.html"><img src="assets/images/logo-light.png" height="24" alt=""></a>
                    </div>
        
                    <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                        <li class="">
                            <a href="{{route('dashboard')}}"><i class="uil uil-chart-line me-2"></i>Dashboard</a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-browser me-2"></i>Layouts</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="">Dark Dashboard</a></li>
                                    <li><a href="">RTL Dashboard</a></li>
                                    <li><a href="">Dark RTL Dashboard</a></li>
                                    <li><a href="">Light Sidebar</a></li>
                                    <li><a href="">Colored Sidebar</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-apps me-2"></i>Apps</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{url('/chatify')}}">Chat</a></li>
                                    <li><a href="">Email</a></li>
                                    <li><a href="{{route('fullcalendar.index')}}">Calendar</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-user me-2"></i>User Profile</a>
                            <div class="sidebar-submenu">
                                
                                <ul>
                                    <li><a href="{{route('profile.index')}}">Profile</a></li>
                                    <li><a href="">Billing Info</a></li>
                                    <li><a href="">Payment</a></li>
                                    <li><a href="">Social Profile</a></li>
                                    <li><a href="">Notifications</a></li>
                                    <li><a href="{{url('profile/'.Auth::user()->id.'/edit')}}">Profile Settings</a></li>
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
                                    <li><a href="">Shop</a></li>
                                    <li><a href="">Shop Detail</a></li>
                                    <li><a href="">Shopcart</a></li>
                                    <li><a href="">Checkout</a></li>
                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                    <li><a href="">Product Settings</a></li>
                                @endif
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-camera me-2"></i>Gallery</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="">Gallary One</a></li>
                                    <li><a href="">Gallery Two</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-file me-2"></i>Pages</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="">Starter</a></li>
                                    <li><a href="">FAQs</a></li>
                                    <li><a href="">Pricing</a></li>
                                    <li><a href="">Team</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Term & Condition</a></li>
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
                                    <li><a href="">Confirmation</a></li>
                                    <li><a href="">Reset Password</a></li>
                                    <li><a href="">Alert</a></li>
                                    <li><a href="">Invoice</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-invoice me-2"></i>Invoice</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="">Invoice List</a></li>
                                    <li><a href="">Invoice Preview</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-sign-in-alt me-2"></i>Authentication</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="">Login</a></li>
                                    <li><a href="">Signup</a></li>
                                    <li><a href="">Signup Success</a></li>
                                    <li><a href="">Reset Password</a></li>
                                    <li><a href="">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-layers me-2"></i>Registration</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{route('registration.index')}}">Pending</a></li>
                                    <li><a href="">Maintenance</a></li>
                                    <li><a href="">Error</a></li>
                                    <li><a href="">Thank You</a></li>
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