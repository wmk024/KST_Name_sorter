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
                <div class="col-4 ">
                </div>
                <div class="col-4 text-center">
                    <div>
                        <h1>Name Sorter </h1>
                        <p>Please input your file here</p>
                    </div>
                    <div class="mt-5">
                        <form method="post" action="/sort" class="mb-5" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="mb-3">
                                <label for="txt-File" class="form-label">Text File</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control" type="file" id="txt-File" name="txt-File" onchange="previewFileContent()">   
                                <div class="invalid-feedback">
                                   
                                </div>
                               
                            </div>
                    
                    
                            <button type="submit" class="btn btn-primary">Sort Name</button>
                          </form>

                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </body>
</html>
