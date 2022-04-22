<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTrain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_train', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('azienda', 50);
            $table->string('stazionePartenza', 50);
            $table->string('stazioneArrivo', 50);
            $table->dateTime('orarioPartenza');
            $table->dateTime('orarioArrivo');
            $table->smallInteger('codiceTreno');
            $table->smallInteger('numCarrozze');
            $table->boolean('inOrario');
            $table->boolean('cancellato');
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
        Schema::dropIfExists('users_train');
    }
}
