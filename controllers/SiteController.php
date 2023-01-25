<?php

namespace app\controllers;

use app\models\Portfolio;
use app\models\LoginForm;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

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
    public function actionIndex()
    {
        return $this->thisIndex('en_us');
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex2($Code)
    {  
        return $this->thisIndex($Code);
    }

    private function thisIndex($Code){
        $Portfolio = Portfolio::find()->where('LanguageCode like "%'.$Code.'%"')->one();
        
        $AllPortfolios = null;

        if(!$Portfolio){
            $Portfolio = Portfolio::find()->where('LanguageCode like "%en_us%"')->one();
        }
        if(!$Portfolio){
            $Portfolio = Portfolio::find()->where('LanguageCode like "%??_??%"')->one();
        }else{
            $AllPortfolios = Portfolio::find()->where('LanguageCode not like "%??_??%"')->orderBy("Language")->all();
        }
    
        if($AllPortfolios){
            $num = 0;
            foreach($AllPortfolios as $Port){
                $this->view->params['Language'][$num]['Code'] = $Port->LanguageCode;
                $this->view->params['Language'][$num]['Name'] = $Port->Language;
                $num++;
            }
        }else{
            $this->view->params['Language'] = null;
        }

        $Projects = $Portfolio->projects;
        $Technologies = $Portfolio->technologies;
        $CurriculumJobs = $Portfolio->curriculumJobs;
        $CurriculumEducations = $Portfolio->curriculumEducations;
        $CurriculumLanguages = $Portfolio->curriculumLanguages;
        $FollowImages = $Portfolio->followMeImages;
        $this->view->params['SelectedLang'] = $Portfolio->LanguageCode;
        $this->view->params['Start'] = $Portfolio->HeaderStart;
        $this->view->params['About'] = $Portfolio->STAbout;
        $this->view->params['Technologies'] = $Portfolio->STTechnologies;
        $this->view->params['Name'] = $Portfolio->HeaderName;
        $this->view->params['Projects'] = $Portfolio->STProjects;
        $this->view->params['Curriculum'] = $Portfolio->STCurriculum;
        $this->view->params['Contact'] = $Portfolio->STContact;
        

        return $this->render('index', [
            'Portfolio' => $Portfolio,
            'Projects' => $Projects,
            'Technologies' => $Technologies,
            'CurriculumJobs' => $CurriculumJobs,
            'CurriculumEducations' => $CurriculumEducations,
            'CurriculumLanguages' => $CurriculumLanguages,
            'FollowImages' => $FollowImages,
            'Technologies' => $Technologies,
        ]);    
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionCreate(/*$Code*/)
    {
        // For the future (so that i don't have to use migrations to add my own data)
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
