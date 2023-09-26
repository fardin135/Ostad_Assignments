
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Temperature Converter!!!</title>
</head>

<body>
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h1>Temperature Converter</h1>
                <div class="card text-dark bg-info mb-3" style="">
                    <div class="card-header">
                        <h3>Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Number One</label>
                                <input name="one" type="number" class="form-control">
                            </div>



                            <button type="submit" class="btn btn-primary" name="btn_1">Check(Even or Odd)</button>
                        </form>
                    </div>

                </div>
                <div class=" bg-success mt-3 text-white">
                    <h2>The Result is : <?php
                                        if (isset($_POST['one'])) {
                                            if (isset($_POST['btn_1'])) {
                                                if ($_POST['one']%2==0) {
                                                   echo ($_POST['one']." is an Even Number");
                                                } else {
                                                    echo ($_POST['one']." is an Odd Number");
                                                }
                                            }

                                        }


                                        ?></h2>



                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>