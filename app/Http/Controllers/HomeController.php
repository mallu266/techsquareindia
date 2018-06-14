<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aboutus;
use App\MainPage;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('home');
    }

    public function getlogo() {
        $response = DB::table('crediantials')->select('id', 'logo')->get();
        return view('admin.logo', ['response' => $response]);
    }

    public function deletelogo($id) {
        DB::table('crediantials')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function postlogo(Request $request) {
        $logo = $request->file('logo');
        $folder = 'logo';
        $image = self::upload_images($logo, $folder);
        $data['logo'] = $image;
        DB::table('crediantials')->insert($data);
        return back()->with('success', 'Successful uploaded');
    }

    public static function upload_images($file, $folder, $existing_file = false) {
        if (!empty($file)) {
            $extension = $file->getClientOriginalExtension();
            $fileName1 = str_random($length = 15) . '.' . $extension;
            $paths = public_path() . '/' . $folder;
            if (!empty($existing_file)) {
                unlink($paths . '' . $existing_file);
            }
            if (!file_exists($paths)) {
                mkdir($paths, 0777, true);
            }
            $file->move($paths, $fileName1);
            return $fileName1;
        }
    }

    public function getslides() {
        $response = DB::table('slides')->select('id', 'slide', 'title')->get();
        return view('admin.slides', ['response' => $response]);
    }

    public function postslides(Request $request) {
        $field = $request->file('slide');
        $title = $request->get('title');
        $folder = 'slides';
        $image = self::upload_images($field, $folder);
        $data['slide'] = $image;
        $data['title'] = $title;
        DB::table('slides')->insert($data);
        return back()->with('status', 'Successful uploaded');
    }

    public function deleteslide($id) {
        DB::table('slides')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function getthumbnails() {
        $response = DB::table('thumbnails')->select('id', 'description', 'title', 'image')->get();
        return view('admin.thumbnails', ['response' => $response]);
    }

    public function postthumbnails(Request $request) {
        $field = $request->file('image');
        $title = $request->get('title');
        $description = $request->get('description');
        $folder = 'thumbnails';
        $image = self::upload_images($field, $folder);
        $data['image'] = $image;
        $data['title'] = $title;
        $data['description'] = $description;
        DB::table('thumbnails')->insert($data);
        return back()->with('status', 'Successful uploaded');
    }

    public function deletethumbnails($id) {
        DB::table('thumbnails')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function getcategory() {
        $response = DB::table('products')->select('id', 'product')->get();
        return view('admin.products', ['response' => $response]);
    }

    public function postcategory(Request $request) {
        $product = $request->get('product');
        $data['product'] = $product;
        DB::table('products')->insert($data);
        return back()->with('status', 'Successful uploaded');
    }

    public function deletecategory($id) {
        DB::table('products')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function getresources() {
        $products = DB::table('products')->select('id', 'product')->get();
        $response = DB::table('resources')->select('id', 'title', 'image', 'description')->get();
        return view('admin.resources', ['response' => $response, 'products' => $products]);
    }

    public function postresources(Request $request) {
        $product_id = $request->get('product_id');
        $title = $request->get('title');
        $specifications = $request->get('specifications');
        $field = $request->file('image');
        $brouchers = $request->file('broucher');
        $description = $request->get('description');
        $folder = 'resources';
        $folder1 = 'resources/brouchers';
        $image = self::upload_images($field, $folder);
        $broucher = self::upload_images($brouchers, $folder1);
        $data['product_id'] = $product_id;
        $data['specifications'] = $specifications;
        $data['title'] = $title;
        $data['image'] = $image;
        $data['brouchers'] = $broucher;
        $data['description'] = $description;
        DB::table('resources')->insert($data);
        return back()->with('status', 'Successful uploaded');
    }

    public function deleteresources($id) {
        DB::table('resources')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function getaboutus($id = NULL) {
        $response = DB::table('about_us')->select('id', 'about_us')
                ->where(function ($query) use($id) {
                    if ($id) {
                        $query->where([
                                ['id', $id]
                        ]);
                    }
                })
                ->first();
        return view('admin.about_us', ['response' => $response]);
    }

    public function postaboutus(Request $request) {
        $id = $request->get('id');
        if ($id) {
            $about_us = Aboutus::find($id);
        } else {
            $about_us = new Aboutus();
        }
        $about_us->about_us = $request->get('about_us');
        $about_us->save();
        return back()->with('status', 'Successful uploaded');
    }

    public function deleteaboutus($id) {
        DB::table('about_us')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function getdefault($id = NULL) {
        $response = DB::table('main_pages')->select('id', 'default')
                ->where(function ($query) use($id) {
                    if ($id) {
                        $query->where([
                                ['id', $id]
                        ]);
                    }
                })
                ->first();
        return view('admin.default', ['response' => $response]);
    }

    public function postdefault(Request $request) {
        $id = $request->get('id');
        if ($id) {
            $mainpage = MainPage::find($id);
        } else {
            $mainpage = new MainPage();
        }
        $mainpage->default = $request->get('default');
        $mainpage->save();
        return back()->with('status', 'Successful uploaded');
    }

    public function deletedefault($id) {
        DB::table('main_pages')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

}
