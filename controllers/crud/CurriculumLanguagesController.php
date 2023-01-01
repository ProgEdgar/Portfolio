<?php

namespace app\controllers;

use app\models\CurriculumLanguages;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CurriculumLanguagesController implements the CRUD actions for CurriculumLanguages model.
 */
class CurriculumLanguagesController extends Controller
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
     * Lists all CurriculumLanguages models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CurriculumLanguages::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdCurriculumLanguages' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CurriculumLanguages model.
     * @param int $IdCurriculumLanguages Id Curriculum Languages
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdCurriculumLanguages)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdCurriculumLanguages),
        ]);
    }

    /**
     * Creates a new CurriculumLanguages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CurriculumLanguages();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdCurriculumLanguages' => $model->IdCurriculumLanguages]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CurriculumLanguages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdCurriculumLanguages Id Curriculum Languages
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdCurriculumLanguages)
    {
        $model = $this->findModel($IdCurriculumLanguages);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdCurriculumLanguages' => $model->IdCurriculumLanguages]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CurriculumLanguages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdCurriculumLanguages Id Curriculum Languages
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdCurriculumLanguages)
    {
        $this->findModel($IdCurriculumLanguages)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CurriculumLanguages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdCurriculumLanguages Id Curriculum Languages
     * @return CurriculumLanguages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdCurriculumLanguages)
    {
        if (($model = CurriculumLanguages::findOne(['IdCurriculumLanguages' => $IdCurriculumLanguages])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
