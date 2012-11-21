<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id = null;
	private $_email = null;
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the email and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// email => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->email]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->email]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}


	/**
	 * 
	 * Autentica o usuário conforme o banco de dados
	 * @return boolean
	 * @property integer $id
 * @property string $name
 * @property string $password
 * @property integer $age
 * @property string $gender
 * @property string $accessToken
 * @property string $photo
	 */
	public function auth()
	{		
			
			//Carrega atributos do usuário
	   		$user = new User();
	   		$user = $user->findByUserName($this->email);
	   					
		
		if($user === null) //Verifica se o email é válido
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($user->password !== md5($this->password)){ //Verifica se o pass é válido

			    $this->errorCode=self::ERROR_PASSWORD_INVALID;
	   			
	   			$this->_name = $user->login;
	   			$this->_id = $user->id;
			}
		else{
				//Login foi bem sucedido
	   			$this->errorCode=self::ERROR_NONE;
	   			   			
	   			//Atribui os atributos
	   			$this->_name = $user->login;
	   			$this->_id = $user->id;
		}

		return !$this->errorCode;
	}

	
	/**
	 * 
	 * Retorna o nome do usuário
	 * @return string $username
	 */
	
	public function getName(){
		return ($this->_name == null) ? $this->email : $this->_email;
	}
	/**
	 * 
	 * Retorna o nome do usuário
	 * @return string $id
	 */
	public function getId(){
		return ($this->_id != null) ? $this->_id : $this->email;	
	}

}