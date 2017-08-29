<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTilangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tilangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_tilang')->unique();
            $table->string('nama');
			$table->string('alamat');
			$table->string('ttl');
			$table->string('no_ktp');
			$table->string('umur');
			$table->string('pendidikan');
			$table->string('pekerjaan');
			$table->string('status');
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
        Schema::dropIfExists('tilangs');
    }
}
