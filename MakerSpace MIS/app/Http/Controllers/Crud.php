<?php

namespace App\Http\Controllers;

use App\Models\Makerspace;
use Illuminate\Http\Request;

class Crud extends Controller
{
    // ...

    /**
     * Display the Makerspace Report List.
     *
     * @return \Illuminate\View\View
     */
    public function mindex()
    {
        $makerspaces = Makerspace::all();
        return view('admin.mview', compact('makerspaces'));
    }

    /**
     * Search for makerspaces by name.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function mSearch(Request $request)
    {
        $query = $request->input('query');
        $makerspaces = Makerspace::where('maker_space_name', 'like', '%' . $query . '%')->get();
        return view('admin.mview', compact('makerspaces'));
    }

    /**
     * Show the form for editing the specified makerspace.
     *
     * @param  \App\Models\Makerspace  $makerspace
     * @return \Illuminate\View\View
     */
    public function mEdit(Makerspace $makerspace)
    {
        return view('admin.medit', compact('makerspace'));
    }

    /**
     * Update the specified makerspace in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Makerspace  $makerspace
     * @return \Illuminate\Http\RedirectResponse
     */
    public function mUpdate(Request $request, Makerspace $makerspace)
    {
        $request->validate([
            'maker_space_name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'status' => 'required',
        ]);

        $makerspace->update($request->all());
        return redirect()->route('mview')->with('success', 'Makerspace updated successfully.');
    }

    /**
     * Remove the specified makerspace from storage.
     *
     * @param  \App\Models\Makerspace  $makerspace
     * @return \Illuminate\Http\RedirectResponse
     */
    public function mDestroy(Makerspace $makerspace)
    {
        $makerspace->delete();
        return redirect()->route('mview')->with('success', 'Makerspace deleted successfully.');
    }
}