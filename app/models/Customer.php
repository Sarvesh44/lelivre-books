<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Confide\ConfideUser;

class Customer extends ConfideUser implements UserInterface, RemindableInterface {
	/*protected $fillable = ['id','title','author','body'];
	protected $table = "l4_posts";

	public $timestamps = false;

*/
	//protected $fillable = ['firstname','lastname','email','dob','username','password'];
	protected $primaryKey = 'username';
	protected $table = "customer";
	protected $guarded = array();
	public $timestamps = false;
	protected $hidden = array('password');

        public function getUserByUsername( $username )
        {
            return $this->where('username', '=', $username)->first();
        }


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
     * Validation rules
     */
 
    public static $rules = array(
        'email' => 'required|email',
        'password' => 'required|between:4,11|confirmed',
        'username' => 'required|unique:customer',
        'firstname' => 'required',
        'lastname' => 'required',
        'dob' => 'required',
    );

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}


}