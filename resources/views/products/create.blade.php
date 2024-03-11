<div id="create-product-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
            Create a New Product
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="create-product-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-4 md:p-5 space-y-4">
        <form method="post" action="{{route('product.store')}}">
          @csrf
          @method('post')
          <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g. Apple, Mango" required />
          </div>
          <div class="mb-5">
            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900">Quantity</label>
            <input type="text" id="qty" name="qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g. 100" required />
          </div>
          <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
            <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g. 215.50" required />
          </div>
          <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <input type="text" id="description" name="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g. Green" required />
          </div>
          <!-- Modal Buttons -->
          <button  type="submit" data-modal-hide="create-product-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>
          <button data-modal-hide="create-product-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>