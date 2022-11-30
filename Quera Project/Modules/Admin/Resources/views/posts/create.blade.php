<x-app-layout>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="all-boxes bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                    <div class="card border-0">
                        <div class="card-header border-0 rounded">
                            <div class="float-right pt-1">
                                {{ __('admin::admin.create', ['value' => trans_choice('admin::admin.post', 1)]) }}
                            </div>
                            <div class="float-left">

                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <form class="form-horizontal" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="title" class="form-label{{ $errors->has('title') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.title') }} </label>
                                                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" placeholder="عنوان را وارد کنید" value="{{ old('title') }}">
                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col">
                                                <label for="slug" class="form-label{{ $errors->has('slug') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.slug') }} </label>
                                                <input type="text" class="form-control eninputs{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" id="slug" placeholder="اسلاگ را وارد کنید" value="{{ old('slug') }}">
                                                <div class="form-text"> در صورت خالی بودن از روی عنوان تولید خواهد شد. </div>
                                                @if ($errors->has('slug'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('slug') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-6">
                                                <div class="card p-0 hummingbird-treeview" id="treeview_container" style="height: 150px; overflow-y: auto;">
                                                    <div class="card-header">
                                                        <div class="float-start{{ $errors->has('categories') ? ' text-danger' : '' }}">
                                                            <div class="fs-6"> {{ __('validation.attributes.categories') }} </div>
                                                        </div>
                                                        <div class="float-end">
                                                            <a href="{{ route('categories.create') }}" class="fs-6"> {{ __('admin::admin.create', ['value' => '']) }} </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <ul class="hummingbird-base p-0" id="tree-view">
                                                            @foreach($categories as $category)
                                                                <li data-id="{{ $category->id }}">
                                                                    @if(count($category->subcategories))
                                                                        <i class="bi bi-plus-circle-dotted"></i>
                                                                        <label>
                                                                            <input name="categories[]" value="{{ $category->id }}" id="xnode-{{ $category->id }}" data-id="custom-{{ $category->id }}" type="checkbox"> {{ $category->name }}
                                                                        </label>
                                                                        <ul>
                                                                            @foreach($category->subcategories as $subCategory)
                                                                                @include('admin::posts.nested_categories', ['subCategory' => $subCategory])
                                                                            @endforeach
                                                                        </ul>
                                                                    @else
                                                                        <label>
                                                                            <input name="categories[]" value="{{ $category->id }}" id="xnode-{{ $category->id }}" data-id="custom-{{ $category->id }}" type="checkbox"> {{ $category->name }}
                                                                        </label>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @if ($errors->has('categories'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('categories') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <label for="tags" class="form-label{{ $errors->has('tags') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.tags') }} </label>
                                                <select class="form-select w-100 ltr" name="tags[]" id="tags" multiple="multiple">
                                                    @foreach($tags as $tag)
                                                        <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-text"> تگ‌ها را انتخاب نمایید. </div>
                                                @if ($errors->has('tags'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('tags') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col">
                                                <label for="description" class="form-label{{ $errors->has('description') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.description') }} </label>
                                                <textarea rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col">
                                                <label for="body" class="form-label{{ $errors->has('body') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.body') }} </label>
                                                <textarea rows="5" class="form-control" name="body" id="body" style="height: 20px"> {{ old('body') }} </textarea>
                                                @if ($errors->has('body'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('body') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-sm-6">
                                                <label for="image" class="form-label{{ $errors->has('image') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.image') }} </label>
                                                <input type="file" class="form-control form-control-sm{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="image" placeholder="تصویر را وارد کنید">
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-light"> {{ __('admin::admin.create', ['value' => '']) }} </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="{{ asset('/plugins/ckeditor5/ckeditor.js') }}"></script>

        <script>
            let editor = null;

            ClassicEditor
                .create( document.querySelector( '#body' ), {
                    language: 'fa',
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
                } )
                .then( e => {
                    editor = e;
                } )
                .catch( error => {
                    console.error( error );
                });

            $(document).ready(function() {
                $('#tags').select2({
                    dir: "rtl"
                });

                $("#tree-view").hummingbird();
            });
        </script>
    </x-slot>
</x-app-layout>
