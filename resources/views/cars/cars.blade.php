<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body>
  @include('partials.header')

  <div class="flex flex-col items-center justify-center">
    <h1 class="text-2xl font-bold m-5">Cars 🚘</h1>
    @if (Auth::user()->role == 'admin')
    <a href="/cars/add" class="btn btn-accent my-5">Add New Car</a>
    @endif
    <table class="table-auto w-[1200px] text-md">
      <!-- head -->
      <thead class="border-b font-medium">
        <tr class="border-b">
          <th class="p-3 w-24">No</th>
          <th class="text-left">Plate number</th>
          <th class="text-left">Model</th>
          <th class="text-left">Brand</th>
          <th class="text-left">Type</th>
          <th class="text-left">Fuel Consumption</th>
          <th class="text-left">Service Date</th>
          <th class="text-left">Last Usage</th>

        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @php
        $no = 1
        @endphp
        @foreach($cars as $car)

        <tr class="">
          <td class="text-center py-3">{{ $no }}</td>
          <td class="">{{ $car->plate_number }}</td>
          <td class="">{{ $car->model }}</td>
          <td class="">{{ $car->brand }}</td>
          <td class="">{{ $car->type }}</td>
          <td class="">{{ $car->fuel_consumption }} L</td>
          <td class="">{{ $car->service_date }}</td>
          <td class="">{{ $car->last_usage }}</td>

        </tr>
        @php
        $no++
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>