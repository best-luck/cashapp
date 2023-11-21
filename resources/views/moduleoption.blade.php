<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" />
    <link rel="stylesheet"
        href="{{ asset('styles/app.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TasksPage</title>
    </head>
    <body>
        <div class="relative flex flex-row h-screen w-screen">
            @include('navbar')
            @include('sidebar')
            <div class = "content">
                <div class =  content_title>
                    <p>
                        Tasks
                    </p> 
                </div>
                <div class = "option_main">
                    <div class= "option_content">
                        <div class = "taskcard">
                            <img src="{{asset('assets/mouse.png')}}" alt="">
                            <p>Create task for Olympus</p>
                        </div>

                        <div class = "taskcard">
                            <img src="{{asset('assets/audio.png')}}" alt="">
                            <p>Create task for Olympus</p>
                        </div>
                    </div>

                    <div class = "option_task">
                        <button class = "tasks_create">
                            Create task
                        </button>
                    </div>
                </div>
                
                

                
                
            </div>
        </div>

    </body>
</html>