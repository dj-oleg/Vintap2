<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modx_user_attributes".
 *
 * @property int $id
 * @property int $internalKey
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $mobilephone
 * @property int $blocked
 * @property int $blockeduntil
 * @property int $blockedafter
 * @property int $logincount
 * @property int $lastlogin
 * @property int $thislogin
 * @property int $failedlogincount
 * @property string $sessionid
 * @property int $dob
 * @property int $gender
 * @property string $address
 * @property string $country
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $fax
 * @property string $photo
 * @property string $comment
 * @property string $website
 * @property string|null $extended
 */
class ModxUserAttributes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modx_user_attributes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['internalKey', 'address', 'comment'], 'required'],
            [['internalKey', 'blocked', 'blockeduntil', 'blockedafter', 'logincount', 'lastlogin', 'thislogin', 'failedlogincount', 'dob', 'gender'], 'integer'],
            [['address', 'comment', 'extended'], 'string'],
            [['fullname', 'email', 'phone', 'mobilephone', 'sessionid', 'fax'], 'string', 'max' => 100],
            [['country', 'city', 'photo', 'website'], 'string', 'max' => 255],
            [['state', 'zip'], 'string', 'max' => 25],
            [['internalKey'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'internalKey' => 'Internal Key',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'phone' => 'Phone',
            'mobilephone' => 'Mobilephone',
            'blocked' => 'Blocked',
            'blockeduntil' => 'Blockeduntil',
            'blockedafter' => 'Blockedafter',
            'logincount' => 'Logincount',
            'lastlogin' => 'Lastlogin',
            'thislogin' => 'Thislogin',
            'failedlogincount' => 'Failedlogincount',
            'sessionid' => 'Sessionid',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'address' => 'Address',
            'country' => 'Country',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'fax' => 'Fax',
            'photo' => 'Photo',
            'comment' => 'Comment',
            'website' => 'Website',
            'extended' => 'Extended',
        ];
    }
}
