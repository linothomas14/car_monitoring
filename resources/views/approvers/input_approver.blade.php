<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    @include('partials.header')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold m-5">Input new Approver 😎</h1>
        <div class=" pt-10 w-1/3" id="approvers">

            <form method="post" action="{{route('approvers.save')}}" class=" flex flex-col gap-5">
                @csrf
                <div class="mb-4 ">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4 ">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4 ">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="w-full shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <!-- <input type="text" name="judul" id="judul"> -->

                <button type="submit" class="p-10 bg-green-400  text-white font-bold py-2 px-4 rounded ">
                    Submit

            </form>
        </div>
    </div>

</body>

</html>
