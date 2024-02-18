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
								<a href="{{ route('category.index') }}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Back</a>
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
					 <form action="{{ route('category.store') }}" method="post"  enctype="multipart/form-data">
                           @csrf
						<div class="card">
							<div class="card-body">								
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" name="categoryname"  class="form-control" placeholder="Name" required autofocus>	
										 @error('categoryname')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>
										<div class="col-md-6">
										<div class="mb-3">
												<label for="image">image:</label>
		<input type="file" name="image" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200form-control" placeholder="image">
										</div>
									</div>
										
                                 									
								</div>
							</div>							
						</div>
						<div class="pb-5 pt-3">
							<button type="Submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Create</button>
							<a href=""class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Cancel</a>
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