<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Status;
use App\Models\Plan;

class TransaksiController extends Controller
{
    public function formAddTransaksiByPlanId(int $id)
    {
        $plans = Plan::find($id);

        return view('transaksi.transaksi-add-by-plan-id', ['plans' => $plans]);
    }

    public function addTransaksi(Request $request)
    {
        $request->validate([
            'total_price' => 'required',
            'image_url' => 'required',
            'plan_id' => 'required',
        ]);

        Transaksi::create([
            'user_id' => auth()->user()->id,
            'status' => 1,
            'total_price' => $request->total_price,
            'image_url' => $request->image_url,
            'plan_id' => $request->plan_id,
        ]);
    }


    public function getAllTransaksi()
    {
        $transaksis = Transaksi::all();

        return view('transaksi.transaksi-all', ['transaksis' => $transaksis]);
    }

    public function getTransaksiById(int $id)
    {
        $transaksis = Transaksi::find($id);
        $status = Status::all();

        return view('transaksi.transaksi-by-id', ['transaksis' => $transaksis, 'status' => $status]);
    }

    public function changeStatusTransaksi(Request $request, int $id)
    {
        $request->validate([
            'status' => 'required',
            'report' => 'required',
        ]);

        $transaksi = Transaksi::find($id);
        $transaksi->status = $request->status;
        $transaksi->report = $request->report;
        $transaksi->save();
    }
}
