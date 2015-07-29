<?php namespace App\Http\Controllers;
use DB;

class ViewController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('welcome', ['name' => "Welcome to laravel"]);
	}
	
	public function showProfile($id)
    {
        //return view('welcome.profile', ['user' => User::findOrFail($id)]);
		return view('welcome', ['name' => $id]);
        //return "hello" + $id;
    }

	public function viewMusics()
	{
		//$users = DB::select('select id,name  from actors');
		$users = DB::select(DB::raw("SELECT musics.music_id, languages.name as language, singers.name as singer, actors.name as actor, movies.name as movie
										FROM musics
										INNER JOIN languages  ON musics.language = languages.id
										LEFT JOIN singers ON musics.singer = singers.id
										LEFT JOIN actors ON musics.actor = actors.id
										LEFT JOIN movies ON musics.movie = movies.id
										group by languages.name, singers.name, actors.name
										order by musics.music_id desc"));

		return view('admin.view_musics', ['value' => $users]);
	}


}
