<div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">

        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
               
                                        <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                                        <form method="post" action="{{ url('profile/'.$user->id.'/edit') }}" enctype="multipart/form-data" class="form">
                                        @csrf
                                        @method('patch')
                                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                        <div>
                                                <p class="font-semibold mb-4">Upload your blog image here, Please click "Upload Image" Button.</p>
                                                <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                                                <input type="file" id="input-file" name="avatar" accept="image/*" onchange={handleChange()} hidden>
                                                <label class="btn-upload py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-6 cursor-pointer" for="input-file">Upload Image</label>
                                            </div>
                                        </div>
                                        

                                        
                                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                            
                                                <div>
                                                    <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input :value="{{old('name', $user->name)}}" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="First Name:" id="name" name="name" required="">
                                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="form-label font-medium">Last Name : <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="user-check" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input value= "{{old('last_name', $user->last_name)}}" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Last Name:" id="name" name="last_name" required="">
                                                        <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input :value="{{old('email', $user->email)}}" type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email" name="email" required="">
                                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                        
                                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                        <div>
                                                            <p class="text-sm mt-2 text-gray-800">
                                                                {{ __('Your email address is unverified.') }}

                                                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    {{ __('Click here to re-send the verification email.') }}
                                                                </button>
                                                            </p>

                                                            @if (session('status') === 'verification-link-sent')
                                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                                       
                                       
                
                                                  

                                                </div>
                                                <div>
                                                    <label class="form-label font-medium">Occupation : </label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="bookmark" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input value ="{{old('occupation', $user->occupation)}}" name="occupation" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Occupation :">
                                                    </div>
                                                </div>
                                            </div><!--end grid-->

                                            <div class="grid grid-cols-1">
                                                <div class="mt-5">
                                                    <label class="form-label font-medium">Description : </label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <textarea value ="{{old('description', $user->description)}}" name="description" id="description" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--end row-->

                                            <div class="flex items-center gap-4">
                                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                                            @if (session('status') === 'profile-updated')
                                                <p
                                                    x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600"
                                                >{{ __('Saved.') }}</p>
                                            @endif
                                        </div>
         
                                        </form><!--end form-->
                                    </div>