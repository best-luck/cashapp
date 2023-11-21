<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" />
    <link rel="stylesheet"
        href="{{ asset('styles/app.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TasksPage</title>
    </head>
    <body>
        <div class="relative flex flex-row h-screen w-screen">
            @include('navbar')
            @include('sidebar')
            <div class = "content">
                <div class =  content_title2>
                    <p>
                    Olympus
                    </p> 
                </div>
                <div class = "create_form2">
                <span class = "create_form_title">Create task</span>
                    <form class = "create_panel">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category*</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Click</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class = "olympus2video_upload">
                            <label for="exampleInputEmail1">Images*</label>
                            <button type="submit" class="btn ">Seleccionar archivo</button>
                            <label for="exampleInputEmail1">Sin archivo seleccionados</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Iterations*</label>
                            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Time to complete the task*</label>
                            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Earning*</label>
                            <input type="text" class="form-control" id="description" aria-describedby="description" placeholder="Enter description">
                            
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Continue</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>