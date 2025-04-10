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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('id_agenda'); 
            $table->string('nama_agenda', 255);
            $table->unsignedBigInteger('id_user'); 
            $table->enum('status', ['selesai', 'proses', 'pending']);
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_deadline');
            $table->enum('prioritas', ['tinggi', 'sedang', 'rendah']);
            $table->string('catatan', 255)->nullable();
            $table->timestamps();  
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};