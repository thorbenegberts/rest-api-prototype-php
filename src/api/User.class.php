<?php
/**
 * Created by IntelliJ IDEA.
 * User: thorbenegberts
 * Date: 22.01.15
 * Time: 15:11
 */

class User {

    public $name = '';

    public function get($what, $value){

        $this->name = 'Otto';

        return $this;
    }
}