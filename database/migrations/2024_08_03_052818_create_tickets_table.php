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
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid();
            $table->string('sender_name')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('subject');
            $table->text('content');
            $table->enum('status', ['Opened', 'Waiting', 'Closed'])->default('Opened');
            $table->enum('priority', ['Low', 'Medium', 'High'])->default('Low');
            $table->string('assigned_to')->nullable();
            $table->string('workspace_id');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
