<?php

namespace app\controllers;

use Yii;
use app\models\About;
use yii\web\Response;
use app\models\Contact;
use app\models\Project;
use yii\web\Controller;
use app\models\FollowMe;
use app\models\Language;
use app\models\Projects;
use app\models\Dashboard;
use app\models\LoginForm;
use app\models\Curriculum;
use app\models\Technology;
use yii\filters\VerbFilter;
use app\models\Technologies;
use app\models\CurriculumJob;
use app\models\FollowMeImage;
use yii\filters\AccessControl;
use app\models\ForeignLanguages;
use app\models\CurriculumEducation;
use app\models\CurriculumLanguages;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
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
    public function actionIndex(/*$Code*/)
    {
        /*$language = Language::Find()->where(['Code' => strtolower($Code)])->one();
        if($language == null){
            $language = Language::Find()->where(['IdLanguage' => 1])->one();
            $aboutModel = new About();
            $technologiesModel = new Technologies();
            $technologyModel = new Technology();
            $projectsModel = new Projects();
            $projectModel = new Project();
            $curriculumModel = new Curriculum();
            $curriculumJobModel = new CurriculumJob();
            $curriculumEducationModel = new CurriculumEducation();
            $curriculumLanguages = new CurriculumLanguages();
            $foreignLanguages = new ForeignLanguages();
            $contactModel = new Contact();
            $followMeModel = new FollowMe();
            $followMeImageModel = new FollowMeImage();
        }*/





        $dashModel = new Dashboard();
        $aboutModel = new About();
        $technologiesModel = new Technologies();
        $projectsModel = new Projects();
        $curriculumModel = new Curriculum();
        $contactModel = new Contact();
        $followMeModel = new FollowMe();


        $AllTechnologies = Technology::find()->all();

        
        $technologyModel = new Technology();
        $projectModel = new Project();
        $curriculumJobModel = new CurriculumJob();
        $curriculumEducationModel = new CurriculumEducation();
        $curriculumLanguages = new CurriculumLanguages();
        $foreignLanguages = new ForeignLanguages();
        $followMeImageModel = new FollowMeImage();


        
        return $this->render('index', [
            'dashModel'=>$dashModel,
            'aboutModel'=>$aboutModel,
            'technologiesModel'=>$technologiesModel,
            'projectsModel'=>$projectsModel,
            'curriculumModel'=>$curriculumModel,
            'contactModel'=>$contactModel,
            'followMeModel'=>$followMeModel,

            'AllTechnologies'=>$AllTechnologies,
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
}
