<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

    <link rel="icon" href="{{ asset('/images/logo_transparent.png') }}" type="image/jpg" sizes="16x16">

    <title> کوئرا </title>

    @if(isset($sheets))
        {{ $sheets }}
    @endif

    @livewireStyles
</head>
<body>
    <x-jet-banner/>

    <div id="page-container" class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        @include('sections.header')

        <!-- Page Content -->
        <main id="content-wrap h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 pt-4 d-none d-md-block">
                        <div class="p-3 bg-light shadow rounded">
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item">
                                    <a href="{{ route('admin.panel') }}" class="nav-link py-2 px-3 @if(request()->routeIs('admin.panel')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ __('admin::admin.dashboard') }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('posts.index') }}" class="nav-link py-2 px-3 @if(Str::of(request()->path())->startsWith('admin/posts')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ trans_choice('admin::admin.post', 2) }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-stickies"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('categories.index') }}" class="nav-link py-2 px-3 @if(Str::of(request()->path())->startsWith('admin/categories')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ trans_choice('admin::admin.category', 2) }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-tags"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tags.index') }}" class="nav-link py-2 px-3 @if(Str::of(request()->path())->startsWith('admin/tags')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ trans_choice('admin::admin.tag', 2) }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-bookmarks"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('comments.index') }}" class="nav-link py-2 px-3 @if(Str::of(request()->path())->startsWith('admin/comments')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ trans_choice('admin::admin.comment', 2) }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-chat-square-text"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('themes.index') }}" class="nav-link py-2 px-3 @if(Str::of(request()->path())->startsWith('admin/themes')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ trans_choice('admin::admin.theme', 2) }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-app-indicator"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}" class="nav-link py-2 px-3 @if(Str::of(request()->path())->startsWith('admin/users')) active @else link-dark @endif">
                                        <div class="float-start">
                                            {{ trans_choice('admin::admin.user', 2) }}
                                        </div>
                                        <div class="float-end">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <span class="clearfix"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 mb-5">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>

        @include('sections.footer')
    </div>

    @livewireScripts

    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}"></script>

    @if(isset($scripts))
        {{ $scripts }}
    @endif

    @stack('modals')
</body>
</html>