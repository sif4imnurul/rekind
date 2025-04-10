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
        Schema::create('client_data', function (Blueprint $table) {
            $table->bigIncrements('id_client_data'); 
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->enum('status_project', ['current', 'past', 'potential']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_data');
    }
};
