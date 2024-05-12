<div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                            <div>
                                                <h5 class="text-lg font-semibold mb-4">Contact Info :</h5>
            
                                                <form >
                                           
                                                    <div class="grid grid-cols-1 gap-5">
                                                        <div>
                                                            <label class="form-label font-medium">Phone No. :</label>
                                                            <div class="form-icon relative mt-2">
                                                                <i data-feather="phone" class="w-4 h-4 absolute top-3 start-4"></i>
                                                                <input name="number" id="number" type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Phone :">
                                                            </div>
                                                        </div>
            
                                                        <div>
                                                            <label class="form-label font-medium">Website :</label>
                                                            <div class="form-icon relative mt-2">
                                                                <i data-feather="globe" class="w-4 h-4 absolute top-3 start-4"></i>
                                                                <input name="url" id="url" type="url" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Url :">
                                                            </div>
                                                        </div>
                                                    </div><!--end grid-->
            
                                                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Add</button>
                                                </form>
                                            </div><!--end col-->
                                            
                                            <div> 
                                                <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                                <form method="post" action="{{ route('password.update') }}">
                                                @csrf
                                                 @method('put')
                                                    <div class="grid grid-cols-1 gap-5">
                                                        <div>
                                                            <label class="form-label font-medium">Old password :</label>
                                                            <div class="form-icon relative mt-2">
                                                                <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                                                                <input name="current_password" type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Old password" required="">
                                                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                            </div>
                                                        </div>
                
                                                        <div>
                                                            <label class="form-label font-medium">New password :</label>
                                                            <div class="form-icon relative mt-2">
                                                                <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                                                                <input name= "password" type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="New password" required="">
                                                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                            </div>
                                                        </div>
                
                                                        <div>
                                                            <label class="form-label font-medium">Re-type New password :</label>
                                                            <div class="form-icon relative mt-2">
                                                                <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                                                                <input name="password_confirmation" type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Re-type New password" required="">
                                                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                            </div>
                                                        </div>
                                                    </div><!--end grid-->
                
                                                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Save password</button>
                                                    @if (session('status') === 'password-updated')
                                                    <p
                                                        x-data="{ show: true }"
                                                        x-show="show"
                                                        x-transition
                                                        x-init="setTimeout(() => show = false, 2000)"
                                                        class="text-sm text-gray-600"
                                                    >{{ __('Saved.') }}</p>
                                                @endif
                                                </form>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>