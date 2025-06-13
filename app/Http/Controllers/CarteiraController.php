<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carteira;


class CarteiraController extends Controller

{


    public function index()
    {
        $carteiras = Carteira::where('user_id', Auth()->id())->get();
        
        return view('carteiras.index', compact('carteiras'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carteiras = Carteira::where('user_id', Auth::id())->get();

        return view('carteiras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           
            $data = $request->validate([
                'nome' => 'required|string:max:225',
                'saldo'        => 'required',
                'imagem'     => 'required'
            ]);
    
            $data['user_id'] = Auth::id();

               if($request ->hasfile('imagem')){
                $data['imagem'] = $request ->file('imagem')->store('uploads', 'public');
            } 

            $carteira = Carteira::create($data);
    
            return redirect()
                ->route('carteiras.show', $carteira)
                ->with('success', 'Carteira criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carteira = Carteira::where('user_id', Auth::id())->findOrFail($id);
        return view('carteiras.show', compact('carteira'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $carteira =Carteira::findOrFail($id);

        return view('carteiras.edit', compact('carteira'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carteira = Carteira::where('user_id', Auth::id())->findOrFail($id);
   
        $data = $request->validate([
            'nome'   => 'required|string|max:255',
            'saldo'  => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
   
        $data['user_id'] = Auth::id();
   
        // Verifica se uma nova imagem foi enviada
        if ($request->hasFile('imagem')) {
            // Exclui a imagem antiga, se existir
            if ($carteira->imagem) {
                \Storage::disk('public')->delete($carteira->imagem);
            }
   
            $data['imagem'] = $request->file('imagem')->store('uploads', 'public');
        }
   
        $carteira->update($data);
   
        return redirect()
            ->route('carteiras.show', $carteira)
            ->with('success', 'Carteira atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carteira =Carteira::findOrFail($id);
        
        $carteira->delete();

        return redirect()
            ->route('carteiras.index')
            ->with('success', '$carteira excluída com sucesso!');
    }
}


