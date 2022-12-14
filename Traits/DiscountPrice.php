<?php

trait DiscountPrice {

    public $discount;
    public function sconto() {

        return $this->discount;

    }

    public function setSconto($price) {

        $this->discount =  $price * 0.20;

    }
}

?>