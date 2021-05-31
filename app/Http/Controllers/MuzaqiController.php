<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Muzaqi;
use App\Models\Amilin;
use App\Models\Mustahiq;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class MuzaqiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzaqi = Muzaqi::all();
        $amilin = Amilin::all();
        $zakat =  Product::all()->where('jenis', 0)->where('status', 1);
        $zakats =  Product::all()->where('jenis', 1)->where('status', 1);
        return view('muzaqi.index', compact('muzaqi', 'amilin', 'zakat', 'zakats')); 
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

    public function print()
    {
        $muzaqi = Muzaqi::all();
        $mid = Muzaqi::count('id');
        $t_jiwa = Muzaqi::sum('jiwa');
        $t_zuang = Muzaqi::whereType('0')->sum('z_uang');
        $t_zberas = Muzaqi::whereType('1')->sum('z_beras');
        $t_suang = Muzaqi::whereType('0')->sum('s_uang');
        $t_sberas = Muzaqi::whereType('1')->sum('s_beras');
        $t_saldo = Muzaqi::whereType('0')->sum('saldo');
        $zakat =  Product::all()->where('jenis', 0)->where('status', 1);
        $zakats =  Product::all()->where('jenis', 1)->where('status', 1);
        return view('muzaqi.print', compact('muzaqi', 'zakat', 'zakats', 't_jiwa', 't_zuang', 't_zberas', 't_suang', 't_sberas', 't_saldo', 'mid')); 
    }


    public function pembagian()
    {
        $muzaqi = Muzaqi::all();
        $m_fm = Mustahiq::where('category_id', 1)->count('id');
        $m_fb =Mustahiq::where('category_id', 3)->count('id');
        $m_a = Mustahiq::where('category_id', 2)->count('id');
        $t_zuang = Muzaqi::whereType('0')->sum('z_uang');
        $t_zberas = Muzaqi::whereType('1')->sum('z_beras');
        $t_suang = Muzaqi::whereType('0')->sum('s_uang');
        $t_sberas = Muzaqi::whereType('1')->sum('s_beras');
        $t_saldo = Muzaqi::whereType('0')->sum('saldo');
        $zakat =  Product::all()->where('jenis', 0)->where('status', 1);
        $zakats =  Product::all()->where('jenis', 1)->where('status', 1);
        return view('muzaqi.pembagian', compact('muzaqi', 'zakat', 'zakats', 't_zuang', 't_zberas', 't_suang', 't_sberas', 't_saldo', 'm_fm', 'm_fb', 'm_a')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'type' => 'required',
            'jiwa' => 'required|integer',
            'z_uang' => 'nullable',
            'z_beras' => 'nullable',
            's_uang' => 'nullable',
            's_beras' => 'nullable',
            'amilin_id' => 'required'

        ]);
        $saldo = $request->z_uang * $request->jiwa;
        try{
            DB::beginTransaction();
            $product = Muzaqi::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'type' => $request->type,
                'jiwa' => $request->jiwa,
                'z_uang' => $saldo,
                'z_beras' => $request->z_beras * $request->jiwa,
                's_uang' => $request->s_uang,
                's_beras' => $request->s_beras,
                'saldo' => $saldo + $request->s_uang,
                'tanggal' => date('Y-m-d'),
                'amilin_id' => $request->amilin_id
             ]);
        DB::commit();
                //REDIRECT DAN KIRIMKAN PESAN
                return redirect(route('muzaqi.index'))->with(['success' => 'Allahumma Shalli Alaihim']);
        } catch(\Exception $e) {
            //JIKA TERJADI ERROR, MAKA ROLLBACK SELURUH PROSES QUERY
            DB::rollback();
            //DAN KIRIMKAN PESAN ERROR
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $muzaqi = Muzaqi::find($id);

        return view('muzaqi.detail', compact('muzaqi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muzaqi = Muzaqi::find($id);
        $amilin = Amilin::all();
        $zakat =  Product::all()->where('jenis', 0)->where('status', 1);
        $zakats =  Product::all()->where('jenis', 1)->where('status', 1);
        return view('muzaqi.edit', compact('muzaqi', 'amilin', 'zakat', 'zakats'));
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
         $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'type' => 'required',
            'jiwa' => 'required|integer',
            'z_uang' => 'nullable',
            'z_beras' => 'nullable',
            's_uang' => 'nullable',
            's_beras' => 'nullable',
            'amilin_id' => 'required'

        ]);

         $muzaqi=Muzaqi::find($id);
        $muzaqi->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'type' => $request->type,
            'jiwa' => $request->jiwa,
            'z_uang' => $request->z_uang * $request->jiwa,
            'z_beras' => $request->z_beras * $request->jiwa,
            's_uang' => $request->s_uang,
            's_beras' => $request->s_beras,
            'saldo' => $request->z_uang + $request->s_beras,
            'amilin_id' => $request->amilin_id
             ]);

    return redirect(route('muzaqi.index'))->with(['success' => 'Data Muzaqi Berhasil Di Perbaharui']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $muzaqi = Muzaqi::find($id);
    //KEMUDIAN HAPUS DATA PRODUK DARI DATABASE
    $muzaqi->delete();
    //DAN REDIRECT KE HALAMAN LIST PRODUK
    return redirect(route('muzaqi.index'))->with(['success' => 'Data Sudah Dihapus']);
    }
}
