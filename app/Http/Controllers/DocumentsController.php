<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\DocumentConfiguration;
use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Documents::withCount('configuration')->get();

        return response()->json($documents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {
        $name = $request->get('document_name');

        $document = Documents::create([
            'document_name' => $name,
        ]);

        $form_values = $request->get('form_values');

        foreach ($form_values as $form_value) {
            DocumentConfiguration::create([
                'document_id' => $document->id,
                'field_seq' => $form_value['field_seq'],  
                'is_mandatory' => $form_value['is_mandatory'],  
                'field_type' => $form_value['field_type'],
                'field_name' => $form_value['field_name'],  
                'select_values' => json_encode($form_value['select_values']), 
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => "Data created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $document = Documents::find($id);

        $result = [
            'documentName' => $document->document_name,
            'fields'       => $document->configuration
        ];

        return response()->json($result);
    }

}
