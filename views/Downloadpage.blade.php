<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body >

        
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-1">

                    <div>
                        <a href="/" >
                            <button type="button" class="btn btn-primary">Back</button>
                            </a>

                    </div>

                </div>
                <div class="col-5 ">

                    <table class="table">
                        <thead>
                          <tr>
                            <th class="col-3">Name</th>   
                          </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($namelist); $i++)
                                <tr>     
                                    <td>{{$namelist[$i]}}</td> 
                                </tr>
                             @endfor
                        </tbody>
                    </table>
                </div>


                <div class="col-5 text-center">
                    <div>
                        <h1>Name Sortered</h1>
                        <p>Please Press button to download file</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ asset("/storage/$filename") }}" download={{ $filename }}>
                            <button type="button" class="btn btn-primary">Download Text File</button>
                            </a>
                            
                    </div>
                   
                </div>



                <div class="col-1"></div>
            </div>
        </div>
    </body>
</html>
