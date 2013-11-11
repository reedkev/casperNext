<?php

/**
 * This is the model class for table "tst_dates".
 *
 * The followings are the available columns in table 'tst_dates':
 * @property integer $id
 * @property integer $test_id
 * @property string $test_date
 * @property integer $max_participants
 * @property string $total_participants
 *
 * The followings are the available model relations:
 * @property Tests $test
 */
class Dates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tst_dates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('test_id, test_date, max_participants, total_participants', 'required'),
			array('test_id, max_participants', 'numerical', 'integerOnly'=>true),
			array('total_participants', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, test_id, test_date, max_participants, total_participants', 'safe', 'on'=>'search'),
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
			'test' => array(self::BELONGS_TO, 'Tests', 'test_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'test_id' => 'Test',
			'test_date' => 'Test Date',
			'max_participants' => 'Max Participants',
			'total_participants' => 'Total Participants',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('test_id',$this->test_id);
		$criteria->compare('test_date',$this->test_date,true);
		$criteria->compare('max_participants',$this->max_participants);
		$criteria->compare('total_participants',$this->total_participants,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
