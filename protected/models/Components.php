<?php

/**
 * This is the model class for table "components".
 *
 * The followings are the available columns in table 'components':
 * @property integer $id
 * @property integer $page_id
 * @property integer $cmp_id
 * @property integer $type
 * @property string $lable
 * @property string $layout_position
 * @property string $order
 *
 * The followings are the available model relations:
 * @property CmpVideos $cmp
 * @property Pages $page
 */
class Components extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'components';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cmp_id, type, order', 'required'),
			array('page_id, cmp_id, type', 'numerical', 'integerOnly'=>true),
			array('lable, layout_position', 'length', 'max'=>45),
			array('order', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, page_id, cmp_id, type, lable, layout_position, order', 'safe', 'on'=>'search'),
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
			'cmp' => array(self::BELONGS_TO, 'CmpVideos', 'cmp_id'),
			'page' => array(self::BELONGS_TO, 'Pages', 'page_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'page_id' => 'Page',
			'cmp_id' => 'Cmp',
			'type' => 'Type',
			'lable' => 'Lable',
			'layout_position' => 'Layout Position',
			'order' => 'Order',
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
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('cmp_id',$this->cmp_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('lable',$this->lable,true);
		$criteria->compare('layout_position',$this->layout_position,true);
		$criteria->compare('order',$this->order,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Components the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
