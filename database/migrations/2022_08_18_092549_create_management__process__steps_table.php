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
        Schema::create('management__process__steps', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('process_id');
            $table->string('step_title' , 50);
            $table->boolean('step_status')->default(1);
            $table->integer('step_order_id')->default(1);
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
        Schema::dropIfExists('management__process__steps');
    }
};
