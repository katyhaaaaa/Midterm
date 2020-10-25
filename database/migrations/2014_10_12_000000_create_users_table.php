<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('lname',255);
            $table->string('fname',255);
            $table->string('address',255);
            $table->string('phone',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->timestamp('created_at')->useCurrent();;
            $table->timestamp('updated_at')->useCurrent();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
