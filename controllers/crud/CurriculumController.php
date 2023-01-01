<?php

namespace app\controllers;

use app\models\Curriculum;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CurriculumController implements the CRUD actions for Curriculum model.
 */
class CurriculumController extends Controller
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
     * Lists all Curriculum models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Curriculum::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdCurriculum' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Curriculum model.
     * @param int $IdCurriculum Id Curriculum
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdCurriculum)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdCurriculum),
        ]);
    }

    /**
     * Creates a new Curriculum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Curriculum();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdCurriculum' => $model->IdCurriculum]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Curriculum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdCurriculum Id Curriculum
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdCurriculum)
    {
        $model = $this->findModel($IdCurriculum);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdCurriculum' => $model->IdCurriculum]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Curriculum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdCurriculum Id Curriculum
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdCurriculum)
    {
        $this->findModel($IdCurriculum)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Curriculum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdCurriculum Id Curriculum
     * @return Curriculum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdCurriculum)
    {
        if (($model = Curriculum::findOne(['IdCurriculum' => $IdCurriculum])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
