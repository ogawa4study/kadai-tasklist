<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id')->unsigned()->index();→add_users_id_tableへ
            $table->string('content');
            $table->timestamps();
            
            // //外部キー制約
            // $table->foreign('user_id')->references('id')->on('users');→add_users_id_tableへ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
