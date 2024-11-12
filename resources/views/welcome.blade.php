<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel_11_Crud</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="   mt-10">
        <div class=" container m-auto  ">

            <div class=" flex justify-between bg-pink-300 p-4 rounded">
                <h1>How</h1>
                <a class="btn btn-success p-2 bg-slate-600 text-white rounded font-bold " href="/create">Add more post</a>
            </div>
            @if (session('success'))
                <h3>{{session('success')}} </h3>
            @endif

            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                  <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                          <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">id</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Roll</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">class</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Image</th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                          <tr class="odd:bg-white even:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->roll}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->class}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->description}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> <img class=" rounded-full" src="images/{{$post->image}}" width="40px" height="40px" alt=""></td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium" >
                              <a href="{{route('edit', $post->id) }}" class=" bg-green-800 py-2 px-4 rounded text-white">Edit</a>
                              <a href="{{route('delete', $post->id) }}" class=" bg-green-800 py-2 px-4 rounded text-white">Delete</a>
                            </td> 
                             
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

        </div>
    </div>
</body>

</html>
