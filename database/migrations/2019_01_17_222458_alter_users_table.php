<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni', 9)->nullable(false)->after('updated_at');
            $table->string('database_host', 50)->nullable(false);
            $table->string('database_user', 50)->nullable(false);
            $table->string('database_password', 50)->nullable(false);
            $table->integer('users_roles_id')->nullable(false);
            $table->integer('users_groups_id')->nullable(false);
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
            $table->dropColumn('dni');
            $table->dropColumn('database_host');
            $table->dropColumn('database_user');
            $table->dropColumn('database_password');
            $table->dropColumn('users_roles_id');
            $table->dropColumn('users_groups_id');
        });
    }
}
