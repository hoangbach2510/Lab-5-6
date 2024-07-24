<?php
namespace App\Http\Controllers;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    public $san_phams;
    protected $view;
    public function __construct()
    {
        $this->san_phams = new SanPham();
        $this->view=[];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sử dụng Query Builder để lấy danh sách sản phẩm
        $this ->view['listSP'] = $this->san_phams->getAll();
        return view('sanpham.index', $this->view);
        
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->view['danh_mucs'] = DB::table('danh_mucs')
        ->select('id', 'ten_danh_muc')
        ->get();
        return view('sanpham.add', $this->view);
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'ten_san_pham' => ['required', 'string', 'max:255' ],
                'gia_san_pham' => ['required'],
                'so_luong' => ['required'],
                'mo_ta' => ['required'],
                'hinh_anh' => ['required'],
                'danh_muc_id' => ['required', 'exists:danh_mucs,id'],

            ],
            [
                'ten_san_pham.required' => 'Tên Sản Phẩm Không Được Bỏ Trống',
                'ten_san_pham.string' => 'Tên sản phẩm bắt buộc là chuỗi',
                'ten_san_pham.max' => 'Tên sản phẩm tối đa 255 kí tự',
                'gia_san_pham.required' => 'Giá Sản Phẩm Không Được Bỏ Trống',
                'so_luong.required' => 'Số Lượng Không Được Bỏ Trống',
                'mo_ta.required' => 'Mô Tả Không Được Bỏ Trống',
                'hinh_anh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'danh_muc_id.required' => 'Tên Danh Mục Không Được Bỏ Trống'
            ]
        );

       
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
