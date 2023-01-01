<?php

namespace app\controllers;

use app\models\ForeignLanguages;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ForeignLanguagesController implements the CRUD actions for ForeignLanguages model.
 */
class ForeignLanguagesController extends Controller
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
     * Lists all ForeignLanguages models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ForeignLanguages::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdForeignLanguages' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ForeignLanguages model.
     * @param int $IdForeignLanguages Id Foreign Languages
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdForeignLanguages)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdForeignLanguages),
        ]);
    }

    /**
     * Creates a new ForeignLanguages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ForeignLanguages();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdForeignLanguages' => $model->IdForeignLanguages]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ForeignLanguages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdForeignLanguages Id Foreign Languages
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdForeignLanguages)
    {
        $model = $this->findModel($IdForeignLanguages);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdForeignLanguages' => $model->IdForeignLanguages]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ForeignLanguages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdForeignLanguages Id Foreign Languages
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdForeignLanguages)
    {
        $this->findModel($IdForeignLanguages)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ForeignLanguages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdForeignLanguages Id Foreign Languages
     * @return ForeignLanguages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdForeignLanguages)
    {
        if (($model = ForeignLanguages::findOne(['IdForeignLanguages' => $IdForeignLanguages])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
