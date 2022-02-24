<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('district');
            $table->string('ward');
            $table->string('sheet');
            $table->string('pol'); //parcel of land
            $table->string('coordinate')->nullable();
            $table->text('expertCmt')->nullable();
            $table->text('hodCmt')->nullable();
            $table->string('documentStatus');
            $table->bigInteger('expertID')->nullable();
            $table->bigInteger('hodID')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
