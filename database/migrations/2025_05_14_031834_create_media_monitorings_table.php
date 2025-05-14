<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('media_monitoring', function (Blueprint $table) {
            $table->id('id_media');
            $table->enum('status', ['positive', 'negative', 'neutral']);
            $table->text('kesimpulan');
            $table->string('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_monitoring');
    }
};