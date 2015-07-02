<?php namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use App\Quotation;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('create_category');
	}

	public function create(Request $request)
	{
        $flight = new Category;
        $flight->name = $request->name;
        $flight->save();
        return view('welcome', ['name' => 'Successfully saved!']);
	}

    public function createSubCategory(Request $request)
    {
        $flight = new SubCategory();
        $flight->id = $request->sub_category_name;
        $flight->sub_category_name = $request->name;
        $flight->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
        $flight->save();

        $imageName = $flight->image;
        $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);


        return view('welcome', ['name' => 'Successfully saved!']);
    }


    public function subCategory(Request $request)
    {
    	$category = DB::table('category')->get();
        return view('create_sub_category', ['categories' => $category]);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function upload(Request $request)
	{
        $request->file('file')->move(base_path().'/public/images/catalogTest/', $request->file('file')->getClientOriginalName());
		return json_encode(array('status' => 'ok'));
	}

	public function uploadForm()
	{
		return view('create_music');
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
