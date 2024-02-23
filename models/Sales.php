<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property int $id
 * @property string $transaction_id_paypal
 * @property string $date
 * @property string|null $promocode
 * @property int $pack_id
 * @property int $buyer_user_id
 * @property int $creator_user_id
 * @property int|null $is_coauthor
 * @property string $status
 * @property float $paypal_sum
 * @property float $price_pack
 * @property float $site_commission_sum
 * @property float $sum_for_author
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaction_id_paypal', 'date', 'pack_id', 'buyer_user_id', 'creator_user_id', 'status', 'paypal_sum', 'price_pack', 'site_commission_sum', 'sum_for_author'], 'required'],
            [['date'], 'safe'],
            [['pack_id', 'buyer_user_id', 'creator_user_id', 'is_coauthor'], 'integer'],
            [['paypal_sum', 'price_pack', 'site_commission_sum', 'sum_for_author'], 'number'],
            [['transaction_id_paypal', 'promocode', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaction_id_paypal' => 'Transaction Id Paypal',
            'date' => 'Date',
            'promocode' => 'Promocode',
            'pack_id' => 'Pack ID',
            'buyer_user_id' => 'Buyer User ID',
            'creator_user_id' => 'Creator User ID',
            'is_coauthor' => 'Is Coauthor',
            'status' => 'Status',
            'paypal_sum' => 'Paypal Sum',
            'price_pack' => 'Price Pack',
            'site_commission_sum' => 'Site Commission Sum',
            'sum_for_author' => 'Sum For Author',
        ];
    }
}
