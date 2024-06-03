   <!-- Start -->
   <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-5">
                        <div class="relative">
                            <img src="assets/images/business/about01.jpg" class="rounded-md" alt="">

                            <div class="absolute bottom-24 end-0">
                                <img src="assets/images/business/about02.jpg" class="rounded-md shadow-md w-48 h-48" alt="">
                                <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                    <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                        class="lightbox h-14 w-14 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="md:col-span-7">
                        <div class="lg:ms-4">
                            <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">We are the largest <br> Business expert </h4>
                            <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3">Buy Now <i class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Who We Are ?</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Business strategies and top <br> permormance ideas</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
                    @if (Auth::check())
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                            {{-- Only show the registered store for users with role_id 1 or 2 --}}
                            @if ($registration && $registration->status == 'approved')
                            <div class="flex justify-center">
                                <div class="group text-center">
                                    <i data-feather="pie-chart" class="h-10 w-10 stroke-1 group-hover:stroke-[1.5px] group-hover:text-indigo-600 duration-500 mx-auto"></i>
                                    <div class="mt-6">
                                        <a href="{{ url('store/'.$registration->store_id) }}" class="text-xl font-semibold group-hover:text-indigo-600 duration-500">Welcome To Our Store {{ $registration->name }}</a>
                                        <p class="text-slate-400 mt-4"></p>
                                    </div>
                                </div>
                                
                            @endif
                        @else
                            {{-- Show all stores for users with role_id other than 1 or 2 --}}
                            @foreach ($stores as $store)
                                <div class="group text-center">
                                    <i data-feather="pie-chart" class="h-10 w-10 stroke-1 group-hover:stroke-[1.5px] group-hover:text-indigo-600 duration-500 mx-auto"></i>
                                    <div class="mt-6">
                                        <a href="" class="text-xl font-semibold group-hover:text-indigo-600 duration-500">{{ $store->name }}</a>
                                        <p class="text-slate-400 mt-4">{{ $store->address }}</p>
                                        <div class="mt-4">
                                            <a href="{{ url('store/'.$store->id.'/register') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Register <i class="uil uil-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="py-20 w-full table relative bg-[url('../../assets/images/team.jpg')] bg-center bg-no-repeat bg-cover">
            <div class="absolute inset-0 bg-slate-900/70"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

                    <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                    </a>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->