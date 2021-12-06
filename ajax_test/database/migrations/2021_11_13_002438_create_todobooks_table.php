<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodobooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //本を読む優先順位の番号 ３つめ public function の中に全角の空白を入れたので、エラーになった
    public function up()
    {
        Schema::create('todobooks', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->integer('book_priority');
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
        Schema::dropIfExists('todobooks');
    }
}
