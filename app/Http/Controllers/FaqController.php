<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use finfo;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::filter(request(['pertanyaan']))->paginate(5)->withQueryString();;
        return view('faq.index', [
            'title' => 'FAQ',
            'faqs' => $faq
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.create', [
            'title' => 'FAQ'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'link' => ''
        ]);

        Faq::create($validatedData);
        return redirect('/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view('faq.show', [
            'title' => 'FAQ',
            'faq' => $faq
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($faq)
    {
        $faq = Faq::find($faq);
        return view('faq.edit', [
            'title' => 'FAQ',
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faq)
    {
        $validatedData = $request->validate([
            'pertanyaan' => '',
            'jawaban' => '',
            'link' => ''
        ]);

        Faq::where('id', $faq)->update($validatedData);
        return redirect('/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        Faq::destroy($faq);

        return redirect('/faq')
            ->with('success', 'data berhasil dihapus');
    }
}
