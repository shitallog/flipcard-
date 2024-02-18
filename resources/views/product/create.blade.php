<x-app-layout>
   <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
	<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create product</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('product.index') }}"  class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Back</a>
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
	 <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
  @endif
					 <form action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data">
                           @csrf
						<div class="card">
							<div class="card-body">								
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Name</label>
									<input type="text" name="name"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="Name">	
										 @error('Name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>
							
										<div class="col-md-6">
										<div class="mb-3">
											<label for="name">category</label>
											  <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->categoryname }}</option>
            @endforeach
        </select>
											</div>
									</div>	
										<div class="col-md-6">
										<div class="mb-3">
											<label for="email">description</label>
											<input type="text" name="description"  class="px-4 py-2 rounded-lg border border-gray-300
											focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="description">	
											 @error('description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>	
							<div class="col-md-6">
										<div class="mb-3">
											<label for="email">slug</label>
											<input type="text" name="slug"  class="px-4 py-2 rounded-lg border border-gray-300
											focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="slug">	
											 @error('slug')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>			
									
								<div class="col-md-6">
										<div class="mb-3">
												<label for="email">selling_price</label>
											<input type="text" name="selling_price"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none
											focus:ring-2 focus:ring-gray-200" placeholder="selling_price">		
											 @error('selling_price')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>	
	<div class="col-md-6">
										<div class="mb-3">
												<label for="email">offer_price</label>
											<input type="text" name="offer_price"  class="px-4 py-2 rounded-lg border border-gray-300 
											focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="offer_price">		
											 @error('offer_price')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>			
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">quantity</label>
											<input type="text" name="quantity"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 
											focus:ring-gray-200" placeholder="quantity">	
											 @error('quantity')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>	
									
									
										<div class="col-md-6">
										<div class="mb-3">
											<label for="email">price</label>
											<input type="text" name="price"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="price">	
											 @error('price')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>	
										<div class="col-md-6">
										<div class="mb-3">
												<label for="email">MRP</label>
											<input type="text" name="mrp"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="mrp">		
											 @error('mrp')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
										</div>
									</div>		
                                 			
	<div class="col-md-6">
										<div class="mb-3">
												<label for="gender">image:</label>
		<input type="file" name="image" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200form-control" placeholder="image">
											
										</div>
										
  <div class="col-md-6">
										<div class="mb-3">
											<label for="email">status</label>
											<select name="status" id="status"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
											<option value="1">active</option>
											<option value="0">inactive</option>
                                               </select>											
										</div>
									</div>
									</div>		

									
								</div>
							</div>							
						</div>
						<div class="pb-5 pt-3">
							<button type="Submit"  class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Create</button>
							<a href="{{ route('product.index') }}"  class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Cancel</a>
						</div>
					</div>
					<!-- /.card -->
					 </form>
					   </div>

             
            </div>
        </main>
				</section>
				   </div>
        </main>
    </div>
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