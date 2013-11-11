<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $alternate_id1
 * @property string $alternate_id2
 * @property string $salt
 * @property integer $active
 *
 * The followings are the available model relations:
 * @property Answers[] $answers
 * @property Helpdesk[] $helpdesks
 * @property MarkerAssignment[] $markerAssignments
 * @property Marks[] $marks
 * @property TstExceptions[] $tstExceptions
 * @property UserGroups[] $userGroups
 */
class Users extends CActiveRecord
{

 	public $new_password;
  	public $new_password_repeat;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active', 'numerical', 'integerOnly'=>true),
			array('username, password, first_name, last_name, email, alternate_id1, alternate_id2, salt', 'length', 'max'=>45),
			array('email', 'length', 'max'=>60),
			array('email', 'unique'),
			//array('email', 'email'),
			array('username', 'unique', 'attributeName'=> 'username', 'caseSensitive' => 'false'),
			// The following rule is used by search().
			array('id, username, password, first_name, last_name, email, alternate_id1, alternate_id2, salt, active', 'safe', 'on'=>'search'),
			// logic for changing password
			array('new_password', 'length', 'max'=>45, 'min'=>2),

    		array('new_password', 'compare', 'on'=>'insert, changePassword'),
    		array('new_password_repeat', 'safe'),
    		// password is required on initial record creation
    		array('new_password, new_password_repeat', 'required', 'on'=>'insert'),
			//array('active', 'value' => '($data->refund == 0) ? "Yes" : "No"'),

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
			'answers' => array(self::HAS_MANY, 'Answers', 'uid'),
			'helpdesks' => array(self::HAS_MANY, 'Helpdesk', 'uid'),
			'markerAssignments' => array(self::HAS_MANY, 'MarkerAssignment', 'uid'),
			'marks' => array(self::HAS_MANY, 'Marks', 'uid'),
			'tstExceptions' => array(self::HAS_MANY, 'TstExceptions', 'uid'),
			'userGroups' => array(self::HAS_MANY, 'UserGroups', 'uid'),	
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'alternate_id1' => 'Alternate Id1',
			'alternate_id2' => 'Alternate Id2',
			'salt' => 'Salt',
			'active' => 'Active',
			'Institution' => 'Institution',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('alternate_id1',$this->alternate_id1,true);
		$criteria->compare('alternate_id2',$this->alternate_id2,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('active',$this->active);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	// hash password
	public function hashPassword($password, $salt)
	{
	    return md5($salt.$password);
	}
        
	// password validation
	public function validatePassword($password)
	{
	    return $this->hashPassword($password,$this->salt)===$this->password;
	}
	        
//generate $salt
	public function generateSalt()
	{
	    return uniqid('',true);
	}
	        
	public function beforeValidate()
	{
	    $this->salt = $this->generateSalt();
	    return parent::beforeValidate();
	}
	        
	public function beforeSave()
	{
	    $this->password = $this->hashPassword($this->new_password, $this->salt);
	    return parent::beforeSave();
	}


}
