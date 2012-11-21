<?php

/**
 * Esse é o modelo para a tabela "EVENT".
 *
 * Atributos
 * @property string $title
 * @property integer $id_event
 * @property integer $numberGirls
 * @property integer $numberMen
 * @property string $description
 * @property integer $id_place
 * @property string $date_time
 * @property double $priceMan
 * @property double $priceGirl
 * @property double $consumableMan
 * @property double $consumableGirl
 * @property integer $priority
 * @property integer $type
 *
 * Relacionamentos possíveis
 * @property COMMENT[] $cOMMENTs
 * @property EVENTTYPE $type0
 * @property PLACES $idPlace
 * @property USER[] $uSERs
 */
class Event extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Event the static model class
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
		return 'EVENT';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_place, type', 'required'),
			array('id_event, numberGirls, numberMen, id_place, priority, type', 'numerical', 'integerOnly'=>true),
			array('priceMan, priceGirl, consumableMan, consumableGirl', 'numerical'),
			array('title, description, date_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('title, id_event, numberGirls, numberMen, description, id_place, date_time, priceMan, priceGirl, consumableMan, consumableGirl, priority, type', 'safe', 'on'=>'search'),
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
			'Comments' => array(self::HAS_MANY, 'COMMENT', 'id_event'),
			'Type' => array(self::BELONGS_TO, 'EVENTTYPE', 'type'),
			'Place' => array(self::BELONGS_TO, 'PLACES', 'id_place'),
			'Users' => array(self::MANY_MANY, 'USER', 'USER_EVENT(id_event, id_user)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'numberGirls' => 'Número de Mulheres',
			'numberMen' => 'Número de Homens',
			'description' => 'Descrição',
			'id_place' => 'IdPlace',
			'date_time' => 'Data e hora',
			'priceMan' => 'Preço Masculino',
			'priceGirl' => 'Preço Feminino',
			'consumableMan' => 'Consumação Masculino',
			'consumableGirl' => 'Consumação Feminino',
			'type' => 'Tipo',
			'title' => 'Titulo'
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

		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('numberGirls',$this->numberGirls);
		$criteria->compare('numberMen',$this->numberMen);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('id_place',$this->id_place);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('priceMan',$this->priceMan);
		$criteria->compare('priceGirl',$this->priceGirl);
		$criteria->compare('consumableMan',$this->consumableMan);
		$criteria->compare('consumableGirl',$this->consumableGirl);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('type',$this->type);
		$criteria->compare('title',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}