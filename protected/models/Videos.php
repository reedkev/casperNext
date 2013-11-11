<?php

/**
 * This is the model class for table "cmp_videos".
 *
 * The followings are the available columns in table 'cmp_videos':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $filename
 * @property string $path
 * @property string $boiler_plate
 * @property string $anxiety_timer
 * @property integer $controlls_enabled
 * @property integer $restart_on_refresh
 */
class Videos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cmp_videos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('controlls_enabled, restart_on_refresh', 'numerical', 'integerOnly'=>true),
			array('name, description, filename, path, boiler_plate, anxiety_timer', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, filename, path, boiler_plate, anxiety_timer, controlls_enabled, restart_on_refresh', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'filename' => 'Filename',
			'path' => 'Path',
			'boiler_plate' => 'Boiler Plate',
			'anxiety_timer' => 'Anxiety Timer',
			'controlls_enabled' => 'Controlls Enabled',
			'restart_on_refresh' => 'Restart On Refresh',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('boiler_plate',$this->boiler_plate,true);
		$criteria->compare('anxiety_timer',$this->anxiety_timer,true);
		$criteria->compare('controlls_enabled',$this->controlls_enabled);
		$criteria->compare('restart_on_refresh',$this->restart_on_refresh);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Videos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
