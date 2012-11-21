<?php

/**
 * Esse é o modelo para a tabela "USER".
 *
 * Atributos
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property integer $age
 * @property string $gender
 * @property string $accessToken
 * @property string $photo
 * @property string $email
 *
 * Relacionamentos possíveis
 * @property COMMENT[] $cOMMENTs
 * @property EVENT[] $eVENTs
 * @property USERFUNCTION $uSERFUNCTION
 */
class User extends CActiveRecord
{
	public $passwordConfirm;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'USER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('password', 'length', 'max'=>8),
			array('gender', 'length', 'max'=>1),
			array('accessToken, photo', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, password, age, gender, accessToken, photo', 'safe', 'on'=>'search'),
			//array('password', 'compare', 'compareAttribute' => 'passwordConfirm')
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Comments' => array(self::HAS_MANY, 'COMMENT', 'id_user'),
			'Events' => array(self::MANY_MANY, 'EVENT', 'USER_EVENT(id_user, id_event)'),
			'Function' => array(self::HAS_ONE, 'USERFUNCTION', 'id_userFunction'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => 'Nome',
			'password' => 'Senha',
			'age' => 'Idade',
			'gender' => 'Sexo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('accessToken',$this->accessToken,true);
		$criteria->compare('photo',$this->photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}