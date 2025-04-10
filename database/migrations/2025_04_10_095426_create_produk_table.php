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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk'); // otomatis unsignedBigInteger + auto increment + primary key
            $table->string('nama', 255);
            $table->string('url', 255);
            $table->string('deskripsi', 1024);
            $table->string('foto', 255);
            $table->enum('tipe', ['pdf', 'ppt', 'pptx', 'video', 'image']);
            $table->enum('kategori', ['zoom_background', 'buku', 'template_presentasi','logo', 'dsb']);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};

