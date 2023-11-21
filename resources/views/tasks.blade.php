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
                
                <div class= main_content>
                    <div class = "tasks_button">
                        <button class = "tasks_create">
                            Create task
                        </button>
                    </div>
                    <div class = "task_table">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">Active</th>
                                <th scope="col">Task</th>
                                <th scope="col">Done</th>
                                <th scope="col">Amount spent</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>here goes the name of the task</td>
                                    <td>25</td>
                                    <td>352</td>
                                    <td></td>
                                </tr>
                                
                            </tbody>
                        </table>

                        <div class = task_pagination>
                            <p>Previous</p>
                            <p>Next</p>
                        </div>
                    </div>

                </div>
                
    
            </div>
        </div>

    </body>
</html>