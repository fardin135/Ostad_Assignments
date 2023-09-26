<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator</title>
</head>

<body>
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
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

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Number Two</label>
                                <input name="two" type="number" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary" name=" add_btn">ADD (+)</button>
                            <button type="submit" class="btn btn-primary" name=" sub_btn">SUB (-)</button>
                            <button type="submit" class="btn btn-primary" name=" mul_btn">MUL (*)</button>
                            <button type="submit" class="btn btn-primary" name=" div_btn">DIV (/)</button>
                        </form>
                       
                    </div>
                   
                </div>
                <div class=" bg-success mt-3 text-white">
                            <h2>The Result is : <?php
if (isset($_POST['one']) && ($_POST['two'])) {
    if (isset($_POST['add_btn'])) {
        echo $_POST['one'] + $_POST['two'];
    }
    if (isset($_POST['sub_btn'])) {
        echo $_POST['one'] - $_POST['two'];
    }
    if (isset($_POST['mul_btn'])) {
        echo $_POST['one'] * $_POST['two'];
    }
    if (isset($_POST['div_btn'])) {
        echo $_POST['one'] / $_POST['two'];
    }
}


?></h2>
                            


                        </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

