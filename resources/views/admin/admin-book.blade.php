@extends('admin.default')
@section('content')
	<div class="container" id="book">
		<h1 class="title-admin mt-5"><span>Danh sách</span> Sách</h1>
		
		<div class="row mt-5">
			<div class="col-4">
				<input type="text" placeholder="Tên sách" class="form-control w-100">
			</div>
			<div class="col-2">
				<button class="btn btn-success w-100">Tìm kiếm</button>
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
			<tr v-for="(item, index) in posts">
				<td class="text-center">@{{ index+1 }}</td>
				<td>@{{ item.name }}</td>
				<td>@{{ item.author.name }}</td>
				<td>@{{ item.type }}</td>
				<td>
					
				</td>
				<td class="text-center">
					<button class="btn btn-success" data-toggle="modal" data-target="#add_book">Thêm</button>
					<button class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_book">Sửa</button>
					<button class="btn btn-danger">Xóa</button>
				</td>
			</tr>
		</table>
	</div>

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
							<input type="text" placeholder="Tên sách" class="form-control w-100">
						</div>
						<div class="col-3 mb-3">Ảnh</div>
						<div class="col-9 mb-3">
							<input type="file" name="" class="form-control">
						</div>
						<div class="col-3 mb-3">Tên tác giả:</div>
						<div class="col-9 mb-3">
							<input type="text" placeholder="Tên tác giả" class="form-control w-100">
						</div>
						<div class="col-3 mb-3">Thể loại:</div>
						<div class="col-9 mb-3 ">
							<div class="row">
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck1">
									<label class="" for="defaultCheck1">Văn học</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck2">
									<label class="" for="defaultCheck2">Lịch sử</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck3">
									<label class="" for="defaultCheck3">Tiểu thuyết</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck4">
									<label class="" for="defaultCheck4">Tiểu thuyết</label>
								</div>
							</div>
						</div>
						<div class="col-3 mb-3">Danh mục:</div>
						<div class="col-9 mb-3 ">
							<div class="row">
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck5">
									<label class="" for="defaultCheck5">Sách tiếng Anh</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck6">
									<label class="" for="defaultCheck6">Sách tiếng Việt</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck7">
									<label class="" for="defaultCheck7">Sách nổi bật</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer justify-content-center">
					<button type="submit" class="btn btn-success w-25">Thêm</button>
					<button type="button" class="btn btn-danger w-25" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>

	{{-- Modal Sửa --}}
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
							<input type="text" placeholder="Tên sách" class="form-control w-100">
						</div>
						<div class="col-3 mb-3">Ảnh</div>
						<div class="col-9 mb-3">
							<input type="file" name="" class="form-control">
						</div>
						<div class="col-3 mb-3">Tên tác giả:</div>
						<div class="col-9 mb-3">
							<input type="text" placeholder="Tên tác giả" class="form-control w-100">
						</div>
						<div class="col-3 mb-3">Thể loại:</div>
						<div class="col-9 mb-3 ">
							<div class="row">
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck1">
									<label class="" for="defaultCheck1">Văn học</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck2">
									<label class="" for="defaultCheck2">Lịch sử</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck3">
									<label class="" for="defaultCheck3">Tiểu thuyết</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck4">
									<label class="" for="defaultCheck4">Tiểu thuyết</label>
								</div>
							</div>
						</div>
						<div class="col-3 mb-3">Danh mục:</div>
						<div class="col-9 mb-3 ">
							<div class="row">
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck5">
									<label class="" for="defaultCheck5">Sách tiếng Anh</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck6">
									<label class="" for="defaultCheck6">Sách tiếng Việt</label>
								</div>
								<div class="col-4">
									<input class="" type="checkbox" value="" id="defaultCheck7">
									<label class="" for="defaultCheck7">Sách nổi bật</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer justify-content-center">
					<button type="submit" class="btn btn-warning text-white w-25">Lưu lại</button>
					<button type="button" class="btn btn-danger w-25" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>
@endsection