@if (session('flash_message'))
    <div class="js-hide_flash_message pt-4 px-4 sm:px-6 lg:px-8">
        <div class="w-full p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">{{ session('flash_message') }}</span>
        </div>
    </div>
@endif

{{--@if($errors->all())--}}
{{--    <div class="js-hide_alert_message pt-4 px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="w-full p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--            <li class="font-medium">{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}

<script>
    (function() {
        'use strict';
        // フラッシュメッセージのfadeout
        $(function(){
            $('.js-hide_flash_message').fadeOut(3000);
        });

    })();
</script>
