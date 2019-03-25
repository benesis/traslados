<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciemanagerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'AgencieManager';

    /**
     * Run the migrations.
     * @table AgencieManager
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idJefe');
            $table->integer('idSucursal')->unsigned();
            $table->integer('idEmpleado')->unsigned();

            $table->index(["idSucursal"], 'fk_AgencieManager_Agencies1_idx');

            $table->index(["idEmpleado"], 'fk_AgencieManager_Employees1_idx');


            $table->foreign('idSucursal', 'fk_AgencieManager_Agencies1_idx')
                ->references('idSucursal')->on('Agencies')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idEmpleado', 'fk_AgencieManager_Employees1_idx')
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
