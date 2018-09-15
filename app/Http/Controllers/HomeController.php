<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aboutus;
use App\MainPage;
use App\Resources;
use App\PriPolicy;
use Exception;
use App\Crediantials;

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
        $products = DB::table('products')->select('id', 'product')->get();
        $resources = DB::table('resources')->select('id', 'title')->get();
        return view('admin.slides', ['response' => $response, "products" => $products, 'resources' => $resources]);
    }

    public function get_resources($id) {
        $response = DB::table('resources')
                ->select('id', 'title')
                ->where('product_id', $id)
                ->get();
        echo "<option value=''>Select Resource</option>";
        foreach ($response as $field) {
            echo "<option value='" . $field->id . "'>" . $field->title . "</option>";
        }
    }

    public function postslides(Request $request) {
        try {
            $field = $request->file('slide');
            $title = $request->get('title');
            $product_id = $request->get('product_id');
            $resource_id = $request->get('resource_id');
            $folder = 'slides';
            $image = self::upload_images($field, $folder);
            $data['slide'] = $image;
            $data['title'] = $title;
            $data['product_id'] = $product_id;
            $data['resource_id'] = $resource_id;
            DB::table('slides')->insert($data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
        }
        return back()->with('status', 'Successful uploaded');
    }

    public function deleteslide($id) {
        DB::table('slides')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function getthumbnails() {
        $products = DB::table('products')->select('id', 'product')->get();
        $resources = DB::table('resources')->select('id', 'title')->get();
        $response = DB::table('thumbnails')->select('id', 'description', 'title', 'image')->get();
        return view('admin.thumbnails', ['response' => $response, 'products' => $products, 'resources' => $resources]);
    }

    public function postthumbnails(Request $request) {
        $field = $request->file('image');
        $title = $request->get('title');
        $product_id = $request->get('product_id');
        $resource_id = $request->get('resource_id');
        $description = $request->get('description');
        $folder = 'thumbnails';
        $image = self::upload_images($field, $folder);
        $data['image'] = $image;
        $data['title'] = $title;
        $data['description'] = $description;
        $data['product_id'] = $product_id;
        $data['resource_id'] = $resource_id;
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

    public function editresources($id) {
        $products = DB::table('products')->select('id', 'product')->get();
        $response = DB::table('resources')->select('id', 'title', 'image', 'description')->get();
        $resources = DB::table('resources')->where('id', $id)->first();
        return view('admin.resources', ['response' => $response, 'products' => $products, 'resources' => $resources]);
    }

    public function postresources(Request $request) {
        $id = $request->get('id');
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
        if ($image) {
            $data['image'] = $image;
        }
        if ($broucher) {
            $data['brouchers'] = $broucher;
        }
        $data['description'] = $description;
        if ($id) {
            DB::table('resources')->where('id', $id)->update($data);
        } else {
            DB::table('resources')->insert($data);
        }




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

    public function getpripolicy($id = NULL) {
        $response = DB::table('pri_policies')->select('id', 'pripolicy')
                ->where(function ($query) use($id) {
                    if ($id) {
                        $query->where([
                                ['id', $id]
                        ]);
                    }
                })
                ->first();
        return view('admin.pripolicy', ['response' => $response]);
    }

    public function postpripolicy(Request $request) {
        $id = $request->get('id');
        if ($id) {
            $mainpage = PriPolicy::find($id);
        } else {
            $mainpage = new PriPolicy();
        }
        $mainpage->pripolicy = $request->get('pripolicy');
        $mainpage->save();
        return back()->with('status', 'Successful uploaded');
    }

    public function deletepripolicy($id) {
        DB::table('pri_policies')->where('id', $id)->delete();
        return back()->with('status', 'Deleted Successfully');
    }

    public function maintainance($value) {
        $crediantials = Crediantials::first();
        if ($value == 'Live') {
            $status = 0;
        } else {
            $status = 1;
        }
        $crediantials->live = $status;
        if ($crediantials->save()) {
            return 'true';
        } else {
            return 'false';
        }
    }

}
