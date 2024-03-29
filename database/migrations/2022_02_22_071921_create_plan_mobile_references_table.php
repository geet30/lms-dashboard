<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanMobileReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_mobile_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->integer('s_no')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            // $table->tinyInteger('linktype')->comment('1 = url, 2 = file')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
            $table->foreign('plan_id')->references('id')->on('plans_mobile')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_mobile_references');
    }
}
