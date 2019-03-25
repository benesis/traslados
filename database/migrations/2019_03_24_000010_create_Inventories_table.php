<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Inventories';

    /**
     * Run the migrations.
     * @table Inventories
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idInventario');
            $table->integer('idSucursal')->unsigned();
            $table->integer('idProducto')->unsigned();
            $table->integer('idTipoMovimiento')->unsigned();
            $table->integer('idTraslado')->nullable()->unsigned();

            $table->index(["idProducto"], 'fk_Inventario_Productos1_idx');

            $table->index(["idTipoMovimiento"], 'fk_Inventario_TipoMovimiento1_idx');

            $table->index(["idSucursal"], 'fk_Inventario_sucursal1_idx');

            $table->index(["idTraslado"], 'fk_Inventario_traslado1_idx');


            $table->foreign('idSucursal', 'fk_Inventario_sucursal1_idx')
                ->references('idSucursal')->on('Agencies')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idProducto', 'fk_Inventario_Productos1_idx')
                ->references('idProducto')->on('Products')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idTipoMovimiento', 'fk_Inventario_TipoMovimiento1_idx')
                ->references('idTipoMovimiento')->on('MovementTypes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idTraslado', 'fk_Inventario_traslado1_idx')
                ->references('idTraslado')->on('Transferences')
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
