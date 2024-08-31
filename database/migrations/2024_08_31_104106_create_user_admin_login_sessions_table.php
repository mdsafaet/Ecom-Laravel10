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
        Schema::create('user_admin_login_sessions', function (Blueprint $table) {
            $table->id();

            $table->string('sl')->nullable()->index();
            $table->string('device')->nullable()->index();
            $table->longText('accestoken')->nullable()->index();
            $table->timestamp('timelimit')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_admin_login_sessions');
    }
};
