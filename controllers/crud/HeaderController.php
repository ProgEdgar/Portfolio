<?php

namespace app\controllers;

use app\models\Header;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HeaderController implements the CRUD actions for Header model.
 */
class HeaderController extends Controller
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
     * Lists all Header models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Header::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdHeader' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Header model.
     * @param int $IdHeader Id Header
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdHeader)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdHeader),
        ]);
    }

    /**
     * Creates a new Header model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Header();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdHeader' => $model->IdHeader]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Header model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdHeader Id Header
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdHeader)
    {
        $model = $this->findModel($IdHeader);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdHeader' => $model->IdHeader]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Header model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdHeader Id Header
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdHeader)
    {
        $this->findModel($IdHeader)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Header model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdHeader Id Header
     * @return Header the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdHeader)
    {
        if (($model = Header::findOne(['IdHeader' => $IdHeader])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
