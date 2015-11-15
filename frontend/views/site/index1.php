<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\builder\Form;
use backend\models\Provinsi;
use backend\models\Kota;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use kartik\widgets\DepDrop;
use yii\widgets\pjax;
use miloschuman\highcharts\Highcharts;
$this->title = 'My Yii Application';
?>
<div class="site-index">

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8" style="background-color:lavenderblush;"><img src="<?php echo Yii::$app->urlManager->baseUrl.'/images/mobil.jpg'; ?>" class="img-thumbnail" alt="" width="100%"/>
      <?php

        echo Highcharts::widget([
        'options' => [
        'title' => ['text' => 'Fruit Consumption'],
        'xAxis' => [
        'categories' => ['Apples', 'Bananas', 'Oranges']
        ],
        'yAxis' => [
        'title' => ['text' => 'Fruit eaten']
        ],
        'series' => [
        ['name' => 'Jane', 'data' => [1, 0, 4]],
        ['name' => 'John', 'data' => [5, 7, 3]]
        ]
        ]
        ]);
      ?>

    <br/><br/>
    <div class="row">
      <div class="col-md-7">

        <?php
          use scotthuangzl\googlechart\GoogleChart;
          echo GoogleChart::widget( array('visualization' => 'Map',
          'packages'=>'map',//default is corechart
          'loadVersion'=>1,//default is 1.  As for Calendar, you need change to 1.1
          'data' => array(
          ['Country', 'Population'],
          ['China', 'China: 1,363,800,000'],
          ['India', 'India: 1,242,620,000'],
          ['US', 'US: 317,842,000'],
          ['Indonesia', 'Indonesia: 247,424,598'],
          ['Brazil', 'Brazil: 201,032,714'],
          ['Pakistan', 'Pakistan: 186,134,000'],
          ['Nigeria', 'Nigeria: 173,615,000'],
          ['Bangladesh', 'Bangladesh: 152,518,015'],
          ['Russia', 'Russia: 146,019,512'],
          ['Japan', 'Japan: 127,120,000']
          ),
          'options' => array('title' => 'My Daily Activity',
          'showTip'=>true,
          )));
        ?>

      </div>

      <div class="col-md-5"> 

      <table class="table"style="margin-bottom:0px;">
        <tbody>
          <tr>
            <td><b>Values Checking</b></td>
            <td><b style="color:blue;"></b></td>
          </tr>
        </tbody>
      </table>
 
      <table class="table" style="margin-top:0px;">
        <tbody>
          <tr>
            <td> 
              <b>From :</b><br/>
              
            </td>
            <td>
              <b>To :</b><br/>
             
            </td>
          </tr>


          <tr>
            <td> 
              <b>Details :</b><br/>
              Document<br/>
              JNE<br/>
              
            </td>
          </tr>



        </tbody>
      </table>
 
      </div>
    </div>

    </div>






    <div class="col-sm-4" style="background-color:lavender;">
    <br/>
      <img src="<?php echo Yii::$app->urlManager->baseUrl.'/images/user.jpg'; ?>" class="img-circle" alt="User Image" width="100"/>&nbsp; <h4><b>Soni Firdaus</b></h4><br/>
      sonifirdaus34@gmail.com
   <div class="harga-form">

    <?php $form = ActiveForm::begin([
    'method' => 'post',
    'action' => ['site/price'],
    ]);?>
  

    <?php
    $dataPost=ArrayHelper::map(kota::find()->all(), 'CITY_ID', 'CITY_NAME');
    echo $form->field($model, 'ORIGIN_CITY')
        ->dropDownList(
            $dataPost
        );
        ?>
    <?php
    $dataPost=ArrayHelper::map(kota::find()->all(), 'CITY_ID', 'CITY_NAME');
    echo $form->field($model, 'DES_CITY')
        ->dropDownList(
            $dataPost
        );
        ?>
    
    <?= $form->field($model, 'HARGA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php //print_r($data);?>
    
  </div>
</div>
    

</div>
