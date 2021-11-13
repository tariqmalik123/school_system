@extends('admin.layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">User List</h3>
                  <a style="float: right;" href="{{ route('users.add') }}" class="btn btn-rounded btn-success mb-5">Add User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>
								<th>Role</th>
								<th>Name</th>
								<th>Email</th>
								<th>Code</th>
								<th width="25%">Action</th>

							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $user)
							<tr>
								<td>{{ $key+1 }}</td>
                                <td>{{ $user->role }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->code }}</td>
						        <td>

                                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success">Edite</a>

                                    <a href="{{ route('users.delete',$user->id) }}"class="btn btn-danger" onclick=" return confirm('Are you sure you want to delete')" >Delete</a>
                                </td>

							</tr>
						@endforeach
						</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection
