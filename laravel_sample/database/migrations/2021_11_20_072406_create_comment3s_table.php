<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComment3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');/*->constrained('users')
            ->reference('name')->on('user_name')
            ->onDelete('cascade');*/
            $table->text('chat');
            $table->timestamps();
            $table->foreignId('post_id');//->constrained('post2s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment3s');
    }
}
