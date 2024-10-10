<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the task
            $table->text('description')->nullable(); // Description of the task
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending'); // Task status
            $table->date('due_date')->nullable(); // Due date for the task
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
