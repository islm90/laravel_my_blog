<?php 
class Category extends Eloquent{
	
	public function Blog()
    {
        return $this->belongsTo('Blog');
    }
}
?>