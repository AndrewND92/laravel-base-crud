<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table -> string('firstname', 64);
            $table -> string('lastname', 64);

            $table -> string('username', 64) -> unique();

            $table -> date('birthDay');
            $table -> text('bio');

            $table -> decimal('salary',8,2);

            $table -> integer('rating');

            $table -> boolean('fired') -> default(false);


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
        Schema::dropIfExists('employees');
    }
}
