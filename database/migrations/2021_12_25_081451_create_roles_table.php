<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('permission')->nullable();
            $table->boolean('active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('roles')->insert(array(
            'name' => 'Administrator',
            'permission' => '["createFeedback","updateFeedback","viewFeedback","deleteFeedback","createSystemUser","updateSystemUser","viewSystemUser","deleteSystemUser","createUser","updateUser","viewUser","deleteUser","createSupport","updateSupport","viewSupport","deleteSupport","createSettings","updateSettings","viewSettings","deleteSettings","createSurvey","updateSurvey","viewSurvey","deleteSurvey","createNotification","updateNotification","viewNotification","deleteNotification"]'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
