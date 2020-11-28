<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use DB;

class BookController extends Controller
{
	public function index()
    {
        return view('admin.default');
    }

	public function getBooks(Request $request)
	{
        if ($request->key) {
            $books = Book::with('author')->where('name', 'like', '%'.$request->key.'%')->paginate(10);
        } else {
            $books = Book::with('author')->paginate(10);
        }

    	foreach ($books as $book) {
    		$book['categories'] = $book->categories;
    	}

        return $books;
	}

    public function addBook(Request $request)
    {
    	DB::beginTransaction();
        try {
	    	$book = Book::create([
	    		'name' => $request->name,
	    		'author_id' => $request->author_id,
	    		'type' => $request->type,
	    	]);

            $book->categories()->attach($request->category);

            $books = Book::with('author')->paginate(10);
            foreach ($books as $book) {
                $book['categories'] = $book->categories;
            }

            $response = [
                'result' => 1,
                'message' => 'Thêm thành công!',
                'data' => $books
            ];

        	DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = [
                'message' => 'Có lỗi xảy ra!',
                'result' => 0
            ];
            throw new Exception($e->getMessage());
            return response()->json($response);
        }
    }

    public function getCategories()
	{
    	$categories = Category::all();

        return response()->json($categories);
	}

    public function deleleBook($id)
    {
        DB::beginTransaction();
        try {
            $book = Book::find($id);
            $book->delete();
            
            $book->categories()->detach();

            $books = Book::with('author')->paginate(10);
            foreach ($books as $book) {
                $book['categories'] = $book->categories;
            }

            $response = [
                'result' => 1,
                'message' => 'Xóa thành công!',
                'data' => $books
            ];

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = [
                'message' => 'Có lỗi xảy ra!',
                'result' => 0
            ];
            throw new Exception($e->getMessage());
            return response()->json($response);
        }
    }

    public function detailBook($id)
    {
        $book = Book::with('author')->find($id);
        $book['categories'] = $book->categories;

        if ($book) {
            $response = [
                'result' => 1,
                'message' => 'Thành công!',
                'data' => $book
            ];
        }
        else {
            $response = [
                'message' => 'Có lỗi xảy ra!',
                'result' => 0
            ];
        }

        return response()->json($response);
    }

    public function updateBook($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $book = Book::find($id);
            $book->update([
                'name' => $request->name,
                'author_id' => $request->author_id,
                'type' => $request->type,
            ]);

            $book->categories()->sync($request->category);

            $books = Book::with('author')->paginate(10);
            foreach ($books as $book) {
                $book['categories'] = $book->categories;
            }

            $response = [
                'result' => 1,
                'message' => 'Sửa thành công!',
                'data' => $books
            ];

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = [
                'message' => 'Có lỗi xảy ra!',
                'result' => 0
            ];
            throw new Exception($e->getMessage());
            return response()->json($response);
        }
    }
}
