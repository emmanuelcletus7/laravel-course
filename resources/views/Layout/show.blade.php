<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <button
        class="text-white bg-blue-700 mx-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
            href="{{ route('Layout.index') }}">index</a></button>
 <button
            class="text-white bg-blue-700 mx-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                href="{{ route('Layout.create') }}">create</a></button>
    <div class="border p-5">
      Product Name:  <label for="Name">{{ $Layout->name }}</label>
    </div>
    <div class="border p-5">
       Product Description: <label for="Desc">{{ $Layout->desc }}</label>
    </div>
    <div class="border p-5">
       Product Price: <label for="price">{{ $Layout->price }}</label>
    </div>
</body>
</html>