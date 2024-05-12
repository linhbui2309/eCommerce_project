

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techwind Blog </title> -->

    <!-- Liên kết CSS Bootstrap bằng CDN
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class ="container">
    <div class ="row">
        <div class ="col-md-12">
            <div class = "card">
                <div class= "card-header">
                    <h4>Blog
                        <a href="{{ url('blogs/create')}}" class = "btn btn-primary float-end">Add Blog</a>
                    </h4>

                </div>
                <div class ="card-body">
                    
                    <table class ="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Is Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($blogs as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" style="height:100px;width:150px;" alt="Img">
                                    
                                </td>
                                <td>{{$item->is_active}}</td>
                                <td>
                                    <a href="{{ url('blogs/'.$item->id.'/edit') }}">Edit</a>
                                    <a href="{{ url('blogs/'.$item->id.'/delete') }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </body>
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
</body> -->
@extends('layouts.admin')
@section('title','Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template')


       
@section('content')
   
               

                
                        <!-- Start Content -->
                        @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                        
                        <div class="md:flex justify-between items-center">
                            <div>
                                <h5 class="text-lg font-semibold">Blogs / News</h5>

                                <ul class="tracking-[0.5px] inline-block mt-2">
                                    <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="index.html">Techwind</a></li>
                                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                                    <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Blogs</li>
                                </ul>
                            </div>

                            <div>
                                <a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 hover:bg-gray-800/10 dark:bg-gray-800 border border-gray-800/5 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" data-modal-toggle="addblog" title="Add New"><i data-feather="plus" class="h-4 w-4"></i></a>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                        @foreach ($blogs as $item)
                            

                            
                            <div class="relative rounded-md shadow dark:shadow-gray-700 overflow-hidden bg-white dark:bg-slate-900">
                                <img src="{{ asset($item->image) }}" style= "max-width: 100%;height: auto;" alt="Img">

                                <div class="content p-6">
                                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500">{{$item->name}}</a>
                                    <p class="text-slate-400 mt-3">{{$item->description}}</p>
                                    
                                    <p>{{$item->is_active}}</p>
                                    
                                    
                                    <div class="mt-4">
                                        <a href="blog-detail.html" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                                    </div>
                                    <div>
                                    <a href="{{ url('blogs/'.$item->id.'/edit') }}">
                                        Edit</a>
                                    <a href="{{ url('blogs/'.$item->id.'/delete') }}">Delete</a>
                                    </div>
                                </div>
                            </div><!--blog end-->
                            
                           
                        @endforeach
        

                        <div class="flex justify-end mt-6">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex items-center -space-x-px">
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                            <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">5</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                            <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End Content -->

           <!-- Modal -->
           <div id="addblog" tabindex="10" class="fixed z-50 hidden overflow-hidden inset-0 m-auto">
            <div class="relative w-full h-auto max-w-lg p-4">
                <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700">
                    <div class="flex justify-between items-center p-4 border-b border-gray-100 dark:border-gray-700">
                        <h5 class="text-xl font-semibold">Add blog or news</h5>
                
                    
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="addblog">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <div class="p-4">
                    <form name="frmCreate" method="post"  enctype="multipart/form-data" class="form">
                        @csrf
                        <div>
                            <p class="font-semibold mb-4">Upload your blog image here, Please click "Upload Image" Button.</p>
                            <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                            <input type="file" id="input-file" name="image" accept="image/*" onchange={handleChange()} hidden>
                            <label class="btn-upload py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-6 cursor-pointer" for="input-file">Upload Image</label>
                        </div>
                        
                        <form class="mt-4">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-12">
                                    <label class="font-semibold">Blog Title <span class="text-red-600">*</span></label>
                                    <input name="name" id="name" type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Title :">
                                </div><!--end col-->

                                <div class="col-span-12">
                                    <label class="font-semibold"> Description : </label>
                                    <textarea name="description" id="description" class="form-input w-full py-2 px-3 h-24 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Description :"></textarea>
                                </div><!--end col-->

                                <div class="col-span-12">
                                    <label class="font-semibold">Active: </label>
                                    <input type="checkbox" name="is_active" >

                                </div>

                                <div class="col-span-12">
                                    <button name ="btnSave" type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Create Blog</button>
                                </div><!--end col-->
                            </div>
                        </form>
                        </form> 
                    </div> 
                                       
                </div>
            </div>
        </div>
        <!-- Modal -->
@stop
