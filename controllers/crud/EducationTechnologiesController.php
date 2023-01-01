<?php

namespace app\controllers;

use app\models\EducationTechnologies;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EducationTechnologiesController implements the CRUD actions for EducationTechnologies model.
 */
class EducationTechnologiesController extends Controller
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
     * Lists all EducationTechnologies models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EducationTechnologies::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'CurriculumEducation_Id' => SORT_DESC,
                    'Technology_Id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EducationTechnologies model.
     * @param int $CurriculumEducation_Id Curriculum Education ID
     * @param int $Technology_Id Technology ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CurriculumEducation_Id, $Technology_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($CurriculumEducation_Id, $Technology_Id),
        ]);
    }

    /**
     * Creates a new EducationTechnologies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EducationTechnologies();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'CurriculumEducation_Id' => $model->CurriculumEducation_Id, 'Technology_Id' => $model->Technology_Id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EducationTechnologies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $CurriculumEducation_Id Curriculum Education ID
     * @param int $Technology_Id Technology ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CurriculumEducation_Id, $Technology_Id)
    {
        $model = $this->findModel($CurriculumEducation_Id, $Technology_Id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CurriculumEducation_Id' => $model->CurriculumEducation_Id, 'Technology_Id' => $model->Technology_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EducationTechnologies model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $CurriculumEducation_Id Curriculum Education ID
     * @param int $Technology_Id Technology ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CurriculumEducation_Id, $Technology_Id)
    {
        $this->findModel($CurriculumEducation_Id, $Technology_Id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EducationTechnologies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $CurriculumEducation_Id Curriculum Education ID
     * @param int $Technology_Id Technology ID
     * @return EducationTechnologies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CurriculumEducation_Id, $Technology_Id)
    {
        if (($model = EducationTechnologies::findOne(['CurriculumEducation_Id' => $CurriculumEducation_Id, 'Technology_Id' => $Technology_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
