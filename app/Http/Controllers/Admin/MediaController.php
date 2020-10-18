<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MediaRequest;
use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::paginate(10);
        return view('admin.media.index',compact('media'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(MediaRequest $request)
    {

        $file = $request->file;
        $name = uniqid('media').rand(1,1200).'.'.$file->getClientOriginalExtension();

        $media = $file->move(public_path('media'),$name);

        // TODO = change user_id
        Media::create([
            'path' => $name,
            'user_id' => 1
        ]);

        return redirect(route('media.index'))->with('status','با موفقیت ثبت گردید!');

    }


    public function destroy($id)
    {
        // TODO = Unlink file

        $media = Media::find($id);
        $media->delete();
        return redirect(route('media.index'))->with(['class' => 'danger' , 'status' => 'با موفقیت حذف گردید!']);
    }



}
