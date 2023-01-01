<?php

namespace app\controllers;

use app\models\ProjectTechnologies;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectTechnologiesController implements the CRUD actions for ProjectTechnologies model.
 */
class ProjectTechnologiesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ProjectTechnologies models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ProjectTechnologies::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'Project_Id' => SORT_DESC,
                    'Technology_Id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProjectTechnologies model.
     * @param int $Project_Id Project ID
     * @param int $Technology_Id Technology ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Project_Id, $Technology_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Project_Id, $Technology_Id),
        ]);
    }

    /**
     * Creates a new ProjectTechnologies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ProjectTechnologies();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Project_Id' => $model->Project_Id, 'Technology_Id' => $model->Technology_Id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProjectTechnologies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Project_Id Project ID
     * @param int $Technology_Id Technology ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Project_Id, $Technology_Id)
    {
        $model = $this->findModel($Project_Id, $Technology_Id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Project_Id' => $model->Project_Id, 'Technology_Id' => $model->Technology_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProjectTechnologies model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Project_Id Project ID
     * @param int $Technology_Id Technology ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Project_Id, $Technology_Id)
    {
        $this->findModel($Project_Id, $Technology_Id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProjectTechnologies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Project_Id Project ID
     * @param int $Technology_Id Technology ID
     * @return ProjectTechnologies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Project_Id, $Technology_Id)
    {
        if (($model = ProjectTechnologies::findOne(['Project_Id' => $Project_Id, 'Technology_Id' => $Technology_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
