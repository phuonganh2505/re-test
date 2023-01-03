<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;

class ReTestController extends Controller
{
    public function index()
    {
        $data = DB::table('retest')->get();
        return view('re-test.index', ['data' => $data]);
    }
    public function create()
    {
        return view('re-test.create');
    }
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();
        DB::table('retest')->insert($data);

        return redirect()->route('index')->with('success', "Create Successfully!!");
    }

    public function edit($id)
    {
        // dd($id);
        $data = DB::table('retest')->where('id', $id)->first();
        // dd($data);
        return view('re-test.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();
        DB::table('retest')->where('id', $id)->update($data);
        return redirect()->route('index')->with('success', "Update Successfully");
    }

    public function destroy($id)
    {
        DB::table('retest')->where('id', $id)->delete();
        return redirect()->route('index')->with('success', "Delete Successfully");
    }
}
