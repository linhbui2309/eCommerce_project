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
                        
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                                    @include('frontend.profile.partial.profile-banner')
                            </div>
                            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                           
                                <div class="grid grid-cols-1 gap-6">
                                    @include('frontend.profile.partial.update-personal-details')
                                    @include('frontend.profile.partial.update-password')
                                    @include('frontend.profile.partial.delete-account')

                                </div>
                               
                            </div>
                        
                        </div>
                        </div>
 
          @stop              
                           
