<?php

namespace app\controllers;

use app\models\FollowMeImage;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FollowMeImageController implements the CRUD actions for FollowMeImage model.
 */
class FollowMeImageController extends Controller
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
     * Lists all FollowMeImage models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => FollowMeImage::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdFollowMeImage' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FollowMeImage model.
     * @param int $IdFollowMeImage Id Follow Me Image
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdFollowMeImage)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdFollowMeImage),
        ]);
    }

    /**
     * Creates a new FollowMeImage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FollowMeImage();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdFollowMeImage' => $model->IdFollowMeImage]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FollowMeImage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdFollowMeImage Id Follow Me Image
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdFollowMeImage)
    {
        $model = $this->findModel($IdFollowMeImage);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdFollowMeImage' => $model->IdFollowMeImage]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FollowMeImage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdFollowMeImage Id Follow Me Image
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdFollowMeImage)
    {
        $this->findModel($IdFollowMeImage)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FollowMeImage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdFollowMeImage Id Follow Me Image
     * @return FollowMeImage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdFollowMeImage)
    {
        if (($model = FollowMeImage::findOne(['IdFollowMeImage' => $IdFollowMeImage])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
