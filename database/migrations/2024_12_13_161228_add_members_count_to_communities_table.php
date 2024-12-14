<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMembersCountToCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->unsignedInteger('members_count')->default(0);
        });
    }

    public function down()
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->dropColumn('members_count');
        });
    }
}
