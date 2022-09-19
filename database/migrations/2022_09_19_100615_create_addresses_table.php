<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('userId')->index();
            $table->string('title');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('zipCode');
            $table->string('city');
            $table->string('country');
            $table->timestamp('deletedAt')->nullable();
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
