<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(5);
        return view('bookRecord')->with('books',$books);
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
                'title' => ['required', 'string', 'max:150'],
                'description' => ['required','max:1500','min:5'],
                'author'=>['required'],
                'publisher'=>['required'],
                'genre'=>['required'],
                'publication_date'=>['required'],
                'ISBN'=>['required','numeric'],
                'quantity'=>['required','numeric'],
                'price'=>['required','numeric'],
                'image'=>['required','image']
            ]);
    
            $newBook = new Book();
            $newBook->title=$request->input('title');
            $newBook->description=$request->input('description');
            $newBook->author=$request->input('author');
            $newBook->publisher=$request->input('publisher');
            $newBook->genre=$request->input('genre');
            $newBook->publication_date=$request->input('publication_date');
            $newBook->ISBN=$request->input('ISBN');
            $newBook->quantity=$request->input('quantity');
            $newBook->price=$request->input('price');

            if($request->hasfile('image')){
                $file=$request->file('image');
                $extension = $file ->getClientOriginalExtension();//getting image extension
                $filename = time().".".$extension;
                $file->move('uploads/bookImage/',$filename);
                $newBook->image=$filename;
            } else {
                return $request;
                $hightlights->image='';
            }
    
            $newBook->save();
    
            //return view('setting')->with('setting',$newBook);
            return redirect('book_record');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('updateBookRecordForm')->with('book',$book);
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
        $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'description' => ['required','max:1500','min:5'],
            'author'=>['required'],
            'publisher'=>['required'],
            'genre'=>['required'],
            'publication_date'=>['required'],
            'ISBN'=>['required','numeric'],
            'quantity'=>['required','numeric'],
            'price'=>['required','numeric'],
            'image'=>['required','image']
        ]);

        $updateBook = Book::find($id);

        $updateBook->title = $request->input('title');
        $updateBook->description = $request->input('description');
        $updateBook->author=$request->input('author');
        $updateBook->publisher=$request->input('publisher');
        $updateBook->genre=$request->input('genre');
        $updateBook->publication_date=$request->input('publication_date');
        $updateBook->ISBN=$request->input('ISBN');
        $updateBook->quantity=$request->input('quantity');
        $updateBook->price=$request->input('price');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file ->getClientOriginalExtension();//getting image extension
            $filename = time().".".$extension;
            $file->move('uploads/bookImage/',$filename);
            $updateBook->image=$filename;
        }

        $updateBook->save();

        return redirect('book_record')->with('book',$updateBook);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBook = Book::find($id);
        $deleteBook->delete();
        return redirect('book_record')->with('book',$deleteBook);
    }

    public function display(){
        $books = Book::all();
        return view('books')->with('books',$books);
    }

    public function displayInfo($id){
        $book = Book::find($id);
        return view('bookInfo')->with('book',$book);
    }
}
