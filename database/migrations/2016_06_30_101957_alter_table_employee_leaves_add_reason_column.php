<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableEmployeeLeavesAddReasonColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::table('employee_leaves', function(Blueprint $table)
        {
            if(!Schema::hasColumn('employee_leaves', 'reason'))
            {
                $table->date('reason')->after('status');
            }


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
