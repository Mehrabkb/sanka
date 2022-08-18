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
        Schema::create('management__table__fields', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('table_id')->unsigned();
            $table->string('field_mean' , 500);
            $table->string('field_name' , 50);
            $table->integer('type_id')->unsigned();
            $table->integer('connection_table_id')->unsigned()->default(0);
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
        Schema::dropIfExists('management__table__fields');
    }
};
