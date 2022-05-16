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
        Schema::create('news_items', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('content')->nullable();
            $table->text('link')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('author')->nullable();
            $table->string('source')->nullable();
            $table->string('pub_date')->nullable();
            $table->string('updated_date')->nullable();
            $table->string('category')->nullable();
            $table->string('get_image_url')->nullable();
            $table->boolean('is_read')->default(0);
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
        Schema::dropIfExists('news_items');
    }
};
