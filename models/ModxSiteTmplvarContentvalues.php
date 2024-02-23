<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modx_site_tmplvar_contentvalues".
 *
 * @property int $id
 * @property int $tmplvarid
 * @property int $contentid
 * @property string $value
 */
class ModxSiteTmplvarContentvalues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modx_site_tmplvar_contentvalues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tmplvarid', 'contentid'], 'integer'],
            [['value'], 'required'],
            [['value'], 'string'],
            [['tmplvarid', 'contentid'], 'unique', 'targetAttribute' => ['tmplvarid', 'contentid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tmplvarid' => 'Tmplvarid',
            'contentid' => 'Contentid',
            'value' => 'Value',
        ];
    }
}
