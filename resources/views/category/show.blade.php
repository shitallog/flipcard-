


<x-app-layout>
	

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Category</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="categories.html" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
					 @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
					 <form action="{{ route('category.update', $category->id) }}" method="post"  enctype="multipart/form-data">
                            @csrf
        @method('PUT')
						<div class="card">
							<div class="card-body">								
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">category name</label>
											<input type="text" value="{{ $category->categoryname}}" class="form-control" placeholder="Name"disabled>	
										
										</div>
									</div>
										
                                 									
								</div>
							</div>							
						</div>
						<div class="pb-5 pt-3">
							  <a class="btn btn-danger " href="{{ route('category.index') }}" >Back to category List</a>
						
						</div>
					</div>
					<!-- /.card -->
					 </form>
				</section>
				<!-- /.content -->
			</div>
			
		<script>
  
			</script>
			<!-- /.content-wrapper -->
				<!-- /.content-wrapper --><script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="admin/js/demo.js"></script>
	</body>
</html>
</x-app-layout>



























