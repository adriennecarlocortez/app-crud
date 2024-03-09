<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite('resources/css/app.css')

</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('product.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="/images/svg/product.svg" class="h-8" alt="Product Logo" /> --}}
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Edit Product</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="{{route('product.index')}}">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Go Back</button>
            </a>
            </div>
        </div>
    </nav>

    {{-- Errors --}}
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    {{-- Form --}}
    <form method="post" action="{{route('product.update', ['product' => $product])}}" class="max-w-sm mx-auto">
        @csrf
        @method('put')
        <div class="mb-5">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
          <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$product->name}}" required />
        </div>
        <div class="mb-5">
          <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
          <input type="text" id="qty" name="qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$product->qty}}" required />
        </div>
        <div class="mb-5">
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
          <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$product->price}}" required />
        </div>
        <div class="mb-5">
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
          <input type="text" id="description" name="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$product->description}}" required />
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </form>
</body>
</html>