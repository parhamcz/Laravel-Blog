<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 py-6">
                <div class="all-boxes bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card border-0">
                        <div class="card-header border-0 rounded py-2">
                            <div class="float-start">
                                <i class="bi bi-people ml-1"></i>
                                {{ trans_choice('admin::admin.user', 2) }}
                            </div>
                            <div class="float-end">

                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title h2 py-2"> {{ $countUsers }} </div>
                            <div class="text-right">
                                <a href="{{ url('/') }}/admin/users" class="card-link"> {{ __("admin::admin.list", ["value" => trans_choice('admin::admin.user', 2)]) }} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 py-6">
                <div class="all-boxes bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card border-0">
                        <div class="card-header border-0 rounded py-2">
                            <div class="float-start">
                                <i class="bi bi-stickies ml-1"></i>
                                {{ trans_choice('admin::admin.post', 2) }}
                            </div>
                            <div class="float-end">
                                <a href="{{ route('posts.create') }}"> {{ __('admin::admin.create', ['value' => '']) }} </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title h2 py-2"> {{ $countPosts }} </div>
                            <div class="text-right">
                                <a href="{{ url('/') }}/admin/posts" class="card-link"> {{ __('admin::admin.list', ["value" => trans_choice('admin::admin.post', 2)]) }} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-6">
            <div class="col-lg-10">
                <div class="all-boxes bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card border-0">
                        <div class="card-header border-0 rounded">
                            <div class="float-right pt-1">
                                <i class="bi bi-app-indicator ml-1"></i>
                                {{ trans_choice('admin::admin.theme', 1) }}
                            </div>
                            <div class="float-left">
                                <a href="{{ route('themes.create') }}"> {{ __('admin::admin.create', ['value' => '']) }} </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset("/storage/$theme->images") }}" class="img-fluid rounded" alt="starter-theme">
                                </div>
                                <div class="col-8">
                                    <p>
                                        {{ $theme->name }}
                                    </p>
                                    <p class="d-inline-block">
                                        {{  __('validation.attributes.size') }}: &nbsp; <div class="d-inline-block ltr"> {{ $theme->size }} </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
