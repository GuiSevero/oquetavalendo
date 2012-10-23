<?php

/**
 * Esse é o modelo para a tabela "USER_FUNCTION".
 *
 * Atributos
 * @property integer $id_userFunction
 * @property integer $function
 *
 * Relacionamentos possíveis
 * @property FUNCTIONS $function0
 * @property USER $idUserFunction
 */
class UserFunction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserFunction the static model class
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
		return 'USER_FUNCTION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_userFunction, function', 'required'),
			array('id_userFunction, function', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_userFunction, function', 'safe', 'on'=>'search'),
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
			'Functions' => array(self::BELONGS_TO, 'FUNCTIONS', 'function'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_userFunction' => 'IdUserFunction',
			'function' => 'Função',
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

		$criteria->compare('id_userFunction',$this->id_userFunction);
		$criteria->compare('function',$this->function);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}