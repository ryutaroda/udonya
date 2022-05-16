<x-site-layout>
    <div class="p-shopDetail">
        <div class="p-shopDetail__head">
            <div class="p-shopDetail__headShopName">
                {{ $shop->name }}
            </div>
            <div class="p-shopDetail__headAddress">
                〒{{ $shop->post_code }}{{ ' ' }}{{ $shop->prefecture->name }}{{ ' ' }}{{ $shop->address1 }}{{ $shop->address2 }}{{ $shop->address3 }}
            </div>
            <div class="p-shopDetail__headShopImage">
                <img src="{{ Illuminate\Support\Facades\Storage::url($shop->shop_image_path) }}" alt="店舗イメージ">
            </div>
        </div>

        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">食べたうどん</h3>
            </div>
            <div class="p-shopDetail__specBody">

            </div>
        </div>

        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">営業時間</h3>
            </div>
            <div class="p-shopDetail__specBody">
                <p class="p-shopDetail__specBodyText">{{ $shop->business_hours }}</p>
            </div>
        </div>
        <div class="p-shopDetail__spec">
            <div class="p-shopDetail__specTitle p-shopDetail__specTitle--square">
                <h3 class="p-shopDetail__specTitleString">支払方法</h3>
            </div>
            <div class="p-shopDetail__specBody">
                <p class="p-shopDetail__specBodyText">{{ $shop->payment_detail }}</p>
            </div>
        </div>

    </div>


</x-site-layout>
