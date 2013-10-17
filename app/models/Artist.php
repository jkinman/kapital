<?php

class Artist extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function assets(){
    	return $this->hasMany( 'Asset' );
    }

    public function user(){
    	return $this->hasMany( 'User' );
    }



}