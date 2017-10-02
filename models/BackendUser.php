<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Backend_User".
 *
 * @property string $User_ID
 * @property string $FirstName
 * @property string $LastName
 * @property string $User_Name
 * @property string $Password
 * @property string $authKey
 * @property string $Last_Login
 */
class BackendUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Backend_User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'username', 'password'], 'required'],
            [['lastLogin'], 'safe'],
            [['firstName', 'lastName', 'authKey'], 'string', 'max' => 50],
            [['username', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'usermame' => 'User Name',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'lastLogin' => 'Last  Login',
        ];
    }
    
    /**
     * From code-epicenter.com
     */
   	
    public static function findIdentity($id){
		return static::findOne($id);
	}
 
	public static function findIdentityByAccessToken($token, $type = null){
		throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
	}
 
	public function getId(){
		return $this->id;
	}
 
	public function getAuthKey(){
		return $this->authKey;//Here I return a value of my authKey column
	}
 
	public function validateAuthKey($authKey){
		return $this->authKey === $authKey;
	}
	public static function findByUsername($username){
		return self::findOne(['username'=>$username]);
	}
 
	public function validatePassword($password){
		return $this->password === $password;
	} 
}
