@extends('admin.default')
@section('content')
	<div class="container">
		<h1 class="title-admin mt-5"><span>Danh sách</span> Tác giả</h1>

		<table class="table table-bordered table-striped mt-3">
			<tr class="text-center">
				<th>STT</th>
				<th>Tên tác giả</th>
				<th>Giới tính</th>
				<th>Ngày sinh</th>
				<th>Thao tác</th>
			</tr>
			<tr>
				<td class="text-center">1</td>
				<td>Nguyễn Tất Thành</td>
				<td>Nam</td>
				<td>19/05/1989</td>
				<td class="text-center">
					<button class="btn btn-success text-white" data-toggle="modal" data-target="#add_author">Thêm</button>
					<button class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_author">Sửa</button>
					<button class="btn btn-danger">Xóa</button>
				</td>
			</tr>
		</table>
	</div>

	<!-- Modal Add -->
	<div class="modal fade" id="add_author">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Thêm tác giả</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body container">
					<div class="row">
						<div class="col-3 mb-3">Tên tác giả:</div>
						<div class="col-9 mb-3">
							<input type="text" placeholder="Tên tác giả" class="form-control w-100">
						</div>
						<div class="col-3 mb-3">Giới tính:</div>
						<div class="col-9 mb-3">
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">Nam</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">Nữ</label>
							</div>
						</div>
						<div class="col-3 mb-3">Ngày sinh:</div>
						<div class="col-9 mb-3">
							<input type="date" class="form-control w-100">
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
						<div class="col-3">Tiểu sử:</div>
						<div class="col-9">
							<textarea name="" id="" rows="3" placeholder="Tiểu sử" class="form-control"></textarea>
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

	<!-- Modal Sửa -->
	<div class="modal fade" id="edit_author">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Sửa tác giả</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body container">
					<div class="row">
						<div class="col-3 mb-3">Tên tác giả:</div>
						<div class="col-9 mb-3">
							<input type="text" placeholder="Tên tác giả" class="form-control w-100">
						</div>
						<div class="col-3 mb-3">Giới tính:</div>
						<div class="col-9 mb-3">
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">Nam</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">Nữ</label>
							</div>
						</div>
						<div class="col-3 mb-3">Ngày sinh:</div>
						<div class="col-9 mb-3">
							<input type="date" class="form-control w-100">
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
						<div class="col-3">Tiểu sử:</div>
						<div class="col-9">
							<textarea name="" id="" rows="3" placeholder="Tiểu sử" class="form-control"></textarea>
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