<?php

/**
 * Esse é o modelo para a tabela "PLACES".
 *
 * Atributos
 * @property integer $id_place
 * @property string $name
 * @property double $cordX
 * @property double $cordY
 * @property string $address
 * @property integer $number
 * @property integer $secondNumber
 * @property integer $phone
 * @property string $mail
 *
 * Relacionamentos possíveis
 * @property EVENT[] $eVENTs
 */
class Places extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Places the static model class
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
		return 'PLACES';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_place', 'required'),
			array('id_place, number, secondNumber, phone', 'numerical', 'integerOnly'=>true),
			array('cordX, cordY', 'numerical'),
			array('name, mail', 'length', 'max'=>50),
			array('address', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_place, name, cordX, cordY, address, number, secondNumber, phone, mail', 'safe', 'on'=>'search'),
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
			'Events' => array(self::HAS_MANY, 'EVENT', 'id_place'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => 'Nome',
			'address' => 'Endereço',
			'number' => 'Número',
			'secondNumber' => 'Complemento',
			'phone' => 'Telefone',
			'mail' => 'E-Mail',
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

		$criteria->compare('id_place',$this->id_place);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cordX',$this->cordX);
		$criteria->compare('cordY',$this->cordY);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('number',$this->number);
		$criteria->compare('secondNumber',$this->secondNumber);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('mail',$this->mail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}