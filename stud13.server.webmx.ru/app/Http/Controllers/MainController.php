<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use App\Models\HubPost;
use App\Models\Hub;
use App\Models\Users;
use App\Models\HubUser;

class MainController extends Controller
{
	public function acMain () {
		$posts = Posts::Where("IsNews",false)->OrderBy("Date","DESC")->take(3)->get();
	    Users::all();
        Hub::all();
        HubPost::all();
		return view("main")->with("posts",$posts);
	}
    public function acNews () {
		$posts = Posts::Where("IsNews",true)->OrderBy("Date","DESC")->take(3)->get();
	    Users::all();
        Hub::all();
        HubPost::all();
		return view("news")->with("posts",$posts);
	}
    public function acHubs () {
		Posts::Where("IsNews",true)->OrderBy("Date","DESC")->take(3)->get();
	    Users::all();
        $hubs=Hub::all();
        HubPost::all();
		return view("hubs")->with("Hubs",$hubs);
	}
    public function acPost ($postid){
        $post=Posts::where("PostId",$postid)->first();
        HubPost::all();
        Users::all();
        Hub::all();
        return view("post")->with("post",$post);
    }
    public function acUser ($userid){
        $user=Users::where("UserId",$userid)->first();
        Posts::all();
        Hub::all();
        HubUser::all();
        return view("user")->with("User",$user);
    }
    public function acUserPosts ($userid){
        $user=Users::where("UserId",$userid)->first();
        Posts::all();
        Hub::all();
        HubUser::all();
        HubPost::all();
        return view("user_posts")->with("User",$user);
    }
    public function acHub($hubid){
        $hub=Hub::where("HubId",$hubid)->first();
        Users::all();
        Hub::all();
        HubPost::all();
        $posts=Posts::all();
        HubUser::all();
        return view("hub")->with("Hub",$hub);
    }
    public function acUsers () {
		Posts::all();
	    $users=Users::all();
        Hub::all();
        HubPost::all();
		return view("users")->with("Users",$users);
	}
}