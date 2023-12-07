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
        Schema::create('car_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('make_model_id')->nullable();
            $table->string('variant_id')->nullable();
            $table->string('manufacturing_year')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('policy_info')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('prev_policy_type')->nullable();
            $table->string('prev_policy_insurer')->nullable();
            $table->string('is_prev_turtlemint')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('car_quotes');
    }
};
