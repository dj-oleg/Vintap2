<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transactions_sellers".
 *
 * @property int $id
 * @property string|null $sample_id
 * @property int $user_id
 * @property float|null $paypal_sum
 * @property string $date
 * @property string|null $transaction_id
 * @property string|null $promocode
 */
class TransactionsSellers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transactions_sellers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['paypal_sum'], 'number'],
            [['date'], 'safe'],
            [['sample_id', 'transaction_id', 'promocode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sample_id' => 'Sample ID',
            'user_id' => 'User ID',
            'paypal_sum' => 'Paypal Sum',
            'date' => 'Date',
            'transaction_id' => 'Transaction ID',
            'promocode' => 'Promocode',
        ];
    }
}
