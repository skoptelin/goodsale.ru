<nav x-data="{ open: false }" class="bg-sky-500 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <x-nav-link class="border-none underline-none" :href="route('ads.index')" :active="request()->routeIs('ads.index')">
                        {{ __('GoodSale.ru') }}
                    </x-nav-link>
                    {{-- <a href="{{ route('ads.index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 headerText" />
                    </a> --}}
                </div>

           {{--      <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('ads.index')" :active="request()->routeIs('ads.index')">
                        {{ __('Лента') }}
                    </x-nav-link>
                </div> --}}
            </div>

            
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Navigation Links -->
                <div class="hidden mr-8 sm:-my-px sm:flex">
                    <x-nav-link :href="route('ads.index')" :active="request()->routeIs('ads.index')">
                        {{ __('Лента') }}
                    </x-nav-link>
                </div>
                @if(!isset(Auth::user()->name))
                    <div class="pt-2 pb-3 space-y-1">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Войти') }}
                        </x-nav-link>
                    </div>
                @endif
                @if(!empty(Auth::user()->name))
                    <div class="hidden mr-8 sm:-my-px sm:flex">
                        <x-nav-link :href="route('my_ads.index')" :active="request()->routeIs('my_ads.index')">
                            {{ __('Мои объявления') }}
                        </x-nav-link>
                    </div>
                <!-- Settings Dropdown -->
                
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-base leading-4 font-medium rounded-none text-white bg-sky-500 hover:text-white focus:outline-none transition ease-in-out duration-150 background-blue-text-white">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1 ">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Профиль') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Выход') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-sky-500 focus:outline-none focus:bg-sky-700 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('ads.index')" :active="request()->routeIs('ads.index')">
                {{ __('Лента') }}
            </x-responsive-nav-link>
        </div>
        @if(!isset(Auth::user()->name))
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Войти') }}
                </x-responsive-nav-link>
            </div>
        @endif
        @if(!empty(Auth::user()->name))
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('my_ads.index')" :active="request()->routeIs('my_ads.index')">
                    {{ __('Мои объявления') }}
                </x-responsive-nav-link>
            </div>

        <!-- Responsive Settings Options -->
        
            <div class="pt-4 pb-1 border-t border-white">
                <div class="px-4 text-right">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Профиль') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Выход') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endif
    </div>
</nav>
