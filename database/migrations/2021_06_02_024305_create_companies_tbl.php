<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('postcode',20);
            $table->string('address',255);
            $table->string('tel',20);
            $table->string('representative_name',100);
            $table->string('industry',100);
            $table->string('bill_name',100);
            $table->string('bill_postcode',20);
            $table->string('bill_address',255);
            $table->string('bill_tel',20);
            $table->integer('created_user_id');
            $table->integer('updated_user_id');
            $table->integer('deleted_user_id');
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
