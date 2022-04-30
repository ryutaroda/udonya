<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('店舗名');
            $table->string('post_code')->nullable()->comment('郵便番号');
            $table->foreignId('prefecture_id')->comment('都道府県ID')->constrained();
            $table->string('address1')->nullable()->comment('住所１');
            $table->string('address2')->nullable()->comment('住所２');
            $table->string('address3')->nullable()->comment('住所３');
            $table->string('shop_image_path')->nullable()->comment('店舗イメージpath');
            $table->string('udon_image_path')->nullable()->comment('うどんイメージpath');
            $table->string('menu_image_path')->nullable()->comment('MENUイメージpath');
            $table->string('min_charge')->nullable()->comment('最低料金');
            $table->string('regular_holiday')->nullable()->comment('定休日');
            $table->text('business_hours')->nullable()->comment('営業時間');
            $table->string('payment_method')->nullable()->comment('支払方法');
            $table->text('payment_detail')->nullable()->comment('支払方法詳細');
            $table->string('parking_info')->nullable()->comment('駐車場情報');
            $table->string('seat_spaces')->nullable()->comment('座席数');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('hp_link')->nullable()->comment('ホームページリンク');
            $table->boolean('has_tatami_room')->nullable()->comment('座敷の有無');
            $table->boolean('has_private_room')->nullable()->comment('個室の有無');
            $table->foreignId('create_user_id')->nullable()->comment('登録者ID')->constrained('users')->nullOnDelete();
            $table->foreignId('update_user_id')->nullable()->comment('更新者ID')->constrained('users')->nullOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
