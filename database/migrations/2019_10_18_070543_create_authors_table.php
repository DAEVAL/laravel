<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Blueprint 타입 힌트
         * create 함수의 두번째 인자는 callback 함수
         * callback 함수가 인자로 받는 $table이 Illuminate/Database/Schema/Blueprint Class의 인스턴스여야 한다고 강제하는 것이다.
         */
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255);
            $table->string('password', 60);
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
        Schema::dropIfExists('authors');
    }
}
