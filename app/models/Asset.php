<?php

class Asset extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function artist() {
    	return $this->belongsTo( 'Artist' );
    }
}