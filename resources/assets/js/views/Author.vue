<template>
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
			<tr v-for="(item,index) in authors">
				<td class="text-center">{{ index+1 }}</td>
				<td>{{ item.name }}</td>
				<td>{{ item.sex }}</td>
				<td>{{ item.birthday }}</td>
				<td class="text-center">
					<button class="btn btn-success text-white" data-toggle="modal" data-target="#add_author">Thêm</button>
					<button class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_author">Sửa</button>
					<button class="btn btn-danger">Xóa</button>
				</td>
			</tr>
		</table>
	</div>
</template>

<script>
	export default {
	    data: function () {
	        return {
	            authors: [],
	        }
	    },
	    created: function () {
	        this.showAuthor()
	    },
	    methods: {
	        showAuthor: function () {
	            let scop = this;
	            return axios.get('/authors')
	                .then(function (response) {
	                    scop.authors = response.data;
	                })
	                .catch (function (err) {
	                    console.log(err)
	                })
	        },
	    }
	}
</script>