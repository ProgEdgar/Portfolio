<?php

namespace app\controllers;

use app\models\FollowMe;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FollowMeController implements the CRUD actions for FollowMe model.
 */
class FollowMeController extends Controller
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
     * Lists all FollowMe models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => FollowMe::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdFollowMe' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FollowMe model.
     * @param int $IdFollowMe Id Follow Me
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdFollowMe)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdFollowMe),
        ]);
    }

    /**
     * Creates a new FollowMe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FollowMe();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdFollowMe' => $model->IdFollowMe]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FollowMe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdFollowMe Id Follow Me
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdFollowMe)
    {
        $model = $this->findModel($IdFollowMe);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdFollowMe' => $model->IdFollowMe]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FollowMe model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdFollowMe Id Follow Me
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdFollowMe)
    {
        $this->findModel($IdFollowMe)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FollowMe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdFollowMe Id Follow Me
     * @return FollowMe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdFollowMe)
    {
        if (($model = FollowMe::findOne(['IdFollowMe' => $IdFollowMe])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
