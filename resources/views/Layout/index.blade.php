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
            href="">index</a></button>
 <button
            class="text-white bg-blue-700 mx-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                href="">create</a></button>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="">
                <th scope="col" class="px-6 py-3 border">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 border">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Description
                </th>
                <th scope="col" class="px-6 py-3 border">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 border">
                    Action
                </th>
            </tr>

            @foreach ($Layout as $Layout)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $Layout->id }}
                </th>
                <td class="px-6 py-4 border">
                    {{ $Layout->name }}
                </td>
                <td class="px-6 py-4 border">
                    {{ $Layout->desc }}
                </td>
                <td class="px-6 py-4 w-[20%] border">
                    {{ $Layout->price }}
                </td>
                <td class="px-6 py-4 border">
                    {{-- <span><i class="fa-solid fa-eye"></i></span>
                    <span><i class="fa-regular fa-pen-to-square text-green-500"></i></span>
                    <span><i class="fa-solid fa-trash-can text-red-500"></i></span> --}}
                    <a href="{{ route('Layout.show', $Layout->id) }}">View</a>
                </td>
            </tr>
            @endforeach

        </thead>
    </table>
</body>

</html>
