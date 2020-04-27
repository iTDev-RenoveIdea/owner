<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->bigInteger('application_id')->unsigned()->index();
            $table->timestamps();
        });


        Schema::table('domains', function (Blueprint $table) {
            $table->foreign('application_id', 'alias_application_id_foreign')
                ->references('id')
                ->on('applications')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domains');
    }
}