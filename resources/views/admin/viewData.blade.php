                        <!-- Start Content -->
                        <div class="flex justify-between items-center">
                            <div>
                                <h5 class="text-xl font-bold">Hello, {{ Auth::user()->name }}</h5>
                                <h6 class="text-slate-400 font-semibold">Welcome!</h6>
                            </div>

                            <div class="flex items-center">
                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>

                                <a href="" class="ms-1">
                                    <span class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md sm:inline-block hidden"><i class="uil uil-export"></i> Export</span>

                                    <span class="h-10 w-10 items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md border bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white sm:hidden inline-flex"><i class="uil uil-export"></i></span>
                                </a>
                            </div>
                        </div>

                        <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                                        <i data-feather="users" class="h-5 w-5"></i>
                                    </span>

                                    <span class="ms-3">
                                        <span class="text-slate-400 font-semibold block">Total Visitors</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-xl font-semibold"><span class="counter-value" data-target="45890">42205</span></span>
                                            <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 0.5%</span>
                                        </span>
                                    </span>
                                </div>

                                <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div><!--end-->

                            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                                        <i data-feather="dollar-sign" class="h-5 w-5"></i>
                                    </span>

                                    <span class="ms-3">
                                        <span class="text-slate-400 font-semibold block">Revenue</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-xl font-semibold">$<span class="counter-value" data-target="48575">35214</span></span>
                                            <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 3.84%</span>
                                        </span>
                                    </span>
                                </div>

                                <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div><!--end-->

                            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                                        <i data-feather="shopping-cart" class="h-5 w-5"></i>
                                    </span>

                                    <span class="ms-3">
                                        <span class="text-slate-400 font-semibold block">Orders</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-xl font-semibold"><span class="counter-value" data-target="4800">3402</span>+</span>
                                            <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 1.46%</span>
                                        </span>
                                    </span>
                                </div>

                                <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div><!--end-->

                            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                                        <i data-feather="shopping-bag" class="h-5 w-5"></i>
                                    </span>

                                    <span class="ms-3">
                                        <span class="text-slate-400 font-semibold block">Items</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-xl font-semibold"><span class="counter-value" data-target="145">23</span></span>
                                            <span class="text-slate-400 text-sm ms-1 font-semibold"><i class="uil uil-analysis"></i> 0.0%</span>
                                        </span>
                                    </span>
                                </div>

                                <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div><!--end-->

                            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                                        <i data-feather="dollar-sign" class="h-5 w-5"></i>
                                    </span>

                                    <span class="ms-3">
                                        <span class="text-slate-400 font-semibold block">Expenses</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-xl font-semibold">$<span class="counter-value" data-target="24351">22135</span></span>
                                            <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 1.6%</span>
                                        </span>
                                    </span>
                                </div>

                                <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div><!--end-->
                        </div>