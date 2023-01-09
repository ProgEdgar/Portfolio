<?php

namespace app\controllers;

use Yii;
use app\models\About;
use yii\web\Response;
use app\models\Header;
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
        $Language = Language::find()->where('Code like "%'.$Code.'%"')->one();
        
        $AllLanguages = null;

        if(!$Language){
            $Language = Language::find()->where('Code like "%en_us%"')->one();
        }
        if(!$Language){
            $Language = Language::find()->where('Code like "%??_??%"')->one();
        }else{
            $AllLanguages = Language::find()->where('Code not like "%??_??%"')->orderBy("Name")->all();
        }
        
        $Dashboard = null;
        $About = null;
        $Header = null;
        $Contact = null;
        $Projects = null;
        $FollowMe = null;
        $Technologies = null;
        $Curriculum = null;
        $AllProjects = null;
        $AllTechnologies = null;
        $AllJobs = null;
        $AllEducation = null;
        $CurriculumLanguage = null;
        $ForeignLanguages = null;
        $FollowImages = null;

        if($Language){
            $Dashboard = Dashboard::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $About = About::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $FollowMe = FollowMe::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $Header = Header::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $Contact = Contact::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $Projects = Projects::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $Technologies = Technologies::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Language){
            $Curriculum = Curriculum::find()->where('Language_Id = '.$Language->IdLanguage)->one();
        }
        if($Projects){
            $AllProjects = $Projects->projects;
        }
        if($FollowMe){
            $FollowImages = $FollowMe->followMeImages;
        }
        if($Technologies){
            $AllTechnologies = $Technologies->technologies;
        }
        if($Curriculum){
            $AllJobs = $Curriculum->curriculumJobs;
        }
        if($Curriculum){
            $AllEducation = $Curriculum->curriculumEducations;
        }
        if($Curriculum){
            $CurriculumLanguage = CurriculumLanguages::find()->where('Curriculum_Id = '.$Curriculum->IdCurriculum)->one();
        }
        if($CurriculumLanguage){
            $ForeignLanguages = $CurriculumLanguage->foreignLanguages;
        }
        if($AllLanguages){
            $num = 0;
            foreach($AllLanguages as $Lang){
                $this->view->params['Language'][$num]['Code'] = $Lang->Code;
                $this->view->params['Language'][$num]['Name'] = $Lang->Name;
                $num++;
            }
        }else{
            $this->view->params['Language'] = null;
        }
        $this->view->params['SelectedLang'] = $Language->Code;
        $this->view->params['Home'] = $Header->Home;
        $this->view->params['About'] = $Header->About;
        $this->view->params['Technologies'] = $Header->Technologies;
        $this->view->params['Name'] = $Header->Name;
        $this->view->params['Projects'] = $Header->Projects;
        $this->view->params['Curriculum'] = $Header->Curriculum;
        $this->view->params['Contact'] = $Header->Contact;
        

        return $this->render('index', [
            'Dashboard' => $Dashboard,
            'FollowMe' => $FollowMe,
            'FollowImages' => $FollowImages,
            'About' => $About,
            'Header' => $Header,
            'Contact' => $Contact,
            'Projects' => $Projects,
            'Technologies' => $Technologies,
            'Curriculum' => $Curriculum,
            'AllProjects' => $AllProjects,
            'AllTechnologies' => $AllTechnologies,
            'AllJobs' => $AllJobs,
            'AllEducation' => $AllEducation,
            'CurriculumLanguage' => $CurriculumLanguage,
            'ForeignLanguages' => $ForeignLanguages,
        ]);    
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionCreate(/*$Code*/)
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
/*




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
        ]);*/
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
