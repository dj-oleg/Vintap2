<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use Yii;
//use app\modules\admin\models\ModxUsers;
//use app\models\User;

class User extends modx_users implements IdentityInterface
{

  public static function tableName()
   {
       return 'modx_users';
   }

   public static function findIdentity($id)
   {
       return static::findOne($id);
   }

   public static function findIdentityByAccessToken($token, $type = null)
   {
       $session = Yii::$app->session;
       $session->open();
       if(!isset($session['modx_users'])) return static::findOne(['access_token'=>$token]);
      // return static::findOne(['access_token'=>$token]);
   }

   public static function findByUsername($username)
   {
       return static::findOne(['username'=>$username]);
   }

   public function getId()
   {
       return $this->id;
   }

   public function getAuthKey()
   {//авторизация через куки
       $session = Yii::$app->session;
       $session->open();
       if(!isset($session['modx_users']))
       return $this->auth_key;
   }

   public function validateAuthKey($authKey)
   {
       $session = Yii::$app->session;
       $session->open();
       if(!isset($session['modx_users']))
       return $this->auth_key === $authKey;
   }

   public function validatePassword($password)
   {
       return $this->password === md5($password);
   }

    public function beforeSave($insert)
   {
       if (parent::beforeSave($insert)) {
           if ($this->isNewRecord) {
               $this->auth_key = \Yii::$app->security->generateRandomString();
           }
           return true;
       }
       return false;
   }
    /*public static  function tableName() {
       $session = Yii::$app->session;
       $session->open();
       if(isset($session['modx_users'])) $table = 'modx_users'; else $table = 'user';
        //$table = (isset($_REQUEST['modx_users'])) ? (int)$_REQUEST['modx_users'] : 1;
        return $table;
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        $session = Yii::$app->session;
        $session->open();
        if(!isset($session['modx_users'])) return static::findOne(['access_token'=>$token]);
       // return static::findOne(['access_token'=>$token]);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username'=>$username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {//авторизация через куки
        $session = Yii::$app->session;
        $session->open();
        if(!isset($session['modx_users']))
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        $session = Yii::$app->session;
        $session->open();
        if(!isset($session['modx_users']))
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }

     public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }*/
}
