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

    'accepted' => ':attribute باید پذیرفته شود.',
    'accepted_if' => ':attribute باید پذیرفته شود اگر :other برابر با :value باشد.',
    'active_url' => ':attribute یک URL معتبر نیست.',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی بعد از یا مساوی با :date باشد.',
    'alpha' => ':attribute باید فقط شامل حروف باشد.',
    'alpha_dash' => ':attribute باید فقط شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => ':attribute باید فقط شامل حروف و اعداد باشد.',
    'array' => ':attribute باید یک آرایه باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل از یا مساوی با :date باشد.',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید بین :min و :max مورد داشته باشد.',
    ],
    'boolean' => ':attribute فیلد باید درست یا غلط باشد.',


    'confirmed' => 'تطبیق :attribute با تاییدیه مطابقت ندارد.',
    'current_password' => 'رمزعبور اشتباه است.',
    'date' => ':attribute تاریخ معتبری نیست.',
    'date_equals' => ':attribute باید تاریخی مساوی با :date باشد.',
    'date_format' => ':attribute با فرمت :format مطابقت ندارد.',
    'declined' => ':attribute باید رد شود.',
    'declined_if' => ':attribute باید رد شود اگر :other برابر با :value باشد.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute نامعتبر است.',
    'distinct' => 'فیلد :attribute دارای مقدار تکراری است.',
    'email' => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از موارد زیر پایان یابد: :values.',
    'enum' => ':attribute انتخابی نامعتبر است.',
    'exists' => ':attribute انتخابی نامعتبر است.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید دارای مقدار باشد.',


    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر از :value کاراکتر داشته باشد.',
        'array' => ':attribute باید بیشتر از :value مورد داشته باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی با :value باشد.',
        'file' => ':attribute باید بزرگتر یا مساوی با :value کیلوبایت باشد.',
        'string' => ':attribute باید بزرگتر یا مساوی با :value کاراکتر داشته باشد.',
        'array' => ':attribute باید حداقل :value مورد یا بیشتر داشته باشد.',
    ],


    'image' => ':attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخابی نامعتبر است.',
    'in_array' => 'فیلد :attribute در :other وجود ندارد.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'lt' => [
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر از :value کاراکتر داشته باشد.',
        'array' => ':attribute باید کمتر از :value مورد داشته باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کمتر یا مساوی با :value باشد.',
        'file' => ':attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر یا مساوی با :value کاراکتر داشته باشد.',
        'array' => ':attribute نباید بیشتر از :value مورد داشته باشد.',
    ],



    'mac_address' => ':attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بزرگتر از :max کاراکتر باشد.',
        'array' => ':attribute نباید بیشتر از :max مورد داشته باشد.',
    ],
    'mimes' => ':attribute باید یک فایل از نوع :values باشد.',
    'mimetypes' => ':attribute باید یک فایل از نوع :values باشد.',
    'min' => [
        'numeric' => ':attribute باید حداقل :min باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'string' => ':attribute باید حداقل :min کاراکتر داشته باشد.',
        'array' => ':attribute باید حداقل :min مورد داشته باشد.',
    ],

    'multiple_of' => ':attribute باید یک ضریبی از :value باشد.',
    'not_in' => ':attribute انتخابی نامعتبر است.',
    'not_regex' => 'فرمت :attribute نامعتبر است.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'password' => 'رمزعبور اشتباه است.',
    'present' => 'فیلد :attribute باید وجود داشته باشد.',
    'prohibited' => 'فیلد :attribute ممنوع است.',
    'prohibited_if' => 'فیلد :attribute زمانی که :other برابر با :value است، ممنوع است.',
    'prohibited_unless' => 'فیلد :attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => 'فیلد :attribute ممنوع می‌کند که :other حضور داشته باشد.',
    'regex' => 'فرمت :attribute نامعتبر است.',
    'required' => 'فیلد :attribute اجباری است.',
    'required_array_keys' => 'فیلد :attribute باید شامل مقادیر برای: :values باشد.',
    'required_if' => 'فیلد :attribute زمانی که :other برابر با :value است، اجباری است.',
    'required_unless' => 'فیلد :attribute اجباری است مگر اینکه :other در :values باشد.',
    'required_with' => 'فیلد :attribute زمانی که :values وجود دارد، اجباری است.',
    'required_with_all' => 'فیلد :attribute زمانی که :values وجود دارند، اجباری است.',
    'required_without' => 'فیلد :attribute زمانی که :values وجود ندارد، اجباری است.',
    'required_without_all' => 'فیلد :attribute زمانی که هیچ یک از :values وجود ندارند، اجباری است.',
    'same' => ':attribute و :other باید مطابقت داشته باشند.',

    'size' => [
        'numeric' => ':attribute باید :size باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
        'array' => ':attribute باید شامل :size مورد باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از موارد زیر آغاز شود: :values.',
    'string' => ':attribute باید یک رشته باشد.',
    'timezone' => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلاً استفاده شده است.',
    'uploaded' => ':attribute با موفقیت بارگذاری نشد.',
    'url' => ':attribute باید یک URL معتبر باشد.',
    'uuid' => ':attribute باید یک UUID معتبر باشد.',


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
        'name' => 'نام و نام خانوادگی',
        'email' => 'ایمیل',
        'password'=>'رمز عبور',
        'password_confirmation'=>'تکرار رمز عبور',

    ],

];
