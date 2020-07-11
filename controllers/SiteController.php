<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Admins;

class SiteController extends Controller
{
    public $username;
    public $position;
    public $contacts;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
     * Admin action.
     *
     * @return string
     */
    public function actionAdmin()
    {
        $this->layout = 'login';

        $model = new LoginForm();
        $admins = new Admins();

        Yii::$app->view->title = 'Админ Панель';
        
        if (!Yii::$app->user->isGuest) {
            $this->layout = '@app/views/layouts/admin';

            $user = Yii::$app->user;

            $this->username = $user->identity->fullName();
            $this->position = $user->identity->userInfo();
            
            return $this->render('@app/modules/admin/views/default/index', ['model' => $model]);
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->layout = '@app/views/layouts/admin';
            $user = Yii::$app->user;
            $profile = new Admins();

            $this->username = $user->identity->fullName();
            $this->position = $user->identity->userInfo();

            return $this->render('@app/modules/admin/views/default/index', ['profile' => $profile]);
        }
        return $this->render('admin', [
            'model' => $model, 'users' => $admins
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'pages';

        \Yii::$app->view->title = 'About';

        return $this->render('about');
    }

    public function actionServices()
    {
        $this->layout = 'pages';

        \Yii::$app->view->title = 'Services';

        return $this->render('services');
    }

    public function actionProjects()
    {
        $this->layout = 'pages';

        \Yii::$app->view->title = 'Projects';

        return $this->render('projects');
    }

    public function actionNews()
    {
        $this->layout = 'pages';

        \Yii::$app->view->title = 'News';

        return $this->render('news');
    }

    public function actionContact()
    {
        $this->layout = 'contact';

        return $this->render('contact');
    }
}
