<?php 
#var_dump($blogs);
 ?>
@extends('layouts.fontend')
@section('content')

@for ($i = 0; $i < count($blogs); $i+=2)
   
<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<!-- <h2><span class="glyphicon glyphicon-cog"></span></h2> -->
				<i class="{{ $blogs[$i]['icon'] }} fa-4x"></i>
				<button class="btn btn-default">Get Help</button>
			</div>
			<div class="col-md-9">
				<h4><span class="{{ $blogs[$i]['icon'] }} "></span> {{ $blogs[$i]['name'] }} </h4>
				<div class="list-group">
				@foreach ($blogs[$i]['Category'] as $category)
					<a href="#" class="list-group-item">
			        <span class="glyphicon glyphicon-file"></span> {{ $category['name']}} <span class="badge">145</span>
			    </a>
				@endforeach												        
		    </div>
			</div>
		</div>				
	</div>
	@if (isset($blogs[$i+1]))
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<i class="{{ $blogs[$i+1]['icon'] }} fa-4x"></i>
				<button class="btn btn-default">Get Help</button>
			</div>
			<div class="col-md-9">
				<h4><span class="{{ $blogs[$i+1]['icon'] }}"></span> {{ $blogs[$i+1]['name'] }}</h4>
				<div class="list-group">
				@foreach ($blogs[$i+1]['Category'] as $category)						
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> {{ $category['name'] }} <span class="badge">145</span>
				    </a>
				@endforeach
		    	</div>
			</div>
		</div>				
	</div>
	@endif
</div>
@endfor
<!-- 
<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<i class="fa fa-bank fa-4x"></i>
				<button class="btn btn-default">Get Help</button>
			</div>
			<div class="col-md-9">
				<h4><span class="fa fa-bank"></span>CakePHP</h4>
				<div class="list-group">
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> Introductions <span class="badge">145</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-music"></span> Generator <span class="badge">50</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-film"></span> Theme and Plugins <span class="badge">8</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-film"></span> Troubleshooting <span class="badge">8</span>
				    </a>
		    </div>
			</div>
		</div>				
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<i class="fa fa-fire fa-4x"></i>
				<button class="btn btn-default">Get Help</button>
			</div>
			<div class="col-md-9">
				<h4><span class="fa fa-fire"></span>Laravel</h4>
				<div class="list-group">										
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> Introductions <span class="badge">145</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> Setup and Database Design <span class="badge">145</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-music"></span> Theme Development <span class="badge">50</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-film"></span> Troubleshooting <span class="badge">8</span>
				    </a>
		    	</div>
			</div>
		</div>				
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<i class="fa fa-cube fa-4x"></i>
				<button class="btn btn-default">Get Help</button>
			</div>
			<div class="col-md-9">
				<h4><span class="fa fa-cube"></span>Working with API</h4>
				<div class="list-group">						    
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> Facebook API<span class="badge">145</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-music"></span> Google API <span class="badge">50</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-film"></span> Linkedin API<span class="badge">8</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-film"></span> Twitter API<span class="badge">8</span>
				    </a>
		    	</div>
			</div>
		</div>				
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<i class="fa fa-group fa-4x"></i>
				<button class="btn btn-default">Get Help</button>
			</div>
			<div class="col-md-9">
				<h4><span class="fa fa-group"></span>Social</h4>
				<div class="list-group">											
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> Facbook <span class="badge">145</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-file"></span> Twitter <span class="badge">145</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-music"></span> LinkedIn <span class="badge">50</span>
				    </a>
				    <a href="#" class="list-group-item">
				        <span class="glyphicon glyphicon-film"></span> Google <span class="badge">8</span>
				    </a>
		    	</div>
			</div>
		</div>				
	</div>
</div> -->
@stop