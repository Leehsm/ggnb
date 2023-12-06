<?php

namespace App\Http\Controllers;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\MisionVision;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;

use Carbon\Carbon;
use Image;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.ggnbadmin');
    }

    public function aboutusView(){
        $aboutus = AboutUs::latest()->get();
        return view('backend.menu.aboutus.view', compact("aboutus"));
    }
    public function aboutusAdd(){
        return view('backend.menu.aboutus.add');
    }
    public function aboutusStore(Request $req){
        // dd($req->description);
        $id = AboutUs::insertGetId([
            'description' => $req->description,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'About Us Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('aboutus.view')->with($notification);
    }
    public function aboutusEdit($id){
        $aboutus = AboutUs::findOrFail($id);
        return view('backend.menu.aboutus.edit', compact('aboutus'));
    }
    public function aboutusUpdate(Request $req){
        $id = $req->id;

        AboutUs::findOrFail($id)->update([
            'description' => $req->description,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'About Us Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('aboutus.view')->with($notification);
    }
    public function aboutusDelete($id){
        AboutUs::findOrFail($id)->delete();

        $notification = array(
            'message' => 'About Us Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    public function teamView(){
        $team = Team::latest()->get();
        return view('backend.menu.teams.view', compact('team'));
    }
    public function teamAdd(){
        return view('backend.menu.teams.add');
    }
    public function teamStore(Request $req){
        // dd($req->all());
        $image = $req->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $team_id = Team::insertGetId([
            'image' => $save_url,
            'name' => $req->name,
            'title' => $req->title,
            'description' => $req->description,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Team Member Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('team.view')->with($notification);
    }
    public function teamEdit($id){
        $team = Team::findOrFail($id);
        return view('backend.menu.teams.edit', compact('team'));
    }
    public function teamUpdate(Request $req){
        $team_id = $req->id;
        $old_img = $req->old_image;

        if($req->file('image')){
            unlink($old_img);
            $image = $req->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            Team::findOrFail($team_id)->update([
                'image' => $save_url,
                'name' => $req->name,
                'title' => $req->title,
                'description' => $req->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Team Member Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('team.view')->with($notification);

        }else{

            Team::findOrFail($team_id)->update([
                'name' => $req->name,
                'title' => $req->title,
                'description' => $req->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Team Member Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('team.view')->with($notification);
        }
    }
    public function teamDelete($id){
        $team = Team::findOrFail($id);
        $img = $team->image;
        unlink($img);

        Team::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Team Meber Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    public function misionvisionView(){
        $misionvision = MisionVision::latest()->get();
        return view('backend.menu.misionvision.view', compact('misionvision'));
    }
    public function misionvisionAdd(){
        return view('backend.menu.misionvision.add');
    }
    public function misionvisionStore(Request $req){
        $misionvision = MisionVision::insertGetId([
            'mision' => $req->mision,
            'vision' => $req->vision,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Mision and Vision Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('misionvision.view')->with($notification);
    }
    public function misionvisionEdit($id){
        $misionvision = MisionVision::findOrFail($id);
        return view('backend.menu.misionvision.edit', compact('misionvision'));
    }
    public function misionvisionUpdate(Request $req){
        MisionVision::findOrFail($req->id)->Update([
            'mision' => $req->mision,
            'vision' => $req->vision,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Mision and Vision Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('misionvision.view')->with($notification);
    }
    public function misionvisionDelete($id){
        MisionVision::findOrFail($id)->delete();

        $notification = array(
			'message' => 'Mision and Vision Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('misionvision.view')->with($notification);
    }

    public function prodandservicesView(){
        return view('backend.menu.prodandservices.view');
    }
    public function prodandservicesAdd(){
        return view('backend.menu.prodandservices.add');
    }

    public function contactView(){
        return view('backend.menu.contact.view');
    }
    public function contactAdd(){
        return view('backend.menu.contact.add');
    }

    public function blogView(){
        return view('backend.menu.blog.view');
    }
    public function blogAdd(){
        return view('backend.menu.blog.add');
    }
}
