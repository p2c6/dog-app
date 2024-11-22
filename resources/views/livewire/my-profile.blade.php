<div>
    @if(session('message'))
    <div class="w-full bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-2" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold">Info</p>
            <p class="text-sm">{{ session('message') }}</p>
          </div>
        </div>
      </div>
    @endif
    <div class="flex justify-center p-5">
        <div class="flex items-center justify-center bg-white w-auto p-5 md:px-36">
            <form wire:submit.prevent="updateProfile" class="self-start mt-10 w-auto md:w-96">
                <h4 class="text-teal-500 font-semibold text-lg"><i class="fa-regular fa-user text-lg"></i> Update Profile</h4>
                <div class=" border-b-2 border-gray-100 my-2"></div>
                <div class="flex flex-col gap-1 mt-1">
                    <label for="name">Name</label>
                    <input type="text" wire:model="name" class="h-8 w-full" />
                </div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-1 mt-2">
                    <label for="address">Address</label>
                    <input type="text" wire:model="address" class="h-8" name="address" placeholder="Address" />
                </div>
                <div class="flex flex-col gap-1 mt-2">
                    <label for="dob">Date of Birth</label>
                    <input type="date" wire:model="dob" class="h-8" name="dob" />
                </div>
                <div class="mt-2">
                    <label for="gender">Gender</label>
                    <div class="flex gap-1">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="Male" wire:model="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="Female" wire:model="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                        </div>
                    </div>
                  
                </div>
                <button type="submit" class="bg-yellow-500 text-white p-2 mt-5">Update</button>
            </form>
        </div>
    </div>

    <div class="flex justify-center p-5">
        <div class="flex items-center justify-center bg-white w-auto p-5 md:px-36">
            <form wire:submit.prevent="updateAboutMe" class="self-start mt-10 w-auto md:w-96">
                <h4 class="text-teal-500 font-semibold text-lg"><i class="fa-regular fa-user text-lg"></i> About Me</h4>
                <div class=" border-b-2 border-gray-100 my-2"></div>

                <div>
                    <label for="">Description</label>
                    <textarea wire:model="description" class="w-full" cols="30" rows="2"></textarea>
                </div>
                <button type="submit" class="bg-yellow-500 text-white p-2 mt-5">Update</button>
            </form>

            
        </div>
    </div>
</div>
