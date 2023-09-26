<!-- class 5:::::::::::::::::::::::::::::::: -->
<!-- shift + alt + F -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Grade Calculator</title>
</head>

<body>
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card text-dark bg-info mb-3" style="">
                    <div class="card-header">
                        <h3>Grade Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Test One</label>
                                <input name="one" type="number" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Test Two</label>
                                <input name="two" type="number" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Test Three</label>
                                <input name="three" type="number" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary" name="grade">Calculate Grade</button>
                        </form>
                       
                    </div>
                   
                </div>
                <div class=" bg-success mt-3 text-white">
                            <h2>The Average is : <?php
if (isset($_POST['one']) && ($_POST['two']) && ($_POST['three'])) {
    if (isset($_POST['grade'])) {
            $mark= (($_POST['one'] + $_POST['two'] +  $_POST['three'])/3);
        echo $mark;
        echo "<br>";
        if ($mark >= 80 && $mark <= 100) {
            echo "A";
        }
        else if ($mark >= 70 && $mark <= 79) {
            echo "B";
        }
        else if ($mark >= 60 && $mark <= 69) {
            echo "C";
        }
        else if ($mark >= 50 && $mark <= 59) {
            echo "D";
        }
        else if ($mark >= 0 && $mark <= 59){
            echo "Fail";
        }
        if ($mark >100 || $mark <0) {
            echo "Invalid Number";
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

