<?php 
class Blog extends Eloquent{

	public function Category(){
		return $this->hasMany('Category','blog_id');
	}
	
}
?>