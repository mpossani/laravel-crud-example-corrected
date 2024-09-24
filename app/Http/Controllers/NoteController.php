<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\NoteStoreRequest;
use App\Http\Requests\NoteUpdateRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $notes = Note::latest()->paginate(5);
          
        return view('notes.index', compact('notes'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('notes.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteStoreRequest $request): RedirectResponse
    {   
        Note::create($request->validated());
           
        return redirect()->route('notes.index')
                         ->with('success', 'Note created successfully.');
    }
  
    /**
     * Show the data for the note.
     */
    public function show(string $id): View
    {
        return view('notes.show', [
            'note' => Note::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        // return view('notes.edit', compact('note'));
        return view('notes.edit', [
            'note' => Note::findOrFail($id)
        ]);
    }
  
    /**
     * Update the specified resource in storage.
     */
    // public function update(NoteUpdateRequest $request, Note $note): RedirectResponse
    public function update(NoteUpdateRequest $request, string $id): RedirectResponse
    {
        $oldNote = Note::findOrFail($id);
        $oldNote->update($request->validated());

        return redirect()->route('notes.index')
                        ->with('success', 'Note updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Note::findOrFail($id)->delete();

        // $note->delete();
           
        return redirect()->route('notes.index')
                        ->with('success', 'Note deleted successfully');
    }
}
