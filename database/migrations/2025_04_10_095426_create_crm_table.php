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
        Schema::create('crm', function (Blueprint $table) {
            $table->bigIncrements('id_crm'); // Diubah menjadi bigIncrements
            $table->unsignedBigInteger('id_user');
            $table->string('alasan')->nullable();
            $table->string('unit')->nullable();
            $table->string('email')->nullable();
            $table->string('nama')->nullable();
            $table->string('npk')->nullable();
            $table->string('divisi')->nullable();
            $table->string('telepon')->nullable();
            $table->timestamps();
        
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm');
    }
};
