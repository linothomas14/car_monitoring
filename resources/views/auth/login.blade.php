<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

    <body class="bg-blue-100 flex min-h-screen">
        
        <div class="flex flex-col py-10 justify-center w-[600px] items-center m-auto rounded-3xl shadow-md bg-blue-200">
           
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif
                <h2 class="text-3xl text-blue-900 font-bold text-center">Login</h2>
                <form class="space-y-4" action="{{ route('actionlogin') }}" method="post">
                    @csrf
                    <div>
                        <label class="text-black text-lg">Email</label>
                        <input type="email" name="email" placeholder="Email Address" class="w-full input input-bordered  bg-blue-50" />
                    </div>
                    <div>
                        <label class="text-black text-lg">Password</label>
                        <input type="password" name="password" placeholder="Enter Password"
                            class="w-full input input-bordered bg-blue-50" />
                    </div>
                    <div>
                        <button class="btn bg-blue-500 text-blue-100 w-full" type="submit">Login</button>
                    </div>
                </form>


        </div>
    </body>

</html>