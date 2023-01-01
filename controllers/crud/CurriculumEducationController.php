<?php

namespace app\controllers;

use app\models\CurriculumEducation;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CurriculumEducationController implements the CRUD actions for CurriculumEducation model.
 */
class CurriculumEducationController extends Controller
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
     * Lists all CurriculumEducation models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CurriculumEducation::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdCurriculumEducation' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CurriculumEducation model.
     * @param int $IdCurriculumEducation Id Curriculum Education
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdCurriculumEducation)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdCurriculumEducation),
        ]);
    }

    /**
     * Creates a new CurriculumEducation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CurriculumEducation();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdCurriculumEducation' => $model->IdCurriculumEducation]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CurriculumEducation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdCurriculumEducation Id Curriculum Education
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdCurriculumEducation)
    {
        $model = $this->findModel($IdCurriculumEducation);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdCurriculumEducation' => $model->IdCurriculumEducation]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CurriculumEducation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdCurriculumEducation Id Curriculum Education
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdCurriculumEducation)
    {
        $this->findModel($IdCurriculumEducation)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CurriculumEducation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdCurriculumEducation Id Curriculum Education
     * @return CurriculumEducation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdCurriculumEducation)
    {
        if (($model = CurriculumEducation::findOne(['IdCurriculumEducation' => $IdCurriculumEducation])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
