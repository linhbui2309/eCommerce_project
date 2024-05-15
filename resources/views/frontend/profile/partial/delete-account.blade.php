<form method="post" action="{{ route('user.destroy') }}">
@csrf
@method('delete')
<h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>
<div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <h5 class="text-lg font-semibold mb-4 text-red-600">Delete Account :</h5>
            <div>
                    <label class="form-label font-medium">Confirm password :</label>
                    <div class="form-icon relative mt-2">
                        <i data-feather="key" class="w-4 h-4 absolute top-3 start-4"></i>
                        <input id ="password" name= "password" type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Password') }}" required="">
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>
            </div>

            <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below "Delete" button</p>

         <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Delete</a>
</div>


</form>
