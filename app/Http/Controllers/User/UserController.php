<?php

namespace App\Http\Controllers\User;

use App\Events\NewComment;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    //Send Post
    public function question(Request $request){




        if ($request->hasFile('images')) {
            $validator = Validator::make($request->all(), [
                'post_media' => 'mimes:jpeg,jpg,png,gif|max:10000',
             ]);
            $image = array();
            if($files = $request->file('images')){
                foreach($files as $file){
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($file->extension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path='public/AskQuestion/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path,$image_full_name);
                    $image[] = $image_url;
                }
            }
            if($validator->fails()) {
                return response()->json(['status'=>'fail','msg'=>$validator->getMessageBag()->first()]);
            }
        } else {
            $validator = Validator::make($request->all(), [
                'post_content' => 'required|min:1',
             ]);
            if($validator->fails()) {
                return response()->json(['status'=>'fail','msg'=>$validator->getMessageBag()->first()]);
            }
            $image = $request->images;
        }
         $InsetPost = Post::create([
            'post_content'=>$request->post_content,
            'post_media'=>$image,
            'user_id'=>Auth::id(),
         ]);
         if($InsetPost){
            return response()->json(['status'=>'success','data'=>'Post uploaded']);
        }


    }


}
