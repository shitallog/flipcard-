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

 <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        
	<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Enter name" required>
</div>	
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="form-group">
<label>description</label>
<input type="text" name="description" value="{{ $product->description }}" class=" sm form-control" placeholder="Enter description" required>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="form-group">
<label>selling_price</label>
<input type="text" name="selling_price" value="{{ $product->selling_price }}" class=" sm form-control" placeholder="Enter selling_price" required>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>offer_price</label>
<input type="text" name="offer_price" value="{{ $product->offer_price }}" class=" sm form-control" placeholder="Enter offer_price" required>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>quantity</label>
<input type="text" name="quantity" value="{{ $product->quantity }}" class=" sm form-control" placeholder="Enter quantity" required>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>price</label>
<input type="text" name="price" value="{{ $product->price }}" class=" sm form-control" placeholder="Enter price" required>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>MRP</label>
<input type="text" name="mrp" value="{{ $product->mrp }}" class=" sm form-control" placeholder="Enter MRP" required>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
  <input type="file" name="image" class="form-control" placeholder="image">
  <br>
                    <img src="/image/{{ $product->image }}" width="300px">

</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>status</label>

	<select name="status" id="status" value="{{ $product->status }}"  class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
											<option value="1">active</option>
											<option value="0">inactive</option>
                                               </select>	
</div>
</div>
</div>
	
	 <button class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors " type="submit">Update</button>
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
	