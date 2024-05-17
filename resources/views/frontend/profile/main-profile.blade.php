
@extends('layouts.admin')
@section('title','Profile')




                @section('content')
                

                
                        <div class="grid grid-cols-1">
                            <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                                <div class="relative shrink-0">
                                    <img src="assets/images/blog/bg.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                                    <div class="absolute inset-0 bg-black/70"></div>
                                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-12 grid-cols-1">
                        
                            @include('frontend.profile.partial.profile-banner')
                            
                            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                            
                                <div class="grid grid-cols-1 gap-6">
                                    
                                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <h5 class="text-xl font-semibold">{{ Auth::user()->name }}</h5>
                            
                                        <p class="text-slate-400 mt-3">{{Auth::user()->description}}</p>
                                    </div>
                                    

                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                                            <h5 class="text-xl font-semibold">Personal Details :</h5>
                                            <div class="mt-6">
                                                <div class="flex items-center">
                                                    <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Email :</h6>
                                                        <a href="" class="text-slate-400">{{ Auth::user()->email }}</a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Skills :</h6>
                                                        <a href="" class="text-slate-400">{{Auth::user()->skill}}</a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="italic" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Language :</h6>
                                                        <a href="" class="text-slate-400">{{Auth::user()->language}}</a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="globe" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Website :</h6>
                                                        <a href="" class="text-slate-400">www.cristina.com</a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="gift" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Birthday :</h6>
                                                        <p class="text-slate-400 mb-0">{{Auth::user()->birthday}}</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Location :</h6>
                                                        <a href="" class="text-slate-400">{{Auth::user()->address}}</a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                    <div class="flex-1">
                                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Cell No :</h6>
                                                        <a href="" class="text-slate-400">{{Auth::user()->phone_numbers}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                                            <h5 class="text-xl font-semibold">Experience :</h5>
                                            
                                            <div class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                                <img src="assets/images/client/circle-logo.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                                <div class="flex-1 content ms-4">
                                                    <h4 class="text-lg text-medium">Senior Web Developer</h4>
                                                    <p class="text-slate-400 mb-0">3 Years Experience</p>
                                                    <p class="text-slate-400 mb-0"><a href="" class="text-indigo-600">CircleCi</a> @London, UK</p>    
                                                </div>
                                            </div>
            
                                            <div class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                                <img src="assets/images/client/facebook-logo-2019.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                                <div class="flex-1 content ms-4">
                                                    <h4 class="text-lg text-medium">Web Designer</h4>
                                                    <p class="text-slate-400 mb-0">2 Years Experience</p>
                                                    <p class="text-slate-400 mb-0"><a href="" class="text-indigo-600">Facebook</a> @Washington D.C, USA</p>    
                                                </div>
                                            </div>
            
                                            <div class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                                <img src="assets/images/client/spotify.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                                <div class="flex-1 content ms-4">
                                                    <h4 class="text-lg text-medium">UI Designer</h4>
                                                    <p class="text-slate-400 mb-0">2 Years Experience</p>
                                                    <p class="text-slate-400 mb-0"><a href="" class="text-indigo-600">Spotify</a> @Perth, Australia</p>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <h5 class="text-xl font-semibold">Portfolio :</h5>
                    
                                        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                                <img src="assets/images/portfolio/1.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
                                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>
                    
                                                <div class="content duration-500">
                                                    <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                                        <a href="assets/images/portfolio/1.jpg" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                                    </div>
                    
                                                    <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                                        <a href="portfolio-detail-three.html" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                                                        <p class="text-slate-400 mb-0">Abstract</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                                <img src="assets/images/portfolio/2.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
                                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>
                    
                                                <div class="content duration-500">
                                                    <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                                        <a href="assets/images/portfolio/2.jpg" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                                    </div>
                    
                                                    <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                                        <a href="portfolio-detail-three.html" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                                                        <p class="text-slate-400 mb-0">Abstract</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                                <img src="assets/images/portfolio/3.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
                                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>
                    
                                                <div class="content duration-500">
                                                    <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                                        <a href="assets/images/portfolio/3.jpg" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                                    </div>
                    
                                                    <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                                        <a href="portfolio-detail-three.html" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                                                        <p class="text-slate-400 mb-0">Abstract</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                                <img src="assets/images/portfolio/4.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
                                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>
                    
                                                <div class="content duration-500">
                                                    <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                                        <a href="assets/images/portfolio/4.jpg" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                                    </div>
                    
                                                    <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                                        <a href="portfolio-detail-three.html" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                                                        <p class="text-slate-400 mb-0">Abstract</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                                <img src="assets/images/portfolio/5.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
                                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>
                    
                                                <div class="content duration-500">
                                                    <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                                        <a href="assets/images/portfolio/5.jpg" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                                    </div>
                    
                                                    <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                                        <a href="portfolio-detail-three.html" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                                                        <p class="text-slate-400 mb-0">Abstract</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                                <img src="assets/images/portfolio/6.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
                                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>
                    
                                                <div class="content duration-500">
                                                    <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                                        <a href="assets/images/portfolio/6.jpg" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                                    </div>
                    
                                                    <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                                        <a href="portfolio-detail-three.html" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                                                        <p class="text-slate-400 mb-0">Abstract</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- End Content -->
                       
   

                @stop


