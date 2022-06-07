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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('お名前');
            $table->string('name_kana')->nullable()->comment('お名前(フリガナ)');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('phone')->nullable()->comment('電話番号');
            $table->string('title')->nullable()->comment('お問合せ概要');
            $table->text('contents')->nullable()->comment('お問合せ内容');
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
        Schema::dropIfExists('inquiries');
    }
};
