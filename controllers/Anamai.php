<?php

namespace app\controllers;

class Anamai extends \yii\web\Controller{

    public function test()
    {
    $a=3;$b=5;$c=$a*$b;
    return $this->render('view',['total'=>$c]);
    }

}
