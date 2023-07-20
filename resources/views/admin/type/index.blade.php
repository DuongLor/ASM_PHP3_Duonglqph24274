@extends('admin.templates.app')
@section('title', 'Admin Loại phòng')
@section('content')
<a href="{{ route('type.create') }}" class="btn btn-primary">Thêm Loại phòng <i class="fa-solid fa-plus"></i></a>
<br>
<br>
<table class="table table-hover table-dark table-bordered">
		<thead>
				<tr>
						<th scope="col" class="text-center font-weight-bold">STT</th>
						<th scope="col" class="text-center font-weight-bold">Tên</th>
						<th scope="col" class="text-center font-weight-bold">Hành động</th>
				</tr>
		</thead>
		<tbody>
				@foreach ($types as $key => $type)
						<tr class="table-light">
								<th scope="row" class="text-center">{{ $key + 1 }}</th>
								<td class="text-center">{{ $type->name }}</td>
								<td class="text-center">
										<a href="{{ route('type.edit', $type->id) }}" class="btn btn-info"><i
														class="fa-solid fa-pen-to-square"></i></a>
										<a href="{{ route('type.delete', $type->id) }}" class="btn btn-danger">
												<i class="fa-solid fa-trash"></i></a>
								</td>
						</tr>
				@endforeach
		</tbody>
</table>
@endsection