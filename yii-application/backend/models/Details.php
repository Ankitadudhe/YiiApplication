<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "details".
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 */
class Details extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password'], 'required'],
            [['name', 'username', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
    public function getId()
    {
        return $this->getPrimaryKey();
    }
}
