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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('ユーザーID')->constrained()->cascadeOnDelete();
            $table->string('icon_path')->nullable()->comment('アイコン画像パス');
            $table->tinyInteger('gender')->default(0)->comment('性別');
            $table->date('birthday')->nullable()->comment('誕生日');
            $table->text('like_shops')->nullable()->comment('好きなうどん屋');
            $table->text('many_times_shops')->nullable()->comment('行きつけのうどん屋');
            $table->text('profile')->nullable()->comment('自己紹介');
            $table->string('url')->nullable()->comment('リンク');
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
        Schema::dropIfExists('user_profiles');
    }
};
