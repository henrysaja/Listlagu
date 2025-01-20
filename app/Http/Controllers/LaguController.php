<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Lagu::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('nomor_lagu', 'like', "%{$search}%")
                  ->orWhere('nama_lagu', 'like', "%{$search}%");
        }

        $lagus = $query->get();

        return view('lagu.index', compact('lagus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lagu.create_lagu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_lagu' => 'required|integer',
            'nama_lagu' => 'required|string|max:255',
            'link_lagu' => 'required|string|max:255',
        ]);

        Lagu::create([
            'nomor_lagu' => $request->nomor_lagu,
            'nama_lagu' => $request->nama_lagu,
            'link_lagu' => $request->link_lagu,
        ]);

        return redirect()->route('lagu.index')->with('success', 'Lagu created successfully.');
    }
}
