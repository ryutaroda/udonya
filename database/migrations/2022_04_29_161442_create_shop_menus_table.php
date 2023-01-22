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
        Schema::create('shop_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->comment('p')->constrained()->cascadeOnDelete();
            $table->string('name')->comment('商品名');
            $table->string('price')->nullable()->comment('値段');
            $table->string('image_path')->comment('イメージパス');
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
        Schema::dropIfExists('shop_menus');
    }
};
