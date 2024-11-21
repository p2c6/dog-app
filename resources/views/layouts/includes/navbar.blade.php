<div class="bg-teal-500 p-2">
    <div class="container mx-auto flex justify-between items-center text-white">
        <div>
            <h4 class="font-bold">Dog App</h4>
        </div>
        <div>
            <div class="relative inline-block text-left" x-data="{ collapse: false }">
                <div class="hover:cursor-pointer">
                    <a @click="collapse = !collapse" class="inline-flex w-full justify-center gap-x-1.5 px-3 py-2 text-sm font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    John Doe
                    <svg class="-mr-1 size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </a>
                </div>
            
                <div x-show="collapse" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900 outline-none", Not Active: "text-gray-700" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-500" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-500" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                    <form method="POST" action="{{ route('logout') }}" role="none">
                        @csrf
                        <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-teal-500" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
    </div>

</div>