<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('model_karyawans', function (Blueprint $table) {
                $table->string('nik');
                $table->string('nama');
                $table->string('jenis_kelamin');
                $table->string('tempat_lahir');
                $table->string('tanggal_lahir');
                $table->string('telepon');
                $table->string('jabatan');
                $table->string('department');
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
        Schema::dropIfExists('model_karyawans');
    }
}
