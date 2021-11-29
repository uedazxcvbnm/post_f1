<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            /*$table->foreignId('user_id')
            ->reference('name')->on('user_name')
            ->onDelete('cascade');
            $table->text('comment');*/
            //$table->foreignID('post_id')->constrained('post2s');
            $table->timestamps();
            //$table->foreignId('post_id')->constrained('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
