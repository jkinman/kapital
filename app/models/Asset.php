<?php

class Asset extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'title' => 'required',
    	'summary' => 'required',
    	'url' => 'NULL',
    	'type' => 'NULL'
    );

    public function artist() {
    	return $this->belongsTo( 'Artist' );
    }
}