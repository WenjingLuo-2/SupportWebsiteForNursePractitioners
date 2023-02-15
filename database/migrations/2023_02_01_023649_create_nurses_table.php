<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('province');
            $table->string('registration_class');
            $table->string('registration_number');
            $table->boolean('active')->default(false);
            $table->timestamp('effective_from')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->boolean('verified')->default(false);
            $table->foreignUuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurses');
    }
};
