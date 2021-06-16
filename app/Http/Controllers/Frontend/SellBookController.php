<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellBook;

class SellBookController extends Controller
{
    public function sell_book(Request $request)
    {
        $insert = SellBook::create([

            'user_id' => "1",
            'title_of_book' => $request->title_of_book,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'year_published' => $request->year_published,
            'category' => $request->category,
            'condition_of_book' => $request->condition_of_book,
            'picture' => $request->upload_picture,
        ]);

        return redirect("buy-book");
    }
}
