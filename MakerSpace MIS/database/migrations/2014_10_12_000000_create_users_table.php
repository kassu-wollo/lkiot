<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->notnullable();
            $table->string('password');
         // Add this line to store user type
            $table->timestamps();
        });
        Schema::create('contact', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('message')->nullable();
        });
        schema::create('report',function(Blueprint $table){
            $table->string('acomp');
            $table->date('rdate');
            $table->string('challenge');
            $table->string('oppo');
            $table->string('nstep');
            $table->date('edate');



        });
        schema::create("makerspace",function(blueprint $table){
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('status');
            $table->string('descrbition');
        });
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('role');
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->string('task');
            $table->string('project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('contact');
    }
};
