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
								<li class="breadcrumb-item active">Category</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				{{-- post table --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a data-toggle="modal" href="#add_category_modal" class="btn btn-primary btn-sm">Add new Category</a>
                            <br><br>
                            <h4 class="card-title">All Categories</h4>
                        </div>

                        @include('validation_message')
                        
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


{{-- Category Modal --}}

<!--/category modal start-->
<div id="add_category_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <h2>Add new Category</h2>
                    <hr>
                    <div class="form-group">
                        <label for="">Name </label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-sm " type="submit" value="Add Category">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/category modal end-->

