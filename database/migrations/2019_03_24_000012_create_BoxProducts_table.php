<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxproductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'BoxProducts';

    /**
     * Run the migrations.
     * @table BoxProducts
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('cantidad')->unsigned();
            $table->string('estado', 1);
            $table->integer('idCaja')->unsigned();
            $table->integer('idProducto')->unsigned();

            $table->index(["idProducto"], 'fk_BoxProducts_Products1_idx');

            $table->index(["idCaja"], 'fk_BoxProducts_Boxes1_idx');


            $table->foreign('idCaja', 'fk_BoxProducts_Boxes1_idx')
                ->references('idCaja')->on('Boxes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idProducto', 'fk_BoxProducts_Products1_idx')
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
