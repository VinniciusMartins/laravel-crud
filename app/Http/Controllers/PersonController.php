<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function index() {
        $personGroup = Person::orderBy('id', 'desc')->paginate(5);
        return view('personGroup.index', compact('personGroup'));
    }

    public function create() {
        return view('personGroup.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'email' => 'required',
        ]);

        Person::create($request->post());

        return redirect()->route('personGroup.index')->with('sucesso','Pessoa adicionada!!');
    }

    public function show(Person $personGroup)
    {
        return view('personGroup.show', compact('personGroup'));
    }

    public function edit(Person $personGroup)
    {
        return view('personGroup.edit', compact('personGroup'));
    }

    public function update(Request $request, Person $personGroup)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'email' => 'required',
        ]);

        $personGroup->fill($request->post())->save();

        return redirect()->route('personGroup.index')->with('sucesso','Pessoa atualizada');
    }

    public function destroy(Person $personGroup)
    {
        $personGroup->delete();
        return redirect()->route('personGroup.index')->with('sucesso','Pessoa deletada');
    }
}
