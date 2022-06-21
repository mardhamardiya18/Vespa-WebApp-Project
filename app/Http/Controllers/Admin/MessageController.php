<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Contact::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" id="navbarDropdownMenuLink2">
                                Aksi
                            </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                
                                    <form action="' . route('message.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '

                                    <button class="text-danger dropdown-item" type="submit" >Hapus</button>
                                    
                                    </form>
                                </div>
                        </div>
                    </div>                
                ';
                })

                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.message.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contact::findOrfail($id);

        $data->delete();

        toast('Pesan berhasil dihapus👍', 'success');

        return redirect(route('message.index'));
    }
}