<nav x-data="{ open: false }" class="bg-sky-500 border-b-0">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <x-nav-link class="border-none underline-none" :href="route('ads.index')" :active="request()->routeIs('ads.index')">
                        {{ __('GoodSale.ru') }}
                    </x-nav-link>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Navigation Links -->
                    <div class="hidden mr-8 sm:-my-px sm:flex">
                        <x-nav-link :href="route('ads.index')" :active="request()->routeIs('ads.index')">
                            {{ __('Лента') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
    </div>
</nav>
