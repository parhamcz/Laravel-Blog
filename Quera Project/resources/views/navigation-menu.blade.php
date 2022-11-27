<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    @guest
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="space-x-8 mr-10 sm:flex">
                        <x-jet-nav-link href="{{ route('login') }}" class="h-100" :active="request()->routeIs('login')">
                            ورود
                        </x-jet-nav-link>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('admin.panel') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:mr-10 sm:flex">
                        <x-jet-nav-link class="mx-1 px-2">
                            <button class="btn btn-sm btn-light pt-2" id="side-offcanvas-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideoffcanvas" aria-controls="sideoffcanvas">
                                <i class="bi bi-grid"></i>
                            </button>
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('admin.panel') }}" class="mx-3" :active="request()->routeIs('admin.panel')">
                            {{ __('admin::admin.dashboard') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('themes.index') }}" class="mx-3" :active="request()->routeIs('themes.index')">
                            {{ trans_choice('admin::admin.theme', 2) }}
                        </x-jet-nav-link>
                    </div>
                </div>

                <div class="hidden sm:flex sm:items-center">
                    <!-- Settings Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->mobile }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <!-- Account Management -->
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('admin::admin.profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('admin::admin.logout') }}
                            </x-jet-dropdown-link>
                            <form action="{{route('logout')}}" id="logout-form" method="post">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button class="btn btn-sm btn-light pt-2 ml-3" id="side-offcanvas-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideoffcanvas" aria-controls="sideoffcanvas">
                        <i class="bi bi-grid"></i>
                    </button>
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
            <div class="pt-2 pb-1 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('admin.panel') }}" :active="request()->routeIs('admin.panel')">
                    {{ __('admin::admin.dashboard') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('themes.index') }}" :active="request()->routeIs('themes.index')">
                    {{ trans_choice('admin::admin.theme', 2) }}
                </x-jet-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="py-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif
                </div>

                <div class="space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('admin::admin.profile') }}
                    </x-jet-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('admin::admin.logout') }}
                        </x-jet-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    @endguest
</nav>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="sideoffcanvas" aria-labelledby="sideoffcanvasLabel">
    <div class="offcanvas-header">
        <div class="flex-shrink-0 flex items-center">
            <a href="/">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>
        </div>
        <h5 class="offcanvas-title mr-3" id="sideoffcanvasLabel"> {{ __('panel.quera') }} </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#side-themes" role="button" aria-expanded="false" aria-controls="side-themes">
                    {{ trans_choice('admin::admin.theme', 2) }}
                </a>
                <div class="collapse" id="side-themes">
                    <ol>
                        <li class="mt-3"> <a href="{{ route('themes.index') }}"> {{ __("admin::admin.list", ["value" => ""]) }} </a> </li>
                    </ol>
                </div>
            </li>
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#side-users" role="button" aria-expanded="false" aria-controls="side-users">
                    {{ trans_choice('admin::admin.user', 2) }}
                </a>
                <div class="collapse" id="side-users">
                    <ol>
                        <li class="mt-3"> <a href="{{ route('users.index') }}"> {{ __("admin::admin.list", ["value" => ""]) }} </a> </li>
                    </ol>
                </div>
            </li>
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#side-posts" role="button" aria-expanded="false" aria-controls="side-posts">
                    {{ trans_choice('admin::admin.post', 2) }}
                </a>
                <div class="collapse" id="side-posts">
                    <ol>
                        <li class="mt-3"> <a href="{{ route('posts.index') }}"> {{ __('admin::admin.list', ['value' => '']) }} </a> </li>
                        <li class="mt-3"> <a href="{{ route('posts.create') }}"> {{ __('admin::admin.create', ['value' => '']) }} </a> </li>
                    </ol>
                </div>
            </li>
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#side-categories" role="button" aria-expanded="false" aria-controls="side-categories">
                    {{ trans_choice('admin::admin.category', 2) }}
                </a>
                <div class="collapse" id="side-categories">
                    <ol>
                        <li class="mt-3"> <a href="{{ route('categories.index') }}"> {{ __("admin::admin.list", ["value" => ""]) }} </a> </li>
                        <li class="mt-3"> <a href="{{ route('categories.create') }}"> {{ __('admin::admin.create', ['value' => '']) }} </a> </li>
                    </ol>
                </div>
            </li>
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#side-tags" role="button" aria-expanded="false" aria-controls="side-tags">
                    {{ trans_choice('admin::admin.tag', 2) }}
                </a>
                <div class="collapse" id="side-tags">
                    <ol>
                        <li class="mt-3"> <a href="{{ route('tags.index') }}"> {{ __("admin::admin.list", ["value" => ""]) }} </a> </li>
                        <li class="mt-3"> <a href="{{ route('tags.create') }}"> {{ __('admin::admin.create', ['value' => '']) }} </a> </li>
                    </ol>
                </div>
            </li>
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#side-comments" role="button" aria-expanded="false" aria-controls="side-comments">
                    {{ trans_choice('admin::admin.comment', 2) }}
                </a>
                <div class="collapse" id="side-comments">
                    <ol>
                        <li class="mt-3"> <a href="{{ route('comments.index') }}"> {{ __("admin::admin.list", ["value" => ""]) }} </a> </li>
                    </ol>
                </div>
            </li>
        </ul>
    </div>
</div>