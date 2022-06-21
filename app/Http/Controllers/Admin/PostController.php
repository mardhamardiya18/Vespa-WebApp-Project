<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Articel::query()->with('user');

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" id="navbarDropdownMenuLink2">
                                Aksi
                            </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                
                                    <form action="' . route('artikel.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '

                                    <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                                    <a href="' . route('artikel.edit', $item->id) . '" class="dropdown-item">Edit</a>
                                    </form>
                                </div>
                        </div>
                    </div>                
                ';
                })
                ->editColumn('thumbnail', function ($item) {

                    return $item->photos ? '<img src="' . Storage::url($item->thumbnail) . '"/>' : '';
                })
                ->rawColumns(['action', 'thumbnail'])
                ->make(true);
        }

        return view('pages.admin.artikel.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('pages.admin.artikel.post.create', [
            'categories' => $categories
        ]);
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

        $data['thumbnail'] = $request->file('thumbnail')->store('artikel/thumbnial', 'public');
        $data['photos'] = $request->file('photos')->store('artikel/photos', 'public');

        $data['slug'] = Str::slug($request->title);

        Articel::create($data);

        toast('Artikel berhasil dipublish👍', 'success');

        return redirect(route('artikel.index'));
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

        $post = Articel::with(['category'])->findOrFail($id);
        $categories = Category::all();


        return view('pages.admin.artikel.post.edit', [
            'post' => $post,
            'categories' => $categories,
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
        $item = $request->all();
        $data = Articel::findOrFail($id);

        $item['slug'] = Str::slug($request->title);

        if ($request->thumbnail) {
            Storage::disk('public')->delete($data->thumbnail);
            $item['thumbnail'] = $request->file('thumbnail')->store('artikel/thumbnail', 'public');
        } else {
            unset($item['thumbnail']);
        }

        if ($request->photos) {
            Storage::disk('public')->delete($data->photos);
            $item['photos'] = $request->file('photos')->store('artikel/photos', 'public');
        } else {
            unset($item['photos']);
        }

        $data->update($item);


        toast('Artikel berhasil diupdate👍', 'success');

        return redirect(route('artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Articel::findOrfail($id);
        Storage::disk('public')->delete($post->thumbnail);
        Storage::disk('public')->delete($post->photos);

        $post->delete();

        toast('Artikel berhasil dihapus👍', 'success');

        return redirect(route('artikel.index'));
    }
}