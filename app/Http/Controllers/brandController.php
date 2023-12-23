<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
use Toastr;

class brandController extends Controller
{
    // brand
    public function addBrand()
    {
        return view('admin.brand.add_brand');
    }

    public function allBrand()
    {
        $brands = Brand::latest()->get();
        return view('admin.brand.all_brand', compact('brands'));
    }

    public function storeBrand(Request $request)
    {
        $img = $request->file('brand_img');
        $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        Image::make($img)
            ->resize(300, 300)
            ->save('upload/brand/' . $name_gen);
        $save_url = 'upload/brand/' . $name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            'brand_img' => $save_url,
        ]);

        Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

        return redirect()->route('all_brand');
    }

    public function brandEdit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brand.editBrand', compact('brand'));
    }

    public function updateBrand(Request $request)
    {
        $brand_id = $request->id;
        $old_img = $request->brand_images;

        if ($request->file('brand_img')) {
            $img = $request->file('brand_img');
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)
                ->resize(300, 300)
                ->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_img' => $save_url,
            ]);

            Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

            return redirect()->route('all_brand');
        } else {
            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            ]);

            Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

            return redirect()->route('all_brand');
        }
    }

    public function deleteBrand($id)
    {
        Brand::findOrFail($id)->delete();
        Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);
        return redirect()->route('all_brand');
    }

    // category




}
