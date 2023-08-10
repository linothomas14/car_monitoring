<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.header')
    <div class="flex flex-col items-center py-10" id="container">
        <h1 class="text-4xl text-center font-bold ">Dashboard</h1>
        <div class="flex gap-5">
            @if (Auth::user()->role == 'admin')
            <a href="/booking" class="btn btn-accent w-36 mt-10 rounded-lg shadow-md">
                Booking Vehicle
            </a>
            @endif
            <a href="/approvals" class="btn btn-info w-36 mt-10 rounded-lg shadow-md">
                Approval
            </a>
        </div>

        <div class="flex" id="chart-container">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $CarConsumptionChart->container() !!}
            </div>
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $CarUseCountChart->container() !!}
            </div>
        </div>



    </div>

    <script src="{{ $CarConsumptionChart->cdn() }}"></script>
    <!-- <script src="{{ $CarUseCountChart->cdn() }}"></script> -->

    {{ $CarConsumptionChart->script() }}
    {{ $CarUseCountChart->script() }}
</body>

</html>