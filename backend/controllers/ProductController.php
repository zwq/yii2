<?php
namespace backend\controllers;
use backend\widgets\image\RemoveAction;
use backend\widgets\image\UploadAction;
use common\models\Brand;
use common\models\Category;
use common\models\ProductImage;
use common\models\ProductType;
use common\models\Status;
use Yii;
use common\models\Product;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

class ProductController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
        ];
    }
    
     public function actions()
    {
//        return [
//            'upload' => [
//                'class' => UploadAction::className(),
//                'upload' => 'upload',
//            ],
//            'remove' => [
//                'class' => RemoveAction::className(),
//                'uploadDir' => '@frontend/web/upload',
//            ],
//        ];
    }
    
    public function actionIndex()
    {
           $searchModel = new ProductSearch();
           
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * 创建
     */
    public function actionCreate()
    {
        $model = new Product();
        return $this->render('create',['model'=>$model]);
    }
}

