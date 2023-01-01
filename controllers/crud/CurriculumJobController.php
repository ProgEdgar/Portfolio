<?php

namespace app\controllers;

use app\models\CurriculumJob;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CurriculumJobController implements the CRUD actions for CurriculumJob model.
 */
class CurriculumJobController extends Controller
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
     * Lists all CurriculumJob models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CurriculumJob::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdCurriculumJob' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CurriculumJob model.
     * @param int $IdCurriculumJob Id Curriculum Job
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdCurriculumJob)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdCurriculumJob),
        ]);
    }

    /**
     * Creates a new CurriculumJob model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CurriculumJob();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdCurriculumJob' => $model->IdCurriculumJob]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CurriculumJob model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdCurriculumJob Id Curriculum Job
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdCurriculumJob)
    {
        $model = $this->findModel($IdCurriculumJob);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdCurriculumJob' => $model->IdCurriculumJob]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CurriculumJob model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdCurriculumJob Id Curriculum Job
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdCurriculumJob)
    {
        $this->findModel($IdCurriculumJob)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CurriculumJob model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdCurriculumJob Id Curriculum Job
     * @return CurriculumJob the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdCurriculumJob)
    {
        if (($model = CurriculumJob::findOne(['IdCurriculumJob' => $IdCurriculumJob])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
