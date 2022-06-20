<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" id="navbarDropdownMenuLink2">
                                Aksi
                            </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                
                                    <form action="' . route('product.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '

                                    <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                                    <a href="' . route('product.edit', $item->id) . '" class="dropdown-item">Edit</a>
                                    </form>
                                </div>
                        </div>
                    </div>                
                ';
                })
                ->editColumn('price', function ($item) {
                    return 'Rp ' . number_format($item->price) . '';
                })
                ->rawColumns(['action', 'price'])
                ->make(true);
        }

        return view('pages.admin.produk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Product::create($data);

        toast('Produk ' . $request->seri . ' berhasil ditambahkan👍', 'success');

        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.admin.produk.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $product = Product::findOrFail($id);

        $product->update($data);

        toast('Produk ' . $request->seri . ' berhasil diupdate👍', 'success');

        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        toast('Produk berhasil dihapus👍', 'success');

        return redirect(route('product.index'));
    }
}