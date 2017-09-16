<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRoles;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image as Image;
use App\Helpers\ImageHelper;

class Users extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return User::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function advisorlist() {

         return User::where('user_type', '=', 'advisor')->orderBy('id', 'desc')->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $User = new User;

        $User->name = $request->input('name');
		$User->email = $request->input('email');
        $User->password = bcrypt($request->input('password'));
        $User->gender = $request->input('gender');
		//$User->user_type = $request->input('user_type');
		$User->day = $request->input('day');
		$User->month = $request->input('month');
		$User->year = $request->input('year');
        $user_type = $request->input('user_type');
        $User->user_type = $user_type;


        //save image and video
        $image_name = $request->input('image_name') ;
        $image_data = $request->input('image_data');

        $video_name = $request->input('video_name') ;
        $video_data = $request->input('video_data');
        $video  = $request->input('video');

        $test = '';
        if(!empty($image_data)) {
            $output_file = $_SERVER["DOCUMENT_ROOT"] . '/admin/images/users/' . $image_name;
            $ifp = fopen($output_file, "wb");
            $data = explode(',', $image_data);
            fwrite($ifp, base64_decode($data[1]));
            fclose($ifp);
            $img = Image::make('admin/images/users/' . $image_name);
            $img->fit(449, 300);
            $img->save('admin/images/users/' . $image_name);
            $User->image = $image_name;
        }

        if(!empty($video_data)) {
            $output_file = $_SERVER["DOCUMENT_ROOT"] . '/admin/images/video/' . $video_name;
            $ifp = fopen($output_file, "wb");
            $data = explode(',', $video_data);
            fwrite($ifp, base64_decode($data[1]));
            fclose($ifp);
            $User->video_name = $video_name;
            $User->video = $video;
        }
        //
        $User->save();
        if($User->id != 0) {
            $UserRole = new UserRoles;
            $UserRole->user_id = $User->id;
            if($user_type == 'client') $UserRole->role = 5;
            if($user_type == 'advisior') $UserRole->role = 6;
            $UserRole->save();
        }



        return 'User record successfully created with id ' . $User->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $User = User::find($id);
		$User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = bcrypt($request->input('password'));
        $User->gender = $request->input('gender');
		//$User->user_type = $request->input('user_type');
		$User->day = $request->input('day');
		$User->month = $request->input('month');
		$User->year = $request->input('year');
		$User->save();

        return "Sucess updating user #" . $User->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $User = User::find($request->input('id'));

        $User->delete();

        return "User record successfully deleted #" . $request->input('id');
    }
	
	public function dashboard()
	{
		
	}
} 