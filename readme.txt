Laravel 4.x Admin theme with BS3Admin integration
Customized by 
Tarikul Islam
www.tarikul.com

Instructions
1. Go to your laravel root directory
2. Coppy Paste all the files and folder in the laravel root directory
3. add following code in the routes.php

Route::get('admintheme', function()
{
	return View::make('elements.admin.sample');
});

4. And browse .../public/admintheme for sample page

5. Use in controller: 

class MyController extends \BaseController {

	protected $layout = 'layouts.admin';

/**
 * Display a listing of the resource.
 *
 * @return Response
 */
	public function index()
	{

	$this->layout->content = View::make('elements.admin.admintheme')
	}
}
