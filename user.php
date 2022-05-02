<?php 
class User{
    private $height;    //cm
    private $weight;    //kg

    public function __construct($height,$weight){
        $this->set_value($height,$weight);
    }

    //それぞれの引数の値をプロパティにセットする。
    public function set_value($height,$weight){
        $this->set_height($height);
        $this->set_weight($weight);
    }

    //アクセサメソッド（計４つ）
    public function set_height($height){
        if(!is_numeric($height)){
            $height = 0;
        }
        $this->height = $height;
    }

    public function set_weight($weight){
        if(!is_numeric($weight)){
            $weight = 0;
        }
        $this->weight = $weight;
    }

    public function get_height(){
        return $this->height;
    }
    public function get_weight(){
        return $this->weight;
    }

    public function get_bmi(){
        //return $this->bmi = ($this->weight / (($this->height/100) * ($this->height/100)));
        return $this->weight / (($this->height/100) * ($this->height/100));
    }

    public function get_appropriate_weight(){
        //return $this->appropriate_weight = (($this->height/100) * ($this->height/100)) * 22;
        return (($this->height/100) * ($this->height/100)) * 22;
    }

    public function get_result(){
        
        //戻り値：判定結果
        if($this->get_bmi() < 18.5){
            return '低体重(痩せ型)';
        }
        elseif(18.5 <= $this->get_bmi() && $this->get_bmi() < 25){
            return '普通体重';
        }
        elseif(25 <= $this->get_bmi() && $this->get_bmi() < 30){
            return '肥満(1度)';
        }
        elseif(30 <= $this->get_bmi() && $this->get_bmi() < 35){
            return '肥満(2度)';
        }
        elseif(35 <= $this->get_bmi() && $this->get_bmi() < 40){
            return '肥満(3度)';
        }
        elseif(40 <= $this->get_bmi()){
            return '肥満(4度)';
        }
    }

    public function get_result_color(){
        //処理:判定結果を色に変換する。
        if($this->get_result() == '低体重(痩せ型)'){
            return 'blue';
        }
        elseif ($this->get_result() == '普通体重') {
            return 'white';
        }else {
            return 'red';
        }

    }
}


?>
