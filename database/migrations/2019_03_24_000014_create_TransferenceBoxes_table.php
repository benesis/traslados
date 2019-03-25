<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferenceboxesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'TransferenceBoxes';

    /**
     * Run the migrations.
     * @table TransferenceBoxes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('idTraslado')->unsigned();
            $table->integer('idCaja')->unsigned();

            $table->index(["idCaja"], 'fk_caja_traslado_idCaja');

            $table->index(["idTraslado"], 'fk_caja_traslado_idTraslado');


            $table->foreign('idCaja', 'fk_caja_traslado_idCaja')
                ->references('idCaja')->on('Boxes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idTraslado', 'fk_caja_traslado_idTraslado')
                ->references('idTraslado')->on('Transferences')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
