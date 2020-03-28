<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('company_type_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('spokesperson')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('designation')->nullable();
            $table->boolean('is_spokesperson_available')->nullable();
            $table->string('website')->nullable();
            $table->string('note')->nullable();
            $table->boolean('is_client')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
