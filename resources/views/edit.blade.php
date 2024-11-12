
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="bg-pink-300 py-4 mt-10">
        <div class=" container m-auto  ">
            <div class=" flex justify-between bg-pink-300 p-4 rounded">
                <h1>Edit->{{$ourPost->name}}</h1>
                <a class="btn btn-success p-2 bg-slate-600 text-white rounded font-bold " href="/create">Add more post</a>
            </div>

            <form method='POSt' action="{{route('update', $ourPost->id)}}" enctype="multipart/form-data"  class="w-full max-w-md p-8 bg-white shadow-md rounded-lg">
                @csrf
                <!-- Student Full Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Student Roll       Number</label>
                    <input type="text" id="name" name="roll" value="{{$ourPost->roll}}"   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your Roll number">
                </div>
                <!-- Student Full Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Student Full Name</label>
                    <input type="text" id="name" name="name" value="{{$ourPost->name}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
                </div>

                <!-- Student Full Name Input -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
                    <input type="text" id="name" name="description" value="{{$ourPost->description}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Description">
                </div>


                <!-- Select Role -->
                <div class="mb-4">
                    <label for="ClassName" class="block text-gray-600 text-sm font-medium mb-2">Class Name</label>
                    <input type="text" id="name" name="class" value="{{$ourPost->class}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Class Name">
                </div>

                <!-- Full Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Uplode Your Photo</label>
                    <input type="file" id="" name="image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('image')
                        <p>{{$message</p>
                    @enderror
                </div>



                <!-- Submit Button -->
                <div>
                    <div class=" flex  justify-between gap-4 mb-4">
                        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded-md hover:bg-blue-600 transition duration-200">Submit</button>
                        <a class="btn bg-pink-300 p-4 rounded font-bold text-white " href="/">Dashbord</a>
                    </div>
                    <div class=" w-full ">
                        <a href=""  class=" text-white font-bold py-2 rounded-md hover:bg-blue-600 transition duration-200">Log In</a>
                    </div>
                </div>
            </form>

        </div>
    </div>

</body>



</html>
