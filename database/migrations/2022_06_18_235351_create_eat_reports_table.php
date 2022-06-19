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
        Schema::create('eat_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('ユーザーID')->constrained()->cascadeOnDelete();
            $table->foreignId('shop_id')->comment('店舗ID')->constrained()->cascadeOnDelete();
            $table->date('visit_date')->comment('訪問日');
            $table->string('path')->nullable()->comment('画像パス');
            $table->text('contents')->nullable()->comment('内容');
            $table->boolean('is_public')->default(true)->comment('公開中フラグ');
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
        Schema::dropIfExists('eat_reports');
    }
};
