<?php

/**
 * This is the model class for table "tests".
 *
 * The followings are the available columns in table 'tests':
 * @property integer $id
 * @property integer $course_id
 * @property string $name
 * @property string $description
 * @property string $type
 * @property integer $time_overall
 * @property string $time_page_default
 * @property integer $allowed_attempts
 * @property integer $prerequisite
 * @property integer $antirequisite
 *
 * The followings are the available model relations:
 * @property Audit[] $audits
 * @property Helpdesk[] $helpdesks
 * @property MarkerAssignment[] $markerAssignments
 * @property Pages[] $pages
 * @property Courses $course
 * @property TstDates[] $tstDates
 * @property TstExceptions[] $tstExceptions
 */
class Tests extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tests';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, time_overall, time_page_default', 'required'),
			array('course_id, time_overall, allowed_attempts, prerequisite, antirequisite', 'numerical', 'integerOnly'=>true),
			array('name, type', 'length', 'max'=>45),
			array('description', 'length', 'max'=>255),
			array('time_page_default', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, course_id, name, description, type, time_overall, time_page_default, allowed_attempts, prerequisite, antirequisite', 'safe', 'on'=>'search'),
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
			'audits' => array(self::HAS_MANY, 'Audit', 'test_id'),
			'helpdesks' => array(self::HAS_MANY, 'Helpdesk', 'test_id'),
			'markerAssignments' => array(self::HAS_MANY, 'MarkerAssignment', 'test_id'),
			'pages' => array(self::HAS_MANY, 'Pages', 'test_id'),
			'course' => array(self::BELONGS_TO, 'Courses', 'course_id'),
			'tstDates' => array(self::HAS_MANY, 'TstDates', 'test_id'),
			'tstExceptions' => array(self::HAS_MANY, 'TstExceptions', 'test_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'course_id' => 'Course',
			'name' => 'Name',
			'description' => 'Description',
			'type' => 'Type',
			'time_overall' => 'Time Overall',
			'time_page_default' => 'Time Page Default',
			'allowed_attempts' => 'Allowed Attempts',
			'prerequisite' => 'Prerequisite',
			'antirequisite' => 'Antirequisite',
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
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('time_overall',$this->time_overall);
		$criteria->compare('time_page_default',$this->time_page_default,true);
		$criteria->compare('allowed_attempts',$this->allowed_attempts);
		$criteria->compare('prerequisite',$this->prerequisite);
		$criteria->compare('antirequisite',$this->antirequisite);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tests the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
