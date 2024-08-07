<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
class DanhMucController extends Controller
{
    public $danh_mucs;
    protected $view;
    public function __construct()
    {
        $this->danh_mucs = new DanhMuc();
        $this->view = [];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this ->view['danh_mucs'] = $this->danh_mucs->getAll();
        return view('danhmuc.index', $this->view);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('danhmuc.add', $this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'ten_danh_muc' => ['required', 'string', 'max:255' ],
            ],
            [
                'ten_danh_muc.required' => 'Tên Danh Mục Không Được Để Trống',
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
