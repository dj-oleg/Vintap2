<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modx_site_content".
 *
 * @property int $id
 * @property string $type
 * @property string $pagetitle
 * @property string $longtitle
 * @property string $description
 * @property string|null $alias
 * @property string $link_attributes
 * @property int $published
 * @property int $pub_date
 * @property int $unpub_date
 * @property int $parent
 * @property int $isfolder
 * @property string|null $introtext
 * @property string|null $content
 * @property int $richtext
 * @property int $template
 * @property int $menuindex
 * @property int $searchable
 * @property int $cacheable
 * @property int $createdby
 * @property int $createdon
 * @property int $editedby
 * @property int $editedon
 * @property int $deleted
 * @property int $deletedon
 * @property int $deletedby
 * @property int $publishedon
 * @property int $publishedby
 * @property string $menutitle
 * @property int $donthit
 * @property int $privateweb
 * @property int $privatemgr
 * @property int $content_dispo
 * @property int $hidemenu
 * @property string $class_key
 * @property string $context_key
 * @property int $content_type
 * @property string|null $uri
 * @property int $uri_override
 * @property int $hide_children_in_tree
 * @property int $show_in_tree
 * @property string|null $properties
 * @property int $alias_visible
 */
class ModxSiteContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modx_site_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description', 'introtext', 'content', 'uri', 'properties'], 'string'],
            [['published', 'pub_date', 'unpub_date', 'parent', 'isfolder', 'richtext', 'template', 'menuindex', 'searchable', 'cacheable', 'createdby', 'createdon', 'editedby', 'editedon', 'deleted', 'deletedon', 'deletedby', 'publishedon', 'publishedby', 'donthit', 'privateweb', 'privatemgr', 'content_dispo', 'hidemenu', 'content_type', 'uri_override', 'hide_children_in_tree', 'show_in_tree', 'alias_visible'], 'integer'],
            [['type'], 'string', 'max' => 20],
            [['pagetitle', 'longtitle', 'alias'], 'string', 'max' => 191],
            [['link_attributes', 'menutitle'], 'string', 'max' => 255],
            [['class_key', 'context_key'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'pagetitle' => 'Pagetitle',
            'longtitle' => 'Longtitle',
            'description' => 'Description',
            'alias' => 'Alias',
            'link_attributes' => 'Link Attributes',
            'published' => 'Published',
            'pub_date' => 'Pub Date',
            'unpub_date' => 'Unpub Date',
            'parent' => 'Parent',
            'isfolder' => 'Isfolder',
            'introtext' => 'Introtext',
            'content' => 'Content',
            'richtext' => 'Richtext',
            'template' => 'Template',
            'menuindex' => 'Menuindex',
            'searchable' => 'Searchable',
            'cacheable' => 'Cacheable',
            'createdby' => 'Createdby',
            'createdon' => 'Createdon',
            'editedby' => 'Editedby',
            'editedon' => 'Editedon',
            'deleted' => 'Deleted',
            'deletedon' => 'Deletedon',
            'deletedby' => 'Deletedby',
            'publishedon' => 'Publishedon',
            'publishedby' => 'Publishedby',
            'menutitle' => 'Menutitle',
            'donthit' => 'Donthit',
            'privateweb' => 'Privateweb',
            'privatemgr' => 'Privatemgr',
            'content_dispo' => 'Content Dispo',
            'hidemenu' => 'Hidemenu',
            'class_key' => 'Class Key',
            'context_key' => 'Context Key',
            'content_type' => 'Content Type',
            'uri' => 'Uri',
            'uri_override' => 'Uri Override',
            'hide_children_in_tree' => 'Hide Children In Tree',
            'show_in_tree' => 'Show In Tree',
            'properties' => 'Properties',
            'alias_visible' => 'Alias Visible',
        ];
    }

    public function getTmplvarcontentvalues()
    {
        return $this->hasMany(ModxSiteTmplvarContentvalues::class, ['contentid' => 'id']);
    }
}
