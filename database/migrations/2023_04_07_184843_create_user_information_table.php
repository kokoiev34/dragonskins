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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("birth_date")->nullable();
            $table->string("birth_month")->nullable();
            $table->string("birth_year")->nullable();
            $table->string("street_name")->nullable();
            $table->integer("street_number")->nullable();
            $table->integer("zip")->nullable();
            $table->string("city")->nullable();
            $table->string("country")->nullable();
            $table->boolean("is_send_notification")->nullable()->default(0);
            $table->string("steam_account")->nullable();
            $table->string("social_account")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->timestamps();


            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
