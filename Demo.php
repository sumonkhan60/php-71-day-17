<?php
require_once 'Example.php';

class Demo extends Example
{
    public $age = '30';
    protected $location = 'Uttara';
    private $mobile = '01821444450';

    public function newOne() {
//        echo 'In new one';
        $this->addition();
    }
    protected function newTwo() {
        echo 'In new two';
    }
    private function newThree() {
        echo 'In new three';
    }
}