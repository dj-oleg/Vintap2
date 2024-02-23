<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transactions".
 *
 * @property int $id
 * @property string $sample_ids
 * @property int $user_id
 * @property float $paypal_sum
 * @property string $date
 * @property string $status
 * @property string $transaction_id
 * @property string $payer_email
 * @property string $payer_id
 * @property string $full_name
 * @property string $promocode
 * @property string $create_time
 */
class Transactions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sample_ids', 'user_id', 'paypal_sum', 'status', 'transaction_id', 'payer_email', 'payer_id', 'full_name', 'promocode', 'create_time'], 'required'],
            [['user_id'], 'integer'],
            [['paypal_sum'], 'number'],
            [['date'], 'safe'],
            [['sample_ids', 'status', 'transaction_id', 'payer_email', 'payer_id', 'full_name', 'promocode', 'create_time'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sample_ids' => 'Sample Ids',
            'user_id' => 'User ID',
            'paypal_sum' => 'Paypal Sum',
            'date' => 'Date',
            'status' => 'Status',
            'transaction_id' => 'Transaction ID',
            'payer_email' => 'Payer Email',
            'payer_id' => 'Payer ID',
            'full_name' => 'Full Name',
            'promocode' => 'Promocode',
            'create_time' => 'Create Time',
        ];
    }
}
