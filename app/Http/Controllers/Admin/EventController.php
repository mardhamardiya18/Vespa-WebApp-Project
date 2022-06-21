<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Event::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" id="navbarDropdownMenuLink2">
                                Aksi
                            </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                
                                    <form action="' . route('event.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '

                                    <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                                    <a href="' . route('event.edit', $item->id) . '" class="dropdown-item">Edit</a>
                                    </form>
                                </div>
                        </div>
                    </div>                
                ';
                })
                ->editColumn('photos', function ($item) {

                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" width="300"/>' : '';
                })
                ->rawColumns(['action', 'photos'])
                ->make(true);
        }

        return view('pages.admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.event.create');
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


        $data['photos'] = $request->file('photos')->store('event/photos', 'public');

        Event::create($data);

        toast('Event berhasil dipublish👍', 'success');

        return redirect(route('event.index'));
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
        $event = Event::findOrFail($id);


        return view('pages.admin.event.edit', [
            'event' => $event,
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
        $data = Event::findOrFail($id);

        if ($request->photos) {
            Storage::disk('public')->delete($data->photos);
            $item['photos'] = $request->file('photos')->store('event/photos', 'public');
        } else {
            unset($item['photos']);
        }

        $data->update($item);


        toast('Event berhasil diupdate👍', 'success');

        return redirect(route('event.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Event::findOrfail($id);
        Storage::disk('public')->delete($post->photos);

        $post->delete();

        toast('Event berhasil dihapus👍', 'success');

        return redirect(route('event.index'));
    }
}