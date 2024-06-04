<?php

namespace App\Http\Controllers\Admin;

use App\Models\Module;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.modules.index', [
                    'modules' => Module::all(),
                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:modules|max:255',
        ]);

        Module::create($data);

        return redirect()->route('admin.modules.index')
        ->with('success','Module Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        return view('admin.modules.show', [
            'module' => $module,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('admin.modules.index')
        ->with('success','Module Deleted Successfully');
    }
}
