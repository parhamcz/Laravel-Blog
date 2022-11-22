@if(!isset($post))
    {{-- Create Post Page --}}
    <li data-id="{{ $subCategory->id }}">
        <label>
            <input name="categories[]" value="{{ $subCategory->id }}" id="xnode-{{ $category->id }}-{{ $subCategory->id }}" data-id="custom-{{ $category->id }}-{{ $subCategory->id }}" type="checkbox"> {{ $subCategory->name }}
        </label>
    </li>
    @if(count($subCategory->subcategories))
        @foreach ($subCategory->subcategories as $subCategory)
            @include('admin::posts.nested_categories', ['subCategory' => $subCategory])
        @endforeach
    @endif
@else
    {{-- Edit Post Page --}}
    <li data-id="{{ $subCategory->id }}">
        <label>
            <input name="categories[]" value="{{ $subCategory->id }}" id="xnode-{{ $category->id }}-{{ $subCategory->id }}" data-id="custom-{{ $category->id }}-{{ $subCategory->id }}" type="checkbox" @if( in_array($subCategory->id, $post->categories->pluck('id')->toArray()) ) checked @endif> {{ $subCategory->name }}
        </label>
    </li>
    @if(count($subCategory->subcategories))
        @foreach ($subCategory->subcategories as $subCategory)
            @include('admin::posts.nested_categories', ['subCategory' => $subCategory, 'post' => $post])
        @endforeach
    @endif
@endif