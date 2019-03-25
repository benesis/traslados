<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferencesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Transferences';

    /**
     * Run the migrations.
     * @table Transferences
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idTraslado');
            $table->integer('idSucursalOrigen')->unsigned();
            $table->integer('idSucursalDestino')->unsigned();
            $table->timestamp('fechaHoraSalida');
            $table->timestamp('fechaHoraLlegada');
            $table->string('estado', 1);
            $table->integer('idTransporte')->unsigned();
            $table->integer('idTipoMovimiento')->unsigned();

            $table->index(["idSucursalDestino"], 'fk_sucursal_destino');

            $table->index(["idSucursalOrigen"], 'fk_sucursal_origen');

            $table->index(["idTipoMovimiento"], 'fk_traslado_TipoMovimiento1_idx');

            $table->index(["idTransporte"], 'fk_traslado_transporte');


            $table->foreign('idSucursalDestino', 'fk_sucursal_destino')
                ->references('idSucursal')->on('Agencies')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idSucursalOrigen', 'fk_sucursal_origen')
                ->references('idSucursal')->on('Agencies')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idTransporte', 'fk_traslado_transporte')
                ->references('idTransporte')->on('Transports')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idTipoMovimiento', 'fk_traslado_TipoMovimiento1_idx')
                ->references('idTipoMovimiento')->on('MovementTypes')
                ->onDelete('no action')
                ->onUpdate('no action');
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
