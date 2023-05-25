<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(contact $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $contacts = $this->contact->all();
        return view('index', compact('contacts'));
    }

    public function contacts()
    {
        $contacts = $this->contact->all();
        return view('app.contacts.indexContact', compact('contacts'));
    }    

    /**
     * Display the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $contact = $this->contact->find($id);
        return view('app.contacts.showContact', ['contact' => $contact]);
    }

    /**
     * Display the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $contact = $this->contact->find($id);
        return view('app.contacts.deleteContact', ['contact' => $contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.contacts.createContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:100',
            'contact' => 'required|unique:contacts|min:14|max:15',
            'email' => 'required|unique:contacts'
        ]);

        $contact = $request->all();     

        try {
            $contact = Contact::create($contact);
            return redirect('app/contacts')->with('success', 'Operação realizada com Sucesso!');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('error', 'Erro ao tentar realizar Operação!'. $ex);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = $this->contact->find($id);
        return view('app.contacts.editContact', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5|max:100',
            'contact' => 'required|unique:contacts|min:14|max:15',
            'email' => 'required|unique:contacts'
        ]);
        
        $contact = Contact::find($id);
        $input = $request->all();    

        try {
            $contact->fill($input)->save();
            return redirect('app/contacts')->with('success', 'Operação realizada com Sucesso!');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('error', 'Erro ao tentar realizar Operação!');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = $this->contact->find($id);

        try {
            $contact->delete();
            return redirect('app/contacts')->with('success', 'Operação realizada com Sucesso!');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('error', 'Erro ao tentar realizar Operação!');
        }
    }
}
