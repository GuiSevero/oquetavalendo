<?php

/**
 * Esse é o modelo para a tabela "COMMENT".
 *
 * Atributos
 * @property integer $id_comment
 * @property integer $id_user
 * @property integer $id_event
 * @property string $text
 * @property integer $rating
 *
 * Relacionamentos possíveis
 * @property USER $idUser
 * @property EVENT $idEvent
 */

class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'COMMENT';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_comment, id_user, id_event', 'required'),
			array('id_comment, id_user, id_event, rating', 'numerical', 'integerOnly'=>true),
			array('text', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_comment, id_user, id_event, text, rating', 'safe', 'on'=>'search'),
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
			'Sender' => array(self::BELONGS_TO, 'USER', 'id_user'),
			'Event' => array(self::BELONGS_TO, 'EVENT', 'id_event'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_comment' => 'IdComment',
			'id_user' => 'IdUser',
			'id_event' => 'IdEvent',
			'text' => 'Comentário',
			'rating' => 'Nota',
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

		$criteria->compare('id_comment',$this->id_comment);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('rating',$this->rating);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}