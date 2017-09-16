<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsAndContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
			$table->string("name",50);
            $table->timestamps();
        });
		
		Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("group_id")->unassign()->default(0);
			$table->foreign("group_id")->reference("id")->on("groups")->onDelete("cascade");
			$table->string("name",100);
			$table->string("company",80);
			$table->string("email",50);
			$table->string("phone",50);
			$table->string("address",150);
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
		Schema::dropIfExists('contacts');
        Schema::dropIfExists('groups');
    }
}
