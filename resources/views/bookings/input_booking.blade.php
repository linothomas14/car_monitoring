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
        <h1 class="text-2xl font-bold m-5">Form Booking Vehicle</h1>
        <div class=" pt-10 w-[400px]">
            <form method="post" action="{{route('booking.save')}}" class=" flex flex-col gap-5">
                @csrf
                <div class="mb-4 ">
                    <label for="car" class="block text-gray-700 text-sm font-bold mb-2">Vehicle:</label>

                    <select name="car" class="select select-bordered w-full text-black">
                        <option disabled selected>Choose Vehicle</option>
                        @foreach($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->model }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4 ">
                    <label for="driver" class="block text-gray-700 text-sm font-bold mb-2">Driver:</label>

                    <select name="driver" class="select select-bordered w-full text-black">
                        <option disabled selected>Choose Driver</option>
                        @foreach($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4 ">
                    <label for="approver" class="block text-gray-700 text-sm font-bold mb-2">Approver:</label>

                    <select name="approver" class="select select-bordered w-full  text-black">
                        <option disabled selected>Choose Approver</option>
                        @foreach($approvers as $approver)
                        <option value="{{ $approver->id }}">{{ $approver->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label for="approver" class="block text-gray-700 text-sm font-bold mb-2">Usage Date:</label>
                    <input class="w-full " type="date" id="usage_date" name="usage_date">
                </div>


                <!-- <input type="text" name="judul" id="judul"> -->

                <button type="submit" class="p-10 bg-green-400  text-white font-bold py-2 px-4 rounded ">
                    Submit

            </form>
        </div>
    </div>

</body>

</html>