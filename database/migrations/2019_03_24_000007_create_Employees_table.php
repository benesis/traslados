<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Employees';

    /**
     * Run the migrations.
     * @table Employees
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEmpleado');
            $table->string('nombreCompleto', 100);
            $table->string('numeroIdentidad', 13);
            $table->string('email', 50);
            $table->string('contrasena');
            $table->string('estado', 1)->default('A');
            $table->integer('idTipoEmpleado')->unsigned();

            //$table->index(["idTipoEmpleado"], 'fk_Employees_EmployeeTypes1_idx');


            $table->foreign('idTipoEmpleado', 'fk_Employees_EmployeeTypes1_idx')
                ->references('idTipoEmpleado')->on('EmployeeTypes')
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
