
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

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Name</label>
<input    value="{{ $product->name }}" class="form-control"  disabled>
</div>	
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>description:</label>
<input  value="{{ $product->description }}" class=" sm form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>slug:</label>
<input  value="{{ $product->slug }}" class="sm form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>selling_price:</label>
<input  value="{{ $product->selling_price }}" class="form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>quantity:</label>
<input  value="{{ $product->quantity }}" class="form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>selling_price:</label>
<input  value="{{ $product->selling_price }}" class="form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>quantity:</label>
<input  value="{{ $product->quantity }}" class="form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>mrp:</label>
<input  value="{{ $product->mrp }}" class="form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
 <label>Image:</label>
                <img src="/image/{{ $product->image }}" width="500px">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>status</label>
 <input  value="{{ $product->status }}" class="form-control" disabled>

</div>
</div>


</div>
</div> 

    

   

    <a class="btn btn-danger" href="{{ route('product.index') }}">Back to product List</a>

</div>
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