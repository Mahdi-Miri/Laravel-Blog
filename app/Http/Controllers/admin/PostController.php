<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use mysql_xdevapi\Exception;
use function GuzzleHttp\Promise\all;

class PostController extends Controller
{

    public function creat()
    {
        return view('admin\pages\post\creat');
    }
    public  function store(Request $request){
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'keyword' => 'required',
            'about' => 'required',
            'file'=>'required|mimes:jpg,png,jpeg|max:300'

        ]);

        $fileNo=time().''.$request->file->extension();
        $filePath =('img'.$fileNo);
//        $request->file->move(public_path('img'),$fileNo
        if (Image::make($request->file)->fit(150,150)->save($filePath)){

            $post = new Post();

            $post->title = $request->title;
            $post->price = $request->price;
            $post->about = $request->about;
            $post->keyword = $request->keyword;
            $post->image = $filePath;


            try{
                $post->save();
            }
            catch (\Exception $exception){
                return redirect()->back();

            }
            return redirect()->route('admin.dashboard');
        }


    }
    public function edit(Post $post){
//        $post = Post::Where('id','=', $id)->first();
        return view('admin\pages\post\edit', compact('post'));
    }

    public function update(Request $request , Post $post){

//        $post = Post::firstWhere('id',$id);

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'keyword' => 'required',
            'about' => 'required'

        ]);
        $post->title = $request->title;
        $post->price = $request->price;
        $post->about = $request->about;
        $post->keyword = $request->keyword;

        try{
            $post->save();
        }
        catch (\Exception $exception){
            return redirect()->back();

        }
        return redirect()->route('admin.dashboard');

    }
}
