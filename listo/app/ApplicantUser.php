<?php

namespace App;
use App\Notifications\UserApplicantResetPasswordNotification;

class ApplicantUser extends User
{
	protected $table = "applicant_users";

    protected $fillable = [
        'name', 'email', 'password',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];

	/**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserApplicantResetPasswordNotification($token));
    }

}
