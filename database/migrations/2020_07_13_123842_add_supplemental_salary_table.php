<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSupplementalSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplemental_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table
                ->unsignedInteger('group_id')
                ->nullable();
            $table->string('description');
            $table->integer('hourly_supplement');
            $table->timestamps();

            $table
                ->foreign('group_id')
                ->references('id')
                ->on('groups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplemental_salaries');
    }
}
