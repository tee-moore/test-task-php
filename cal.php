<?php
class Cal {
    public $result = '';
    public function add($var){
        return $this->result = $this->result + $var;
    }
    public function min($var){
        return $this->result = $this->result - $var;
    }
    public function razdelit($digit){
        return $this->result = $this->result * $digit;
    }
    public function mult($var){
        return $this->result = $this->result * $var;
    }
    private function round($var){
        echo $this->result = round($var);
    }
}