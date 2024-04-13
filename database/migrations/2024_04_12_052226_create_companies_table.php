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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->unsignedBigInteger("city_id")->nullable();
            $table->unsignedBigInteger("state_id")->nullable();
            $table->unsignedBigInteger("country_id")->nullable();
            $table->string("post_code")->nullable();
            $table->string("phone");
            $table->string("email");
            $table->string("logo")->nullable();
            $table->text("description")->nullable();
            $table->unsignedBigInteger("created_by")->nullable();
            $table->unsignedBigInteger("updated_by")->nullable();
            $table->unsignedBigInteger("deleted_by")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
