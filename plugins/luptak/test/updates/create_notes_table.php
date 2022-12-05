<?php namespace Luptak\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('luptak_test_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('meno');
            $table->string('bydlisko');
            $table->string('Vek');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('luptak_test_notes');
    }
}
