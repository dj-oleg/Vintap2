<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modx_site_tmplvars".
 *
 * @property int $id
 * @property int $source
 * @property int $property_preprocess
 * @property string $type
 * @property string $name
 * @property string $caption
 * @property string $description
 * @property int $editor_type
 * @property int $category
 * @property int $locked
 * @property string|null $elements
 * @property int $rank
 * @property string $display
 * @property string|null $default_text
 * @property string|null $properties
 * @property string|null $input_properties
 * @property string|null $output_properties
 * @property int $static
 * @property string $static_file
 */
class ModxSiteTmplvars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modx_site_tmplvars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source', 'property_preprocess', 'editor_type', 'category', 'locked', 'rank', 'static'], 'integer'],
            [['elements', 'default_text', 'properties', 'input_properties', 'output_properties'], 'string'],
            [['type', 'display'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 50],
            [['caption'], 'string', 'max' => 80],
            [['description', 'static_file'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source' => 'Source',
            'property_preprocess' => 'Property Preprocess',
            'type' => 'Type',
            'name' => 'Name',
            'caption' => 'Caption',
            'description' => 'Description',
            'editor_type' => 'Editor Type',
            'category' => 'Category',
            'locked' => 'Locked',
            'elements' => 'Elements',
            'rank' => 'Rank',
            'display' => 'Display',
            'default_text' => 'Default Text',
            'properties' => 'Properties',
            'input_properties' => 'Input Properties',
            'output_properties' => 'Output Properties',
            'static' => 'Static',
            'static_file' => 'Static File',
        ];
    }
}
