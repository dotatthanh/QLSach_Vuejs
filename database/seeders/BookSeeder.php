<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('authors')->insert([
            'name' => 'Đỗ Tất Thành',
            'sex' => 'nam',
            'birthday' => '1955-01-01',
        ]);
        DB::table('authors')->insert([
            'name' => 'Đỗ Tất Thành2',
            'sex' => 'nam',
            'birthday' => '1955-01-01',
        ]);
        DB::table('authors')->insert([
            'name' => 'Đỗ Tất Thành3',
            'sex' => 'nam',
            'birthday' => '1955-01-01',
        ]);



        DB::table('books')->insert([
            'name' => 'Tuổi trẻ đáng giá bao nhiêu?',
            'author_id' => 1,
            'type' => 'Văn học',
        ]);
        DB::table('books')->insert([
            'name' => 'Perfect',
            'author_id' => 1,
            'type' => 'Văn học',
        ]);
        DB::table('books')->insert([
            'name' => 'Không gia đình',
            'author_id' => 2,
            'type' => 'Tiểu thuyết',
        ]);
        DB::table('books')->insert([
            'name' => 'Tiếng Việt 10',
            'author_id' => 2,
            'type' => 'Văn học',
        ]);



        DB::table('categorys')->insert([
            'name' => 'Sách nổi bật',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Sách bán chạy',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Sách sale',
        ]);



        DB::table('book_category')->insert([
            'book_id' => 1,
            'category_id' => 1,
        ]);
        DB::table('book_category')->insert([
            'book_id' => 1,
            'category_id' => 2,
        ]);
        DB::table('book_category')->insert([
            'book_id' => 2,
            'category_id' => 2,
        ]);
        DB::table('book_category')->insert([
            'book_id' => 3,
            'category_id' => 1,
        ]);
        DB::table('book_category')->insert([
            'book_id' => 4,
            'category_id' => 3,
        ]);
    }
}
