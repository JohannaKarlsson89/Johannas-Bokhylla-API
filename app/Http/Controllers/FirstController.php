<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FirstModel;
use PhpParser\Node\Stmt\Return_;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Return all books in table */
        return FirstModel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*validate the inputs*/
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published' => 'required',
            'status' => 'boolean' 
        ]);

        Return FirstModel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*Saves row in varible */
        $book = FirstModel::find($id);
        /*Check if $course is not empty*/
        if($book != null) {
            return $book;
            /*If empty */
        }else{
            return response()->json([
                'Book not found'
            ],404);
        }
        
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*Saves row in varible */
        $book = FirstModel::find($id);
        if($book != null) {
            /*validate the inputs*/
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published' => 'required',
            'status' => 'boolean' 
        ]);
            $book ->update($request->all());
            return $book ;
        } else {
            return response()->json([
                'Book not found'
            ],404);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         /*Saves row in varible */
         $book = FirstModel::find($id);
         if($book != null) {
             $book->delete();
             return response()->json([
                 'book deleted'
             ]);
         }
         else {
            return response()->json([
                'book not found'
            ]);
         }
    }
}
