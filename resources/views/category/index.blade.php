<x-app-layout>
<!DOCTYPE html>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
          <div class="text-right">
         
              <a href="{{ route('category.create') }}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Categories</a>
           
          </div>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
			  <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">ID</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">categoryname</th>
			 <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">image</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
              </tr>
            </thead>
            <tbody>
           
              	@foreach($categories as $category)
                <tr class="hover:bg-grey-lighter">
                  <td class="py-4 px-6 border-b border-grey-light">{{$category->id}}</td>
                  <td class="py-4 px-6 border-b border-grey-light">
                 
                    {{$category->categoryname}}
                     
                  </td>
				     <td class="py-4 px-6 border-b border-grey-light">
				  <strong>Image:</strong>
                <img src="/image/{{ $category->image }}" width="500px">
                  </td>
				    
                  <td>
                <form action="{{ route('category.destroy',$category->id) }}" method="Post">
                       <a href="{{ route('category.show',$category->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400 btn btn-light  py-0">Show</a>
                    <a  class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400" href="{{ route('category.edit',$category->id) }}">Edit</a>
    
                    @csrf
                    @method('DELETE')
       
                   <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                </form>
            </td>
                </tr>
               @endforeach
            </tbody>
          </table>

        
        
         
        </div>

      </div>
  </main>
</div>













</x-app-layout>