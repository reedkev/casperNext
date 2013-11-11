<?php

/**
 * This is the model class for table "qst_order_of_pref_answers".
 *
 * The followings are the available columns in table 'qst_order_of_pref_answers':
 * @property integer $id
 * @property integer $order_of_pref_id
 * @property string $answer_text
 * @property integer $order_no
 *
 * The followings are the available model relations:
 * @property OrderOfPref $orderOfPref
 */
class OrderOfPrefAnswers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'qst_order_of_pref_answers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_of_pref_id, order_no', 'numerical', 'integerOnly'=>true),
			array('answer_text', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, order_of_pref_id, answer_text, order_no', 'safe', 'on'=>'search'),
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
			'orderOfPref' => array(self::BELONGS_TO, 'OrderOfPref', 'order_of_pref_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order_of_pref_id' => 'Order Of Pref',
			'answer_text' => 'Answer Text',
			'order_no' => 'Order No',
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
		$criteria->compare('order_of_pref_id',$this->order_of_pref_id);
		$criteria->compare('answer_text',$this->answer_text,true);
		$criteria->compare('order_no',$this->order_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderOfPrefAnswers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
