<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableRemoveFks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_users_roles_id_foreign');
            $table->integer('users_roles_id')->nullable(true)->change();
            $table->integer('users_roles_id')->unsigned()->change();
            $table->integer('users_groups_id')->nullable(true)->change();
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
            $table->integer('users_roles_id')->nullable(false)->change();
            $table->integer('users_roles_id')->unsigned()->change();
            $table->foreign('users_roles_id')
                ->references('id')->on('users_roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('users_groups_id')->nullable(false)->change();
        });
    }
}
