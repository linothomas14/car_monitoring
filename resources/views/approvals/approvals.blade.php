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

    <div class="flex flex-col items-center w-[1200px] mx-auto  justify-center">
        <h1 class="text-2xl font-bold m-5">Approvals 🚘</h1>
        <table class="table-auto w-[1200px] text-md">
            <!-- head -->
            <thead class="border-b font-medium">
                <tr class="border-b">
                    <th class="p-3 w-24">No</th>
                    <th class="text-left">Car's model</th>
                    <th class="text-left">Driver's Name</th>
                    <th class="text-left">Usage Date</th>
                    <th class="text-left">Approver's Name</th>
                    <th class="text-left">Approved</th>
                    <th class="text-left">Action</th>


                </tr>
            </thead>
            <tbody>
                @php
                $no = 1
                @endphp

                @foreach($approvals as $approval)

                <tr class="">
                    <td class="text-center py-3">{{ $no }}</td>
                    <td class="">{{ $approval->car->model }}</td>
                    <td class="">{{ $approval->driver->name }}</td>
                    <td class="">{{ $approval->usage_date }}</td>
                    <td class="">{{ $approval->approver->name }}</td>
                    <td>{{$approval->approved == 1?"✅":"❌"}}</td>
                    @if (Auth::user()->role == 'boss')
                    <td>
                        <form action="/approvals/{{$approval->id}}" onclick="return confirm('Anda yakin ?');"
                            method="POST">
                            @csrf
                            <button {{ $approval->approved == 1 ? "disabled" : "" }} class="btn bg-green-400
                                hover:bg-green-500">approve</button>

                        </form>
                    </td>
                    @else
                    <td></td>
                    @endif
                </tr>
                @php
                $no++
                @endphp
                @endforeach
            </tbody>
        </table>
        <a href="/approvals/export_excel" class="self-end btn btn-error hover:bg-red-500 " target="_blank">
            Export to Excel
        </a>

    </div>
</body>

</html>