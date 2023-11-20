<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function saveBook(Request $req) {
        $req->validate([
            "title" => "required",
            "author" => "required",
            "shortdescription" => "required|max:500",
            "content" => "required",
        ]);

        $book = new Books();
        $book->title = $req->title;
        $book->userId = Session()->get('userid');
        $book->author = $req->author;
        $book->content = $req->content;
        $book->shortdescription = $req->shortdescription;
        $result = $book->save();

        if ($result) {
            return back()->with("success", "Book has been added successfully");
        } else {
            return back()->with("fail", "Book has not been added");
        }

    }

    public function allBooks(){
        if(Session()->has("username")){
            $userid = Session()->get("userid");
            $books = Books::where('userid', $userid)->get();
            return view('allBooks',["data" => $books]);
        }else{
            return redirect("/login")->with("fail","Please Login to view Your books");
        }
    }

    public function editBook(string $id){
        $book = Books::find($id);
        if($book){
            return view('updateBook',["data"=>$book]);
        }else{
            return redirect('/')->with("fail","No book found with this id");
        }

    }

    public function updateBook(Request $req,string $id){
        $book =  Books::find($id);
        $book->title = $req->title;
        $book->author = $req->author;
        $book->content = $req->content;
        $book->shortdescription = $req->shortdescription;
        $res = $book->save();
        if($res){
            return redirect('allBooks')->with("success","book updated successfully");
        }
        else{
            return redirect('allBooks')->with("fail","book not updated");
        }

    }

    public function generatePDF(string $id){
        $book = Books::find($id);
        if($book){
            $content = $book->content;
            // Splitting book content after 500 words
            $pages = str_split($content, 1000);

            $frontPage = view('frontCover', ['data' => $book])->render();

            // Initializing the variable to store story pages
            $storyPages = "";

            // Looping through each page and render the 'story' view
            foreach ($pages as $page) {
                $storyPages .= view('story', ['data' => $page])->render();
            }

            $backPage = view('backCover', ['data' => $book])->render();

            // Combining front page, story pages, and back page
            $pdfContent = $frontPage . $storyPages . $backPage;

            $pdf = PDF::loadHTML($pdfContent);

            return $pdf->stream('book.pdf');
        }

    }
}
