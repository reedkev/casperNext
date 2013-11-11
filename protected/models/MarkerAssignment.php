<?php

/**
 * This is the model class for table "marker_assignment".
 *
 * The followings are the available columns in table 'marker_assignment':
 * @property integer $id
 * @property integer $uid
 * @property integer $course_id
 * @property integer $test_id
 * @property integer $page_id
 * @property integer $answer_id
 * @property integer $complete
 *
 * The followings are the available model relations:
 * @property Users $u
 * @property Answers $answer
 * @property Courses $course
 * @property Pages $page
 * @property Tests $test
 */
class MarkerAssignment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marker_assignment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, answer_id', 'required'),
			array('uid, course_id, test_id, page_id, answer_id, complete', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, course_id, test_id, page_id, answer_id, complete', 'safe', 'on'=>'search'),
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
			'u' => array(self::BELONGS_TO, 'Users', 'uid'),
			'answer' => array(self::BELONGS_TO, 'Answers', 'answer_id'),
			'course' => array(self::BELONGS_TO, 'Courses', 'course_id'),
			'page' => array(self::BELONGS_TO, 'Pages', 'page_id'),
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
			'uid' => 'Uid',
			'course_id' => 'Course',
			'test_id' => 'Test',
			'page_id' => 'Page',
			'answer_id' => 'Answer',
			'complete' => 'Complete',
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
		$criteria->compare('uid',$this->uid);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('test_id',$this->test_id);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('answer_id',$this->answer_id);
		$criteria->compare('complete',$this->complete);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MarkerAssignment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
