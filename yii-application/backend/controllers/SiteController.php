<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Loginform2;
use backend\models\Details;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

    $session=yii::$app->session;
     $session->open();
        if(!$session['user']['login']){
            $model = new Loginform2();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            $userdata=Details::find()->where(['id'=>yii::$app->user->getId()])->asArray()->all();
            $session['user'] =array(
                "login"=>true,
                "id"=>$userdata[0]['id'],
                "username"=>$userdata[0]['username'],
                "name"=>$userdata[0]['name'],
            );
            return $this->redirect(["site/index"]);
        } 
    }
        else {
            // $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionAdd()
    {
        return hii;
    }
}
