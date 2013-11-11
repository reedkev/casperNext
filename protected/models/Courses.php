<?php

/**
 * This is the model class for table "courses".
 *
 * The followings are the available columns in table 'courses':
 * @property integer $id
 * @property integer $group_id
 * @property string $course_id
 * @property string $name
 * @property string $description
 * @property string $faculty
 * @property integer $allowed_attempts_default
 * @property integer $allowed_test_count
 *
 * The followings are the available model relations:
 * @property Audit[] $audits
 * @property Groups $group
 * @property Helpdesk[] $helpdesks
 * @property MarkerAssignment[] $markerAssignments
 * @property Tests[] $tests
 */
class Courses extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'courses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id', 'required'),
			array('group_id, allowed_attempts_default, allowed_test_count', 'numerical', 'integerOnly'=>true),
			array('course_id', 'length', 'max'=>30),
			array('name', 'length', 'max'=>255),
			array('faculty', 'length', 'max'=>60),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group_id, course_id, name, description, faculty, allowed_attempts_default, allowed_test_count', 'safe', 'on'=>'search'),
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
			'audits' => array(self::HAS_MANY, 'Audit', 'course_id'),
			'group' => array(self::BELONGS_TO, 'Groups', 'group_id'),
			'helpdesks' => array(self::HAS_MANY, 'Helpdesk', 'course_id'),
			'markerAssignments' => array(self::HAS_MANY, 'MarkerAssignment', 'course_id'),
			'tests' => array(self::HAS_MANY, 'Tests', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_id' => 'Institution',
			'course_id' => 'Course',
			'name' => 'Name',
			'description' => 'Description',
			'faculty' => 'Faculty',
			'allowed_attempts_default' => 'Allowed Attempts Default',
			'allowed_test_count' => 'Allowed Test Count',
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
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('course_id',$this->course_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('faculty',$this->faculty,true);
		$criteria->compare('allowed_attempts_default',$this->allowed_attempts_default);
		$criteria->compare('allowed_test_count',$this->allowed_test_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Courses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
