<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestructureStewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stewards', function (Blueprint $table) {
            $table->string('level')->after('department');
            $table->text('bible_passage')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stewards', function (Blueprint $table) {
            $table->string('bible_passage')->change();
            $table->dropColumn('level');
        });
    }
}
