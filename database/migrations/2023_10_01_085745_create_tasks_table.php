<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id')->constrained(); //user_id: 外部キー、usersテーブルへの参照
            $table->string('title');                     // タスクのタイトル
            $table->text('description')->nullable();     //タスクの詳細（text、オプション）
            $table->date('deadline')->nullable();        //期限（date、オプション）
            // $table->enum('status', ['not_started', 'in_progress', 'completed']); //ステータス（未着手、進行中、完了など）
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
        Schema::dropIfExists('tasks');
    }
}
