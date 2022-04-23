<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller //terinisialisasi dengan route
{
    public function home(){
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function store(Request $request){
        
        $request->validate([
            'produk_name' => 'required|max:3|min:1', // required = constrain
            'price' => 'required',
            'stock' => 'required'

        ]);
        //isi data ke database
        Product::create($request->all()); //ini isi data jika data nama colom pada database berurutan dengan colom laravel
        // Product::create([
        //     'produk_name' => $request->namaProduct,
        //     'price' => $request->price,
        //     'stock' => $request->stok
        // ]);
        //return back();//mengembalikan ke page yang sebelumnya/dari page store(hanya mengisi data) langsung ket tambah data
        return redirect('/product');//langsung ke page product
    }

    public function category1(Request $request){
        Category::create($request->all());
        return redirect('/category');
    }

    public function product(){
        $product = Product::all();  //data akan diambil semua
 
        return view('product', compact('product'));
    }


    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function edit($id){ //id ini di lempar ke route
        $produk = Product::findOrFail($id);
        $categories = Category::all();
        //$produk = Product::where('id', $id)->first(); 
        return view('update', compact('produk'), compact('categories'));
    }
    public function update(Request $request, $id)
    {

        Product::findOrFail($id)->update($request->all()); //mengupdate sesuai urutan antara data tabel di database
        //dan di laravel
        // Product::where('id', $id)->update([
        //     'produk_name' => $request->namaProduct,
        //     'price' => $request->price,
        //     'stock' => $request->stok
        // ]);
        return redirect('/product');
    }

    public function edit_category($id){
        $categori = Category::findOrFail($id);
        return view('/edit_category', compact('categori'));
    }

    public function fix_update_category(Request $request, $id){
        Category::findOrFail($id)->update($request->all());

        return redirect('/category');
    }

    public function delete($id){
        Product::destroy($id);
        return back();
    }

    public function delete_category($id){
        Category::destroy($id);
        return back();
    }

    public function category(){
        $category = Category::all();
        return view('category_view', compact('category'));
    }
}
