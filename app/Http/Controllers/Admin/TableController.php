<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('layouts.Add_table', compact('tables'));
    }

    public function create()
    {
        return view('layouts.create_table');
    }

    public function store(Request $request)
    {
        $request->validate([
            'table_number' => 'required|unique:tables',
            'seating_capacity' => 'required|integer|min:1',
        ]);

        Table::create($request->all());

        return redirect()->route('tables.index')->with('success', 'Table added successfully.');
    }

    public function edit(Table $table)
    {
        return view('layouts.edit_table', compact('table'));
    }

    public function update(Request $request, Table $table)
    {
        $request->validate([
            'table_number' => 'required|unique:tables,table_number,' . $table->id,
            'seating_capacity' => 'required|integer|min:1',
        ]);

        $table->update($request->all());

        return redirect()->route('tables.index')->with('success', 'Table updated.');
    }

    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('tables.index')->with('success', 'Table deleted.');
    }
}

