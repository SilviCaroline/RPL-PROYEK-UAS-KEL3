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
    Schema::create('members', function (Blueprint $table) {

    $table->id();

    $table->string('member_code')->unique();

    $table->string('name');

    $table->string('email')->unique();

    $table->string('password');

    $table->enum(
        'role',
        [
            'anggota',
            'pustakawan',
            'admin'
        ]
    )->default('anggota');

    $table->string('phone')->nullable();

    $table->text('address')->nullable();

    $table->enum(
        'status',
        [
            'Aktif',
            'Nonaktif'
        ]
    )->default('Aktif');

    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
