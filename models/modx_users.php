<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modx_users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $cachepwd
 * @property string $class_key
 * @property int $active
 * @property string|null $remote_key
 * @property string|null $remote_data
 * @property string $hash_class
 * @property string $salt
 * @property int $primary_group
 * @property string|null $session_stale
 * @property int $sudo
 * @property int $createdon
 * @property string|null $access_token
 * @property string|null $auth_key
 * @property int|null $count_like
 * @property int|null $terms_of_use
 */
class modx_users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modx_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active', 'primary_group', 'sudo', 'createdon', 'count_like', 'terms_of_use'], 'integer'],
            [['remote_data', 'session_stale'], 'string'],
            [['username', 'class_key', 'hash_class', 'salt'], 'string', 'max' => 100],
            [['password', 'cachepwd'], 'string', 'max' => 255],
            [['remote_key'], 'string', 'max' => 191],
            [['access_token', 'auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'cachepwd' => 'Cachepwd',
            'class_key' => 'Class Key',
            'active' => 'Active',
            'remote_key' => 'Remote Key',
            'remote_data' => 'Remote Data',
            'hash_class' => 'Hash Class',
            'salt' => 'Salt',
            'primary_group' => 'Primary Group',
            'session_stale' => 'Session Stale',
            'sudo' => 'Sudo',
            'createdon' => 'Createdon',
            'access_token' => 'Access Token',
            'auth_key' => 'Auth Key',
            'count_like' => 'Count Like',
            'terms_of_use' => 'Terms Of Use',
        ];
    }
    public function getAttribut()
    {
        return $this->hasOne(ModxUserAttributes::class, ['internalKey' => 'id']);
    }
}
