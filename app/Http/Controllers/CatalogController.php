<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // Replace with your actual model

class CatalogController extends Controller
{
    public function index()
    {
        $courses = Course::with('sections', 'plan')
            ->get();

        return view('catalog', ['courses' => $courses]);
    }

    public function filter(Request $request)
    {
        $price = $request->input('price');

        $courses = Course::when($price, function ($query, $price) {
            if (in_array('free', $price)) {
                $query->where('plan_id', 1);
            }

            if (in_array('paid', $price)) {
                $query->orWhere('plan_id', 2);
            }
        })->get();

        return view('catalog', compact('courses'));
    }

    public function sort(Request $request)
    {
        $sort = $request->input('sort');

        $courses = Course::with('sections', 'plan')
            ->when($sort == 'recent', function ($query) {
                $query->orderBy('created_at', 'desc');
            })
            ->when($sort == 'popular', function ($query) {
                $query->inRandomOrder();
            })
            ->get();

        return view('catalog', ['courses' => $courses]);
    }
}
