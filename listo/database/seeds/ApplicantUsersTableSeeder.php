<?php

use Illuminate\Database\Seeder;
use App\ApplicantUser;

class ApplicantUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new ApplicantUser();
    	$user->name = "Erick";
    	$user->email = "businessKodi@gmail.com";
    	$user->password = bcrypt("secret");
    	$user->save();
    }
}
