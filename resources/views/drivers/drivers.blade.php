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
    <h1 class="text-2xl font-bold m-5">Drivers 🧑</h1>
    @if (Auth::user()->role == 'admin')
    <a href="" class="btn btn-accent my-5">Add New Driver</a>
    @endif
    <table class="table-auto w-[500px] text-md">
      <!-- head -->
      <thead class="border-b font-medium">
        <tr class="border-b">
          <th class="p-3 w-24">No</th>
          <th class="text-left">Driver's Name</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @php
        $no = 1
        @endphp
        @foreach($drivers as $driver)

        <tr class="">
          <td class="text-center py-3">{{ $no }}</td>
          <td class="">{{ $driver->name }}</td>

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