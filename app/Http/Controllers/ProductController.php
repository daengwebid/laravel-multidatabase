<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->paginate(10);
        $category = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('product', 'category'));
    }

    public function insertToMySQL(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'price' => 'required|integer'
        ]);

        Product::create([
            'title' => $request->title,
            'price' => $request->price
        ]);
        return redirect()->back();
    }

    public function insertToMongo(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string'
        ]);

        Category::create(['name' => $request->name]);
        return redirect()->back();
    }

    public function formEdit($id, $type)
    {
        if ($type == 'mysql') {
            $product = Product::find($id);
            return view('edit', compact('product', 'type'));
        }
        $category = Category::find($id);
        return view('edit', compact('category', 'type'));
    }

    public function update(Request $request, $id, $type)
    {
        if ($type == 'mysql') {
            $product = Product::find($id);
            $product->update([
                'title' => $request->title,
                'price' => $request->price
            ]);
            return redirect('/');
        }
        $category = Category::find($id);
        $category->update(['name' => $request->name]);
        return redirect('/');
    }

    public function deleteMySQL($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function deleteMongo($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
