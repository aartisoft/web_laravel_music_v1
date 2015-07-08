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

    public function postSubCategory(Request $request)
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
        return view('admin.create_sub_category', ['categories' => $category]);
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
        $languages = DB::table('subcategories')->where('id', '=', 1)->get();
        $singers = DB::table('subcategories')->where('id', '=', 2)->get();
        $actors = DB::table('subcategories')->where('id', '=', 3)->get();
        $movies = DB::table('subcategories')->where('id', '=', 4)->get();
        $albums = DB::table('subcategories')->where('id', '=', 5)->get();
        $new_releases = DB::table('subcategories')->where('id', '=', 6)->get();
        $best_of_collection = DB::table('subcategories')->where('id', '=', 7)->get();
        //print_r( $best_of_collection);
        $data = array('languages' => $languages, 'singers' => $singers, 'actors'=>$actors
        , 'movies'=>$movies, 'albums' =>$albums, 'new_releases' => $new_releases, 'best_of_collection'=>$best_of_collection);
		return view('admin.upload_music', $data);
	}

	public function widget()
	{
		return view('admin.main');
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
