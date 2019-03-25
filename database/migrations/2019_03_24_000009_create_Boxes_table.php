<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Boxes';

    /**
     * Run the migrations.
     * @table Boxes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idCaja');
            $table->string('descripcion', 200)->nullable()->default(null);
            $table->timestamp('fechaHoraCierre');
            $table->integer('idEmpleado')->unsigned();

            $table->index(["idEmpleado"], 'fk_Boxes_Employees1_idx');


            $table->foreign('idEmpleado', 'fk_Boxes_Employees1_idx')
                ->references('idEmpleado')->on('Employees')
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
