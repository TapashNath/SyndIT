<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role_id')->default(0);
            $table->string('token')->nullable();
            $table->string('status')->default(1);
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        DB::table('admins')->insert(array(
            'name' => 'Administrator',
            'email' => 'debnathtapash56@gmail.com',
            'password' => Hash::make('admin123'),
            'remember_token' => '1234512d1c2f4ds3zc2132',
            'role_id' => '1'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
