<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Book;
use DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $this->authorize('view',$user->purchase);
        return view('purchase',compact('user')); */
        $userId = Auth::user()->id;
        $purchases = DB::table('purchases')->where('user_id', $userId)->orderBy('status')->paginate(10);
        return view('purchase')->with('purchases',$purchases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $request->validate([
            'book_id' => ['required'],
            'user_id' => ['required'],
            'quantity'=>['required','max:10'],
        ]); */

        //Extract user id
        $userId=Auth::user()->id;
        $quantity=$request->input('quantity');

        for ($x = 0; $x < $quantity; $x++) {
            $newPurchase = new Purchase();
            $newPurchase->book_id=$request->input('book_id');
            $newPurchase->user_id=$userId;
            $newPurchase->save();
        }
        return redirect('books');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $updatedPurchase = Purchase::findOrFail($id);
        $updatedPurchase->status='paid';
        $updatedPurchase->save();

        $updateBook = Book::find($updatedPurchase->book_id);
        $updateBookQuantityBefore = $updateBook->quantity;
        $updateBookQuantityAfter = $updateBookQuantityBefore - 1;
        $updateBook->quantity = $updateBookQuantityAfter ;
        $updateBook->save();

        return view('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();
        return redirect('purchases')->with('purchase',$purchase);
    }
}
