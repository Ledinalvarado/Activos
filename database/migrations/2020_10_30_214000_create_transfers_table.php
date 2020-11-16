<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('fecha_traspaso');
            $table->string('descripcion');
            $table->string('observacion');

            $table->unsignedBigInteger('active_id');
            $table->foreign('active_id')->references('id')->on('actives');

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
