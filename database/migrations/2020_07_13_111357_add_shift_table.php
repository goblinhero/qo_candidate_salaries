<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table
                ->unsignedInteger('group_id')
                ->nullable();
            $table
                ->unsignedInteger('waiter_id')
                ->nullable();
            $table
                ->dateTime('estimated_start')
                ->nullable();
            $table->dateTime('estimated_end')
                ->nullable();
            $table->dateTime('actual_start')
                ->nullable();
            $table->dateTime('actual_end')
                ->nullable();
            $table->boolean('approved');
            $table->timestamps();

            $table
                ->foreign('group_id')
                ->references('id')
                ->on('groups');

            $table
                ->foreign('waiter_id')
                ->references('id')
                ->on('waiters');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
}
