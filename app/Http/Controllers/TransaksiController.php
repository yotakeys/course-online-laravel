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


    public function getAllTransaksi(Request $request)
    {
        $request->validate([
            'search' => 'nullable|max:255',
        ]);

        if ($request->search) {
            $transaksis = Transaksi::with(['user', 'plan', 'status'])
                ->whereHas('user', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
                ->orWhereHas('user', function ($query) use ($request) {
                    $query->where('email', 'like', '%' . $request->search . '%');
                })
                ->orWhereHas('status', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
                ->get();
        } else {
            $transaksis = Transaksi::with(['user', 'plan', 'status'])->get();
        }

        $statuses = Status::all();

        return view('admin.list-transaksi', ['transaksis' => $transaksis, 'statuses' => $statuses, 'search' => $request->search]);
    }

    public function transaksiDetail(int $id)
    {
        $transaksi = Transaksi::with(['user', 'plan', 'status'])->find($id);
        $statuses = Status::all();
        return view('admin.transaksi-detail', ['transaksi' => $transaksi, 'statuses' => $statuses]);
    }

    public function changeStatusTransaksi(Request $request, int $id)
    {
        $request->validate([
            'status_id' => 'required',
            'report' => 'required',
        ]);

        $transaksi = Transaksi::find($id);
        $transaksi->status_id = $request->status_id;
        $transaksi->report = $request->report;
        $transaksi->save();

        return redirect()->route('admin.transaksi.list')->with('success', 'Status transaksi updated successfully');
    }
}
