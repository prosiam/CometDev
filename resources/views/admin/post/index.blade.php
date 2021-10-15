@extends('admin.layouts.app')

@section('main-content')
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')
		

		
		<!-- Page Wrapper -->
		<div class="page-wrapper">
		
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Welcome {{Auth::user()->name}}!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				{{-- post table --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="" class="btn btn-primary btn-sm">Add new post</a>
                            <br><br>
                            <h4 class="card-title">All Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Post Title</th>
                                            <th>Category</th>
                                            <th>Tag</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Messi joining PSG</td>
                                            <td>Sports</td>
                                            <td>Messi PSG</td>
                                            <td>10/10/21</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                                <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
				
			</div>			
		</div>
		<!-- /Page Wrapper -->
	
	</div>
	<!-- /Main Wrapper -->
@endsection