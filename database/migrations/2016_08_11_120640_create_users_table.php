<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('用户的主键id');
            $table->string('username',255)->comment('用户名');
            $table->string('password',255)->comment('用户密码');
            $table->string('email',255)->comment('用户邮箱');
            $table->string('pic',255)->comment('用户头像');
            $table->string('token',255);
            $table->tinyInteger('status')->comment('状态');
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
        Schema::drop('users');
    }
}
