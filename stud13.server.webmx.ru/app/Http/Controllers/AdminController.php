<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use App\Models\HubPost;
use App\Models\Hub;
use App\Models\Users;
use App\Models\HubUser;

class AdminController extends Controller
{
	public function acConsoleMenu () {
		return view("Console.main");
	}
	//USERS
    public function acConsoleUsers () {
        $users=Users::all();
		return view("Console.users")->with("Users",$users);
	}
	public function acConsoleUserUpdate ($userid) {
        $user=Users::where("UserId",$userid)->first();
		$hubs=Hub::all();
		return view("Console.usermodification")->with(["User"=>$user,"Hubs"=>$hubs]);
	}
	public function acConsoleUserAdd () {
		$hubs=Hub::all();
		return view("Console.usermodification")->with("Hubs",$hubs);
	}
	public function acConsoleUserModification (Request $request) {
        if ($request->input("UserId")==null){
			if ($request->hasFile('Image')) {
				$image = $request->file('Image')->getClientOriginalName();
				$request->file('Image')->move("images/Users/", $image);
			} else $image = 'ava1.jpg';	
			
			$user = new Users;
			$user->Login=$request->input('Login');
			$user->Fullname=$request->input('Fullname');
			$user->Address=$request->input('Address');
			$user->Image=$image;
			$user->Description=$request->input('Description');
			$user->RegDate=date('Y-m-d H:i:s');
			$user->AboutSelf=$request->input('AboutSelf');
			$user->save();
		} else {
			if ($request->hasFile('Image')) {
				$image = $request->file('Image')->getClientOriginalName();
				$request->file('Image')->move("images/Users/", $image);
			} else $image = $request->input('ImagePath');	
			
			$id = $request->input("UserId");
			$user=Users::find($id);
			$user->Login=$request->input('Login');
			$user->Fullname=$request->input('Fullname');
			$user->Address=$request->input('Address');
			$user->Image=$image;
			$user->Description=$request->input('Description');
			$user->RegDate=$request->input('RegDate');
			$user->AboutSelf=$request->input('AboutSelf');
			$user->save();
		}
		HubUser::where("UserId",$user->UserId)->delete();
		$hubs = $request->input('Hubs');
		if (is_array($hubs)){
			foreach($hubs as $HubId){
				$HubUser=new HubUser;
				$HubUser->UserId=$user->UserId;
				$HubUser->HubId=$HubId;
				$HubUser->save();
			}
		}
		return redirect('/console/users');
	}
	public function acConsoleUserDelete ($userid) {
        $user=Users::find($userid);
		HubUser::where("UserId",$user->UserId)->delete();
		Posts::where("UserId",$user->UserId)->delete();
		$user->delete();
		return back();
	}
	//----//
	//POSTS
	public function acConsolePosts () {
		Users::all();
        Hub::all();
        HubPost::all();
		$posts=Posts::all();
		return view("Console.posts")->with("posts",$posts);
	}
	public function acConsolePostUpdate ($postid) {
        $post=Posts::find($postid);
		$users=Users::all();
		$hubs=Hub::all();
		return view("Console.postmodification")->with(["Post"=>$post,"Users"=>$users,"Hubs"=>$hubs]);
	}
	public function acConsolePostAdd () {
		$users=Users::all();
		$hubs=Hub::all();
		return view("Console.postmodification")->with(["Users"=>$users,"Hubs"=>$hubs]);
	}
	public function acConsolePostModification (Request $request) {
        if ($request->input("PostId")==null){
			if ($request->hasFile('Image')) {
				$image = $request->file('Image')->getClientOriginalName();
				$request->file('Image')->move("images/Posts/", $image);
			} else $image = null;	
			
			$post = new Posts;
			$post->Title=$request->input('Title');
			$post->Content=$request->input('Content');
			$post->ShortContent=$request->input('ShortContent');
			$post->Date=date('Y-m-d H:i:s');
			$post->Image=$image;
			$post->IsNews=$request->input('IsNews');
			if ($post->IsNews!=true) $post->IsNews=false;
			$post->UserId=$request->input('User');
			$post->save();
		} else {
			if ($request->hasFile('Image')) {
				$image = $request->file('Image')->getClientOriginalName();
				$request->file('Image')->move("images/Posts/", $image);
			} else $image = $request->input('ImagePath');	
			
			$id = $request->input("PostId");
			$post=Posts::find($id);
			$post->Title=$request->input('Title');
			$post->Content=$request->input('Content');
			$post->ShortContent=$request->input('ShortContent');
			$post->Date=$request->input('Date');
			$post->Image=$image;
			$post->IsNews=$request->input('IsNews');
			if ($post->IsNews!=true) $post->IsNews=false;
			$post->UserId=$request->input('User');
			$post->save();
		}
		HubPost::where("PostId",$post->PostId)->delete();
		$hubs = $request->input('Hubs');
		if (is_array($hubs)){
			foreach($hubs as $HubId){
				$HubPost=new HubPost;
				$HubPost->PostId=$post->PostId;
				$HubPost->HubId=$HubId;
				$HubPost->save();
			}
		}
		return redirect('/console/posts');
	}
	public function acConsolePostDelete ($postid) {
        $post=Posts::find($postid);
		HubPost::where("PostId",$postid)->delete();
		$post->delete();
		return back();
	}
	//----//
	//HUBS
	public function acConsoleHubs () {
        $hubs=Hub::all();
		return view("Console.hubs")->with("Hubs",$hubs);
	}
	public function acConsoleHubUpdate ($hubid) {
        $hub=Hub::find($hubid);
		return view("Console.hubmodification")->with("Hub",$hub);
	}
	public function acConsoleHubAdd () {
		return view("Console.hubmodification");
	}
	public function acConsoleHubModification (Request $request) {
        if ($request->input("HubId")==null){
			if ($request->hasFile('Image')) {
				$image = $request->file('Image')->getClientOriginalName();
				$request->file('Image')->move("images/Hubs/", $image);
			} else $image = "hub1.jpg";	
			
			$Hub = new Hub;
			$Hub->Name=$request->input('Name');
			$Hub->Description=$request->input('Description');
			$Hub->Image=$image;
			$Hub->save();
		} else {
			if ($request->hasFile('Image')) {
				$image = $request->file('Image')->getClientOriginalName();
				$request->file('Image')->move("images/Hubs/", $image);
			} else $image = $request->input('ImagePath');	
			
			$id = $request->input("HubId");
			$Hub=Hub::find($id);
			$Hub->Name=$request->input('Name');
			$Hub->Description=$request->input('Description');
			$Hub->Image=$image;
			$Hub->save();
		}
		return redirect('/console/hubs');
	}
	public function acConsoleHubDelete ($hubid) {
        $hub=Hub::find($hubid);
		HubPost::where("HubId",$hubid)->delete();
		HubUser::where("HubId",$hubid)->delete();
		$hub->delete();
		return back();
	}
	//----//
}