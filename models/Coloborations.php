<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coloborations".
 *
 * @property int $id
 * @property int $id_pack
 * @property int $id_user_owner
 * @property int $id_user_coloborant
 */
class Coloborations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coloborations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pack', 'id_user_owner', 'id_user_coloborant'], 'required'],
            [['id_pack', 'id_user_owner', 'id_user_coloborant'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pack' => 'Id Pack',
            'id_user_owner' => 'Id User Owner',
            'id_user_coloborant' => 'Id User Coloborant',
        ];
    }
}
