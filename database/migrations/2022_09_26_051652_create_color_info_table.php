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
        //  Schema::dropIfExists('color_info');
        Schema::create('color_info', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);

            $table->string('product_id');
            $table->string('product_category');
            $table->double('amount', 8, 2);
            $table->boolean('is_active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_info');
    }
};
