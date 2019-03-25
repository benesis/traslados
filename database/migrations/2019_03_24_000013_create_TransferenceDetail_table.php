<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferencedetailTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'TransferenceDetail';

    /**
     * Run the migrations.
     * @table TransferenceDetail
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idTrasladoDetalle');
            $table->integer('idTraslado')->unsigned();
            $table->integer('idCaja')->nullable()->unsigned();
            $table->integer('idProducto')->nullable()->unsigned();
            $table->integer('cantidadProducto')->unsigned();
            $table->string('estado', 1);

            $table->index(["idTraslado"], 'fk_TrasladosDetalle_Traslados1_idx');

            $table->index(["idCaja"], 'fk_TrasladosDetalle_Cajas1_idx');

            $table->index(["idProducto"], 'fk_TrasladosDetalle_Productos1_idx');


            $table->foreign('idTraslado', 'fk_TrasladosDetalle_Traslados1_idx')
                ->references('idTraslado')->on('Transferences')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idCaja', 'fk_TrasladosDetalle_Cajas1_idx')
                ->references('idCaja')->on('Boxes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idProducto', 'fk_TrasladosDetalle_Productos1_idx')
                ->references('idProducto')->on('Products')
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
