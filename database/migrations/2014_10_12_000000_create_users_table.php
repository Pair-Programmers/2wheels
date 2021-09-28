<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type');
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('no_of_post_bike')->default(0);
            $table->integer('no_of_post_product')->default(0);
            $table->string('image')->default('user_profile.png');
            $table->string('phone');
            $table->string('address');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'ABC',
        'email' => 'admin@gmail.com',
        'phone' => '123123123',
        'type' => 'Admin',
        'profile_image' => 'abc.jpg',
        'date_of_birth' => '2021-01-01',
        'address' => 'asd',
        'password' => 'admin']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
