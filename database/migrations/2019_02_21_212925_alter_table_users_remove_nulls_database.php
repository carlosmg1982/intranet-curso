<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsersRemoveNullsDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('database_host')->nullable(true)->change();
            $table->string('database_user')->nullable(true)->change();
            $table->string('database_password')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('database_host')->nullable(false)->change();
            $table->string('database_user')->nullable(false)->change();
            $table->string('database_password')->nullable(false)->change();
        });
    }
}
