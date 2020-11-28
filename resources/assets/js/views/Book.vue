<template>
	<div class="container mt-5">
		<h1 class="title-admin"><span>Danh sách</span> Sách</h1>
		
		<button class="btn btn-success mt-3" data-toggle="modal" data-target="#add_book">Thêm sách</button>
		<div class="row mt-3">
			<div class="col-4">
				<input type="text" name="key" placeholder="Tên sách" class="form-control w-100">
			</div>
			<div class="col-2">
				<button class="btn btn-success w-100" @click="showBook()">Tìm kiếm</button>
			</div>
		</div>

		<table class="table table-bordered table-striped mt-3">
			<tr class="text-center">
				<th>STT</th>
				<th>Tên sách</th>
				<th>Tên tác giả</th>
				<th>Thể loại</th>
				<th>Danh mục</th>
				<th>Thao tác</th>
			</tr>
			<tr v-for="(book, index) in books.data" :key="book.id">
				<td class="text-center">{{ index+1 }}</td>
				<td>{{ book.name }}</td>
				<td>{{ book.author.name }}</td>
				<td>{{ book.type }}</td>
				<td>
					<template v-for="category in book.categories">
						<p>- {{ category.name }}</p>
					</template>
				</td>
				<td class="text-center">
					<button class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_book" @click="getBook(book.id)">Sửa</button>
					<button class="btn btn-danger" @click="deleteBook(book.id)">Xóa</button>
				</td>
			</tr>
		</table>

		<pagination 
			:data="books" 
			@pagination-change-page="showBook"
			:show-disabled="true"
			:limit="1"
			align="center"
			size="default"
			>
		</pagination>

		<!-- Modal Add -->
		<div class="modal fade" id="add_book">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Thêm sách</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body container">
						<div class="row">
							<div class="col-3 mb-3">Tên sách:</div>
							<div class="col-9 mb-3">
								<input name="name" type="text" placeholder="Tên sách" class="form-control w-100">
							</div>
							<div class="col-3 mb-3">Tên tác giả:</div>
							<div class="col-9 mb-3">
								<select name="author_id" class="form-control">
									<option value=""></option>
									<template v-for="author in authors">
										<option :value="author.id">{{ author.name }}</option>
									</template>
								</select>
							</div>
							<div class="col-3 mb-3">Thể loại:</div>
							<div class="col-9 mb-3 ">
								<input name="type" type="text" placeholder="Thể loại" class="form-control w-100">
							</div>
							<div class="col-3 mb-3">Danh mục:</div>
							<div class="col-9 mb-3 ">
								<div class="row">
									<div class="col-4" v-for="category in categories">
										<input 
											name="category[]"
											type="checkbox" 
											:value="category.id" 
											:id="'category_add'+category.id"
										>
										<label :for="'category_add'+category.id">
											{{ category.name }}
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer justify-content-center">
						<button type="submit" class="btn btn-success w-25" @click="addBook()">Thêm</button>
						<button type="button" class="btn btn-danger w-25" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Edit -->
		<div class="modal fade" id="edit_book">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Sửa sách</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body container">
						<div class="row">
							<div class="col-3 mb-3">Tên sách:</div>
							<div class="col-9 mb-3">
								<input type="text" placeholder="Tên sách" class="form-control w-100" id="name">
							</div>
							<div class="col-3 mb-3">Tên tác giả:</div>
							<div class="col-9 mb-3">
								<select id="author_id" class="form-control">
									<option value=""></option>
									<template v-for="author in authors">
										<option :value="author.id">{{ author.name }}</option>
									</template>
								</select>
							</div>
							<div class="col-3 mb-3">Thể loại:</div>
							<div class="col-9 mb-3 ">
								<input type="text" placeholder="Thể loại" class="form-control w-100" id="type">
							</div>
							<div class="col-3 mb-3">Danh mục:</div>
							<div class="col-9 mb-3 ">
								<div class="row">
									<div class="col-4" v-for="category in categories">
										<input 
										name="category_edit[]"
										type="checkbox" 
										:value="category.id" 
										:id="'category'+category.id"
										>
										<label :for="'category'+category.id">
											{{ category.name }}
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer justify-content-center">
						<button type="submit" class="btn btn-warning text-white w-25" @click="updateBook(book.id)">Lưu lại</button>
						<button type="button" class="btn btn-danger w-25" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import pagination from 'laravel-vue-pagination'
	export default {
	    data: function () {
	        return {
	            books: {},
	            book: [],
	            categories: [],
	            authors: []
	        }
	    },
	    components: {
	    	pagination
	    },
	    created: function () {
	        this.showBook();
	        this.getCategories();
	        this.getAuthors();
	    },
	    mounted() {
		},
	    methods: {
	        showBook: function (page = 1) {
	            let scop = this;

            	var key = $(`input[name=key]`).val();
	            if(key === undefined) {
	            	var key = '';
	            }

	            axios.get('/books?key='+key+'&page='+page)
	                .then(function (response) {
	                    scop.books = response.data;
	                    // console.log(response.data)
	                })
	                .catch (function (err) {
	                    console.log(err)
	                })
	        },

	        getCategories: function () {
	            let scop = this;
	            return axios.get('/categories')
	                .then(function (response) {
	                    scop.categories = response.data
	                })
	                .catch (function (err) {
	                    console.log(err)
	                })
	        },

	        getAuthors: function () {
	            let scop = this;
	            return axios.get('/authors')
	                .then(function (response) {
	                    scop.authors = response.data;
	                })
	                .catch (function (err) {
	                    console.log(err)
	                })
	        },

	        addBook:  function () {
	        	var name = $(`input[name="name"]`).val();
	        	var author_id = $(`select[name="author_id"]`).val();
	        	var type = $(`input[name="type"]`).val();

	        	var category = [];
	        	$(`input[name="category[]"]:checked`).each(function(i){
	        		category[i] = $(this).val();
	        	});

	        	let scop = this;
	        	axios.post('/add-book', {
	        		name: name,
	        		author_id : author_id,
	        		type : type,
	        		category: category
	        	})
	        	.then(function (response) {
	        		let obj = response.data;
	        		if (obj.result == 1) {
	        			$('#add_book').modal('hide');
	        			$(`input[name="name"]`).val('');
	        			$(`select[name="author_id"]`).val('');
	        			$(`input[name="type"]`).val('');
	        			$(`input[name="category[]"]`).prop("checked", false);
	        			scop.books = obj.data;
	        		}
	        	})
	        	.catch(function (error) {
	        		console.log(error);
	        	});
	        },

	        deleteBook: function (id) {
	        	let scop = this;
	        	axios.delete('/delete-book/' + id)
	        	.then(function (response) {
	        		let obj = response.data;
	        		if (obj.result == 1) {
	        			scop.books = obj.data;
	        		}
	        	})
	        	.catch(function (error) {
	        		console.log(error)
	        	})
	        },

	        getBook: function (id) {
	        	$(`input[name="category_edit[]"]`).prop("checked", false);

	        	let scop = this;
	        	axios.post('/detail-book/' + id)
	        	.then(function (response) {
	        		let obj = response.data;
	        		if (obj.result == 1) {
	        			scop.book = obj.data;

	        			$(`#name`).val(obj.data.name);
	        			$(`#author_id`).val(obj.data.author_id);
	        			$(`#type`).val(obj.data.type);
	        			$.each(obj.data.categories, function( index, value ) {
	        				$(`#category${value.id}`).prop('checked', true);
	        			});
	        		}
	        	})
	        	.catch (function (err) {
	        		console.log(err)
	        	})
	        },

	        updateBook:  function (id) {
	        	var name = $(`#name`).val();
	        	var author_id = $(`#author_id`).val();
	        	var type = $(`#type`).val();

	        	var category = [];
	        	$(`input[name="category_edit[]"]:checked`).each(function(i){
	        		category[i] = $(this).val();
	        	});

	        	let scop = this;
	        	axios.put('/update-book/' + id, {
	        		name: name,
	        		author_id : author_id,
	        		type : type,
	        		category: category
	        	})
	        	.then(function (response) {
	        		let obj = response.data;
	        		if (obj.result == 1) {
	        			$('#edit_book').modal('hide');
	        			// $(`input[name="name"]`).val('');
	        			// $(`select[name="author_id"]`).val('');
	        			// $(`input[name="type"]`).val('');
	        			// $(`input[name="category[]"]`).prop("checked", false);
	        			scop.books = obj.data;
	        		}
	        	})
	        	.catch(function (error) {
	        		console.log(error);
	        	});
	        },
	    }
	}
</script>