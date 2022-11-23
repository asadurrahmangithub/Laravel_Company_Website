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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('filter_button')->nullable(false);
            $table->string('title_name')->nullable(true);
            $table->string('subtitle_name')->nullable(true);
            $table->string('category_name')->nullable(true);
            $table->string('client_name')->nullable(true);
            $table->date('project_date')->nullable(true);
            $table->string('project_url')->nullable(true);
            $table->text('description')->nullable(true);
            $table->text('image1')->nullable(false);
            $table->text('image2')->nullable(true);
            $table->text('image3')->nullable(true);
            $table->tinyInteger('publication_status')->default(1);
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
        Schema::dropIfExists('portfolios');
    }
};
