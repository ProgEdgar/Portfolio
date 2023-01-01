<?php

namespace app\controllers;

use app\models\Technology;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TechnologyController implements the CRUD actions for Technology model.
 */
class TechnologyController extends Controller
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
     * Lists all Technology models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Technology::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdTechnology' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Technology model.
     * @param int $IdTechnology Id Technology
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdTechnology)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdTechnology),
        ]);
    }

    /**
     * Creates a new Technology model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Technology();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdTechnology' => $model->IdTechnology]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Technology model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdTechnology Id Technology
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdTechnology)
    {
        $model = $this->findModel($IdTechnology);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdTechnology' => $model->IdTechnology]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Technology model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdTechnology Id Technology
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdTechnology)
    {
        $this->findModel($IdTechnology)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Technology model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdTechnology Id Technology
     * @return Technology the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdTechnology)
    {
        if (($model = Technology::findOne(['IdTechnology' => $IdTechnology])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
