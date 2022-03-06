<?php

namespace Database\Seeders;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PredefinedDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $setting = json_encode(array(['is_version_check' => "on", 'min_version' => '1.0.0', "max_version" => '1.0.5']));
        $data = [
            ['name' => 'Terms & Condition', 'value' => 'Terms & Condition'],
            ['name' => 'App Setting', 'value' => $setting],
            ['name' => 'Privacy & Policy', 'value' => 'Privacy & Policy'],
            ['name' => 'About us', 'value' => 'About us'],
            ['name' => 'Contact us', 'value' => 'Contact us']
        ];
        Setting::insert($data);

        DB::table('notifications_settings')->insert([
            'serverKey' => '0',
            'senderId' => '0',
            'apiKey' => '0',
            'authDomain' => '0',
            'projectId' => '0',
            'appId' => '0',
            'measurementId' => '0',
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrator',
            'permission' => '["createFeedback","updateFeedback","viewFeedback","deleteFeedback","createSystemUser","updateSystemUser","viewSystemUser","deleteSystemUser","createUser","updateUser","viewUser","deleteUser","createSupport","updateSupport","viewSupport","deleteSupport","createSettings","updateSettings","viewSettings","deleteSettings","createSurvey","updateSurvey","viewSurvey","deleteSurvey","createNotification","updateNotification","viewNotification","deleteNotification"]',
            'active' => '1',
        ]);


    }
}
