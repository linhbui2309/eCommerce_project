<div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                                        <form method="post" action="{{ route('profile.update') }}">
                                        @csrf
                                        @method('patch')
                                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input :value="old('name', $user->name)" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="First Name:" id="firstname" name="name" required="">
                                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="form-label font-medium">Last Name : <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="user-check" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Last Name:" id="lastname" name="name" required="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input :value="old('email', $user->email)" type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email" name="email" required="">
                                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                       
                                       
                
                                                    </div>

                                                </div>
                                                <div>
                                                    <label class="form-label font-medium">Occupation : </label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="bookmark" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <input name="name" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Occupation :">
                                                    </div>
                                                </div>
                                            </div><!--end grid-->

                                            <div class="grid grid-cols-1">
                                                <div class="mt-5">
                                                    <label class="form-label font-medium">Description : </label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                        <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--end row-->

                                            <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5" value="Save Changes" >
                                            @if (session('status') === 'profile-updated')
                                            <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600"
                                            >{{ __('Saved.') }}</p>
                                         @endif
                                        </form><!--end form-->
                                    </div>