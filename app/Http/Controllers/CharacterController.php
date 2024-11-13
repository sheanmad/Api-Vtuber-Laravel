<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Repositories\CharacterRepository;
use App\Http\Requests\CharacterRequest;

class CharacterController extends Controller
{

    protected $characterRepository;

    public function __construct(CharacterRepository $characterRepository){
        $this -> characterRepository = $characterRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CharacterRequest $request)
    {
        try{
            $data = $request->id===null
                ? $this -> characterRepository -> getAll()
                : $this -> characterRepository -> getAll($request -> id);
            return response() -> json([
                'status' => true,
                'message' => "Characters Fetched Successfully",
                'data' => $data
            ]);
        }catch(\throwable $th){
            return response() -> json([
                'status' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        //
    }
}
