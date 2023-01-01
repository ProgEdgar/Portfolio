<?php

namespace app\controllers;

use app\models\Technologies;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TechnologiesController implements the CRUD actions for Technologies model.
 */
class TechnologiesController extends Controller
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
     * Lists all Technologies models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Technologies::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdTechnologies' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Technologies model.
     * @param int $IdTechnologies Id Technologies
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdTechnologies)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdTechnologies),
        ]);
    }

    /**
     * Creates a new Technologies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Technologies();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdTechnologies' => $model->IdTechnologies]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Technologies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdTechnologies Id Technologies
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdTechnologies)
    {
        $model = $this->findModel($IdTechnologies);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdTechnologies' => $model->IdTechnologies]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Technologies model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdTechnologies Id Technologies
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdTechnologies)
    {
        $this->findModel($IdTechnologies)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Technologies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdTechnologies Id Technologies
     * @return Technologies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdTechnologies)
    {
        if (($model = Technologies::findOne(['IdTechnologies' => $IdTechnologies])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
