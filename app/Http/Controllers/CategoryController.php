<?php namespace App\Http\Controllers;

use App\Actor;
use App\BestOf;
use App\Category;
use App\Movie;
use App\NewRelease;
use App\Singer;
use App\SubCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\UploadMusic;
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
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
        ]);

        if ("1" == $request->cat_id) {
            $createSub = new SubCategory();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        } else if ("2" == $request->cat_id) {
            $createSub = new Singer();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        } else if ("3" == $request->cat_id) {
            $createSub = new Actor();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        } else if ("4" == $request->cat_id) {
            $createSub = new Movie();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        } else if ("5" == $request->cat_id) {
            $createSub = new Album();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        } else if ("6" == $request->cat_id) {
            $createSub = new NewRelease();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        } else if ("7" == $request->cat_id) {
            $createSub = new BestOf();
            $createSub->id = $request->cat_id;
            $createSub->name = $request->name;
            $createSub->image = time(). '.' .$request->file('image')->getClientOriginalExtension();
            $createSub->save();
            $imageName = $createSub->image;
            $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        }

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
        //print_r($request->input('language'));
        $upload = new UploadMusic();
        $upload->language = $request->language;
        $upload->singer = $request->singer;
        $upload->actor = $request->actor;
        $upload->movie = $request->movie;
        $upload->album = $request->album;
        $upload->new_release = $request->new_release;
        $upload->bestof = $request->bestof;

        $upload->music_file = time(). '_' .$request->file('file')->getClientOriginalName();
        $upload->save();

        $imageName = $upload->music_file;
        $request->file('file')->move(base_path() . '/public/musics/files/', $imageName);

        //$request->file('file')->move(base_path().'/public/images/catalogTest/', $request->file('file')->getClientOriginalName());
		return json_encode(array('status' => 'ok'));
	}

	public function uploadForm()
	{
        $languages = DB::table('subcategories')->where('cat_id', '=', 1)->get();
        $singers = DB::table('subcategories')->where('cat_id', '=', 2)->get();
        $actors = DB::table('subcategories')->where('cat_id', '=', 3)->get();
        $movies = DB::table('subcategories')->where('cat_id', '=', 4)->get();
        $albums = DB::table('subcategories')->where('cat_id', '=', 5)->get();
        $new_releases = DB::table('subcategories')->where('cat_id', '=', 6)->get();
        $best_of_collection = DB::table('subcategories')->where('cat_id', '=', 7)->get();
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
	public function show()
	{
		$sql = "Select musics.music_file,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=language) as language,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=singer) as singer,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=actor) as actor,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=movie) as movie,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=album) as album,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=new_release) as new_release,
                (select subcategories.sub_category_name from subcategories where sub_cat_id=bestof) as best_of
                from musics";

        $users = DB::table('musics')->select('music_file', '(select subcategories.sub_category_name from subcategories where sub_cat_id=language) as language')->get();
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
