<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property integer $test_id
 * @property string $name
 * @property string $description
 * @property integer $time_default
 * @property string $layout
 * @property integer $order
 * @property integer $next_page_id
 *
 * The followings are the available model relations:
 * @property Audit[] $audits
 * @property Components[] $components
 * @property Helpdesk[] $helpdesks
 * @property MarkerAssignment[] $markerAssignments
 * @property Tests $test
 */
class Pages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('test_id, name, time_default, order', 'required'),
			array('test_id, time_default, order, next_page_id', 'numerical', 'integerOnly'=>true),
			array('name, layout', 'length', 'max'=>45),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, test_id, name, description, time_default, layout, order, next_page_id', 'safe', 'on'=>'search'),
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
			'audits' => array(self::HAS_MANY, 'Audit', 'page_id'),
			'components' => array(self::HAS_MANY, 'Components', 'page_id'),
			'helpdesks' => array(self::HAS_MANY, 'Helpdesk', 'page_id'),
			'markerAssignments' => array(self::HAS_MANY, 'MarkerAssignment', 'page_id'),
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
			'name' => 'Name',
			'description' => 'Description',
			'time_default' => 'Time Default',
			'layout' => 'Layout',
			'order' => 'Order',
			'next_page_id' => 'Next Page',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('time_default',$this->time_default);
		$criteria->compare('layout',$this->layout,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('next_page_id',$this->next_page_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
