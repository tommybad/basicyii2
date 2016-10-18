<?php

namespace app\controllers;

class HelloController extends \yii\web\Controller{
    
    public function actionFirst() {
        $title= 'Hello Controler action first';
        
        return $this->render('first',['title1'=>$title]);
        
    }
}

