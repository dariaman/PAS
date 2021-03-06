<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\master\models\MstUsrPrivilagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master User Privilages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-privilages-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Privilages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'kode_usr_priv',
            'kodegrup',
            'kode_menu',
            'accs_usr',
            // 'upd_by',
            // 'upd_dt_tm',
            // 'is_cancel',
            // 'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
