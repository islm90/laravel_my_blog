<?php

class BlogsController extends \BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::orderBy('order', 'ASC')->get();
		$blogs = $blogs->toArray();

		foreach ($blogs as $key => $blog) {
			#$category = Blog::find($blog['id'])->Category->toArray();
			$category = Category::where('blog_id',$blog['id'])->orderBy('order', 'ASC')->get()->toArray();

			#var_dump($category);
			$blogs[$key]['Category'] = $category;
		}

		#die();
		return View::make('blogs.index')->with('blogs',$blogs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
