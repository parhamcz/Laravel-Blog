<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute باید تایید شود',
    'active_url' => ':attribute یک آدرس سایت معتبر نیست',
    'after' => ':attribute باید تاریخی بعد از :date باشد',
    'after_or_equal' => ':attribute باید تاریخی مساوی یا بعد از :date باشد',
    'alpha' => ':attribute باید تنها شامل حروف باشد',
    'alpha_dash' => ':attribute باید تنها شامل حروف، اعداد، خط تیره و زیر خط باشد',
    'alpha_num' => ':attribute باید تنها شامل حروف و اعداد باشد',
    'array' => ':attribute باید آرایه باشد',
    'before' => ':attribute باید تاریخی قبل از :date باشد',
    'before_or_equal' => ':attribute باید تاریخی مساوی یا قبل از :date باشد',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد',
        'array' => ':attribute باید بین :min و :max آیتم باشد',
    ],
    'boolean' => ':attribute تنها می تواند صحیح یا غلط باشد',
    'confirmed' => 'تایید مجدد :attribute صحیح نمی باشد',
    'date' => ':attribute یک تاریخ صحیح نمی باشد',
    'date_equals' => ':attribute باید تاریخی مساوی با :date باشد',
    'date_format' => ':attribute با فرمت :format همخوانی ندارد',
    'different' => ':attribute و :other باید متفاوت باشند',
    'digits' => ':attribute باید :digits عدد باشد',
    'digits_between' => ':attribute باید بین :min و :max عدد باشد',
    'dimensions' => 'ابعاد تصویر :attribute مجاز نمی باشد',
    'distinct' => ':attribute دارای افزونگی داده می باشد',
    'email' => ':attribute باید یک آدرس ایمیل صحیح باشد',
    'ends_with' => ':attribute باید با یکی از این مقادیر پایان یابد، :values',
    'exists' => 'انتخاب شده :attribute صحیح نمی باشد',
    'file' => ':attribute باید یک فایل باشد',
    'filled' => ':attribute نمی تواند خالی باشد',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد',
        'string' => ':attribute باید بزرگتر از :value کاراکتر باشد',
        'array' => ':attribute باید بیشتر از :value آیتم باشد',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد',
        'file' => ':attribute باید بزرگتر یا مساوی :value کیلوبایت باشد',
        'string' => ':attribute باید بزرگتر یا مساوی :value کاراکتر باشد',
        'array' => ':attribute باید :value آیتم یا بیشتر داشته باشد',
    ],
    'image' => ':attribute باید از نوع تصویر باشد',
    'in' => 'انتخابی :attribute صحیح نمی باشد',
    'in_array' => ':attribute در :other وجود ندارد',
    'integer' => ':attribute باید از نوع عددی باشد',
    'ip' => ':attribute باید آی پی آدرس باشد',
    'ipv4' => ':attribute باید آی پی آدرس ورژن 4 باشد',
    'ipv6' => ':attribute باید آی پی آدرس ورژن 6 باشد',
    'json' => ':attribute باید از نوع رشته جیسون باشد',
    'lt' => [
        'numeric' => ':attribute باید کمتر از :value باشد',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد',
        'string' => ':attribute باید کمتر از :value کاراکتر باشد',
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد',
    ],
    'lte' => [
        'numeric' => ':attribute باید مساوی یا کمتر از :value باشد',
        'file' => ':attribute باید مساوی یا کمتر از :value کیلوبایت باشد',
        'string' => ':attribute باید مساوی یا کمتر از :value کاراکتر باشد',
        'array' => ':attribute نباید کمتر از :value آیتم داشته باشد',
    ],
    'max' => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد',
        'string' => ':attribute نباید بزرگتر از :max کاراکتر باشد',
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد',
    ],
    'mimes' => ':attribute باید دارای یکی از این فرمت ها باشد: :values',
    'mimetypes' =>  ':attribute باید دارای یکی از این فرمت ها باشد: :values',
    'min' => [
        'numeric' => ':attribute باید حداقل :min باشد',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد',
        'string' => ':attribute باید حداقل :min کاراکتر باشد',
        'array' => ':attribute باید حداقل :min آیتم داشته باشد',
    ],
    'not_in' => 'انتخابی :attribute صحیح نمی باشد',
    'not_regex' => 'فرمت :attribute صحیح نمی باشد',
    'numeric' => ':attribute باید از نوع عددی باشد',
    'password' => 'رمزعبور صحیح نمی باشد',
    'present' => ':attribute باید از نوع درصد باشد',
    'regex' => 'فرمت :attribute صحیح نمی باشد',
    'required' => 'تکمیل :attribute الزامی است',
    'required_if' => 'تکمیل :attribute زمانی که :other دارای مقدار :value است الزامی می باشد',
    'required_unless' => 'تکمیل :attribute الزامی می باشد مگر :other دارای مقدار :values باشد',
    'required_with' => 'تکمیل :attribute زمانی که مقدار :values درصد است الزامی است',
    'required_with_all' => 'تکمیل :attribute زمانی که مقادیر :values درصد است الزامی می باشد',
    'required_without' => 'تکمیل :attribute زمانی که مقدار :values درصد نیست الزامی است',
    'required_without_all' => 'تکمیل :attribute زمانی که هیچ کدام از مقادیر :values درصد نیست الزامی است',
    'same' => 'های :attribute و :other باید یکی باشند',
    'size' => [
        'numeric' => ':attribute باید :size باشد',
        'file' => ':attribute باید :size کیلوبایت باشد',
        'string' => ':attribute باید :size  کاراکتر باشد',
        'array' => ':attribute باید شامل :size آیتم باشد',
    ],
    'starts_with' => ':attribute باید با یکی از این مقادیر شروع شود، :values',
    'string' => ':attribute باید تنها شامل حروف باشد',
    'timezone' => ':attribute باید از نوع منطقه زمانی صحیح باشد',
    'unique' => 'این :attribute از قبل ثبت شده است',
    'uploaded' => 'آپلود :attribute شکست خورد',
    'url' => 'فرمت :attribute اشتباه است',
    'uuid' => ':attribute باید یک UUID صحیح باشد',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'family' => 'نام‌خانوادگی',
        'username' => 'نام کاربری',
        'email' => 'ایمیل',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تاییدیه رمز عبور',
        'city' => 'شهر',
        'state' => 'استان',
        'country' => 'کشور',
        'address' => 'آدرس',
        'phone' => 'تلفن',
        'mobile' => 'تلفن همراه',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
        'text' => 'متن',
        'body' => 'متن',
        'slug' => 'اسلاگ',
        'content' => 'محتوا',
        'description' => 'توضیحات',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'available' => 'موجود',
        'type' => 'نوع',
        'img' => 'تصویر',
        'image' => 'تصویر',
        'categories' => 'دسته‌بندی',
        'tags' => 'تگ',
        'size' => 'اندازه',
        'color' => 'رنگ',
        'captcha' => 'کد امنیتی',
        'price' => 'قیمت',
        'pic' => 'تصویر',
        'link' => 'لینک',
        'parent' => 'مادر',
        'created_at' => 'تاریخ ثبت',
        'action' => 'عملیات',
        'file' => 'فایل',
    ],
];
