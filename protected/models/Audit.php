<?php

/**
 * This is the model class for table "audit".
 *
 * The followings are the available columns in table 'audit':
 * @property integer $id
 * @property integer $uid
 * @property string $event
 * @property integer $course_id
 * @property integer $test_id
 * @property integer $page_id
 * @property integer $time_started
 * @property integer $time_finished
 * @property integer $time_elapsed
 * @property string $browser
 * @property string $browser_version
 * @property string $ip_address
 *
 * The followings are the available model relations:
 * @property Courses $course
 * @property Pages $page
 * @property Tests $test
 */
class Audit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'audit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('test_id, page_id', 'required'),
			array('uid, course_id, test_id, page_id, time_started, time_finished, time_elapsed', 'numerical', 'integerOnly'=>true),
			array('event, browser_version, ip_address', 'length', 'max'=>45),
			array('browser', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, event, course_id, test_id, page_id, time_started, time_finished, time_elapsed, browser, browser_version, ip_address', 'safe', 'on'=>'search'),
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
			'event' => 'Event',
			'course_id' => 'Course',
			'test_id' => 'Test',
			'page_id' => 'Page',
			'time_started' => 'Time Started',
			'time_finished' => 'Time Finished',
			'time_elapsed' => 'Time Elapsed',
			'browser' => 'Browser',
			'browser_version' => 'Browser Version',
			'ip_address' => 'Ip Address',
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
		$criteria->compare('event',$this->event,true);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('test_id',$this->test_id);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('time_started',$this->time_started);
		$criteria->compare('time_finished',$this->time_finished);
		$criteria->compare('time_elapsed',$this->time_elapsed);
		$criteria->compare('browser',$this->browser,true);
		$criteria->compare('browser_version',$this->browser_version,true);
		$criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Audit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
