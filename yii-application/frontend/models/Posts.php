<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $category
 * @property string $action
 */
class Posts extends \yii\db\ActiveRecord
{
    public $discription;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'category', 'action'], 'required'],
            [['title', 'description', 'category', 'action'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'category' => 'Category',
            'action' => 'Action',
        ];
    }
    public function getrecord(){
        
        $user=(new \yii\db\Query())
        ->select('*')
        ->from('posts')
        // ->where(['id'=>$id])
        ->all();
        return $user;
    }
    public function getid(){
        $user=(new \yii\db\Query())
        ->select('id')
        ->from('posts')
        // ->where(['id'=>$id])
        ->one();
        return $user;
    }
    public function gettitle(){
        $user=(new \yii\db\Query())
        ->select('title')
        ->from('posts')
        // ->where(['id'=>$id])
        ->one();
        return $user;
    }
}
