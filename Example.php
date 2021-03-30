<?php


class Example
{
    public $name = 'Sumon Khan';
    protected $city = 'Pabna';
    private $country = 'Bangladesh';

    public $value;
    public function __construct()
    {

    }

    public function addition() {
        echo 'In addition';
    }
    protected function subtraction() {
        echo 'In Subtraction';
    }
    private function division() {
        echo 'In division';
    }
}