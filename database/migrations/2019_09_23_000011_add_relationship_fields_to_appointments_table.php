<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedInteger('client_id');

            $table->foreign('client_id', 'client_fk_378176')->references('id')->on('clients');

            $table->unsignedInteger('employee_id')->nullable();

            $table->foreign('employee_id', 'employee_fk_378177')->references('id')->on('employees');

            $table->unsignedInteger('services_id')->nullable();

            $table->foreign('services_id', 'services_fk_378182')->references('id')->on('services');
        });
    }
}
