<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Config;
use Image;
use Laracasts\Flash\Flash;
use File;


class SliderController extends Controller
{
    protected $with;
    protected $height;
    protected $imgDir;

    public function __construct(){
        $config = Config::get('cms');

        $this->width = $config['modules']['slider']['image_size']['width'];
        $this->height = $config['modules']['slider']['image_size']['height'];
        $this->imgDir = $config['modules']['slider']['image_dir'];
    }

    public function index(){
        $sliders=Slider::orderBy('created_at',"DESC")->paginate(5);
        return view('backend.slider.index',compact('sliders'));
    }

    public function create(){
        return view('backend.slider.create');
    }

    public function store(Request  $request){

        $formData=$request->all();
        $slider=new Slider();
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $destinationPath = public_path().$this->imgDir;
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getSize();

            $upload_success = $file->move($destinationPath, $fileName);

            // resizing an uploaded file
            Image::make($destinationPath.$fileName)->resize($this->width, $this->height)->save($destinationPath.$fileName);

            $slider->file_name = $fileName;
            $slider->file_size = $fileSize;

            $slider->path = $this->imgDir.$fileName;
        }

        $slider->title = $formData['title'];
        $slider->description = $formData['description'];
        $slider->lang = getLang();
        $slider->save();

        Flash::message('Slider was successfully added');

        return route('admin.sliders');
    }

    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update($id)
    {
        $formData = \request()->all();
        $slider = Slider::findOrFail($id);

        if (isset($formData['image'])) {
            if ($file = $formData['image']) {

                // delete old image
                $destinationPath = public_path().$this->imgDir;
                File::delete($destinationPath.$slider->file_name);

                $destinationPath = public_path().$this->imgDir;
                $fileName = $file->getClientOriginalName();
                $fileSize = $file->getClientSize();
                $upload_success = $file->move($destinationPath, $fileName);
                if ($upload_success) {
                    // resizing an uploaded file
                    Image::make($destinationPath.$fileName)->resize($this->width, $this->height)->save($destinationPath.$fileName);
                    $slider->file_name = $fileName;
                    $slider->file_size = $fileSize;
                    $slider->path = $this->imgDir.$fileName;
                }
            }
        }
        $slider->title = $formData['title'];
        $slider->description = $formData['description'];
        $slider->save();
        Flash::message('Slider was successfully updated');
        return route('admin.slider.index');
    }
    public function destroy($id)
    {
        $slider = Slider::with('images')->findOrFail($id);
        $destinationPath = public_path().$this->imgDir;

        File::delete($destinationPath.$slider->file_name);
        $slider->delete();

        Flash::message('Slider was successfully deleted');

        return route('admin.sliders.index');
    }

    public function confirmDestroy($id)
    {
        $slider = Slider::findOrFail($id);

        return view('backend.slider.confirm-destroy', compact('slider'));
    }
}
