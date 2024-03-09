<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('product.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            {{-- <img src="/images/svg/product.svg" class="h-8" alt="Product Logo" /> --}}
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Product</span>
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="{{route('product.create')}}">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Product</button>
        </a>
      </div>
    </div>
  </nav>
  
  {{-- Table --}}
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="border-b border-neutral-200 bg-[#332D2D] font-medium text-white dark:border-white/10">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{$product->id}}
                  </th>
                  <td class="px-6 py-4">
                      {{$product->name}}
                  </td>
                  <td class="px-6 py-4">
                      {{$product->qty}}
                  </td>
                  <td class="px-6 py-4">
                      {{$product->price}}
                  </td>
                  <td class="px-6 py-4">
                      {{$product->description}}
                  </td>
                  <td class="flex items-center px-6 py-4">
                      <a href="{{route('product.edit', ['product' => $product])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                      <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <button type="delete" data-modal-target="default-modal" data-modal-toggle="default-modal">
                          <a class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a> </button>
                      </form>
                  </td>
              </tr>
            @endforeach
        </tbody>
    </table>
  </div>

{{-- Session Success --}}
  <div>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>