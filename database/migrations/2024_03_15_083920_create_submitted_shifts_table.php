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
        Schema::create('submitted_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->date('DesireWorkingDate');
            $table->time('DesireStartTime');
            $table->time('DesireEndTime');
            $table->text('remarks');
            $table->date('StartPeriod');
            $table->date('EndPeriod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submitted_shifts');
    }
};
