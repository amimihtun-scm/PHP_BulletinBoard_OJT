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
            $table->bigIncrements('id')->comment('Id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->text('password');
            $table->string('profile', 255)->comment('Profile Photo');
            $table->string('type', 1)->default('1')->comment('0:admin, 1:user');
            $table->string('phone', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->date('dob')->nullable()->comment('Date of Birth');
            $table->integer('create_user_id');
            $table->integer('updated_user_id');
            $table->integer('deleted_user_id')->nullable();
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
            $table->string('remember_token')->default('1');
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
    }
};
