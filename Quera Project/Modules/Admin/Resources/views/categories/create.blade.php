<x-app-layout>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="all-boxes bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                    <div class="card border-0">
                        <div class="card-header border-0 rounded">
                            <div class="float-right pt-1">
                                {{ __('admin::admin.create', ['value' => trans_choice('admin::admin.category', 1)]) }}
                            </div>
                            <div class="float-left">

                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <form class="form-horizontal" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="name" class="form-label{{ $errors->has('name') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.name') }} </label>
                                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="نام را وارد کنید" value="{{ old('name') }}">
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col">
                                                <label for="slug" class="form-label{{ $errors->has('slug') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.slug') }} </label>
                                                <input type="text" class="form-control eninputs{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" id="slug" placeholder="اسلاگ را وارد کنید" value="{{ old('slug') }}">
                                                <div class="form-text"> اگر اسلاگ را وارد نکنید، به‌صورت خودکار از روی نام تولید خواهد شد. </div>
                                                @if ($errors->has('slug'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('slug') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <label for="parent_id" class="form-label{{ $errors->has('parent_id') ? ' text-danger' : '' }} mb-1"> {{ __('validation.attributes.parent') }} </label>
                                                <select class="form-select w-100 ltr" name="parent_id" id="parent_id">
                                                    <option disabled selected value> یک دسته‌بندی را انتخاب نمایید </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-text"> دسته‌بندی مادر را انتخاب کنید، این قسمت الزامی نیست. </div>
                                                @if ($errors->has('parent_id'))
                                                    <span class="invalid-feedback d-block">
                                                        <strong>{{ $errors->first('parent_id') }}</strong>
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
        <script>
            $(document).ready(function() {
                $('#parent_id').select2({
                    dir: "rtl"
                });
            });
        </script>
    </x-slot>
</x-app-layout>
