<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('employee_id');
            $table->integer('nik');
            $table->string('name')->nullable();
            $table->string('grade')->nullable();
            $table->string('position')->nullable();
            $table->string('department_code')->nullable();
            $table->string('department')->nullable();
            $table->string('division_code')->nullable();
            $table->string('division')->nullable();
            $table->string('group_code')->nullable();
            $table->string('group')->nullable();
            $table->string('chief_code')->nullable();
            $table->string('chief')->nullable();
            $table->dateTime('date_year_service')->nullable();
            $table->dateTime('date_start_work')->nullable();
            $table->dateTime('date_entry')->nullable();
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
        Schema::dropIfExists('history_employees');
    }
}
