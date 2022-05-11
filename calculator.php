                            <!-- calculator app 
                            developed by 
                            Aashish Gurung
                            909IT -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="calculate.js"></script>
</head>

<body>

    <div class="container w-lg-xl-xxl-50 p-5 mt-5 align-items-center border">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2 bd-highlight">


                <div class="container  " style="background-color: blanchedalmond;">


                    <div class="container text-end">
                        <span class="display" id="dis">
                            0
                        </span>
                    </div>

                </div>

            </div>


            <div class="grid-container">


                <button type="button" onclick="fun(01)" class="btn btn-secondary btn-lg">1</button>

                <button type="button" onclick="fun(2)" class="btn btn-secondary btn-lg">2</button>

                <button type="button" onclick="fun(3)" class="btn btn-secondary btn-lg">3</button>

                <button type="button" onclick="oper('plus')" class="btn btn-secondary btn-lg">+</button>

                <button type="button" onclick="fun(4)" class="btn btn-secondary align-items-center btn-lg">4</button>

                <button type="button" onclick="fun(5)" class="btn btn-secondary btn-lg">5</button>

                <button type="button" onclick="fun(6)" class="btn btn-secondary btn-lg">6</button>

                <button type="button" onclick="oper('sub')" class="btn btn-secondary btn-lg">-</button>

                <button type="button" onclick="fun(7)" class="btn btn-secondary align-items-center btn-lg">7</button>

                <button type="button" onclick="fun(8)" class="btn btn-secondary btn-lg">8</button>

                <button type="button" onclick="fun(9)" class="btn btn-secondary btn-lg">9</button>

                <button type="button" onclick="oper('div')" class="btn btn-secondary btn-lg">/</button>

                <button type="button" onclick="fun(0)" class="btn btn-secondary align-items-center btn-lg">0</button>

                <button type="button" onclick="fun(10)" class="btn btn-secondary btn-lg">.</button>

                <button type="button" onclick="result()" class="btn btn-secondary btn-lg">=</button>

                <button type="button" onclick="oper('times')" class="btn btn-secondary btn-lg">x</button>

                <button type="button" onclick="cc()" class="btn btn-secondary btn-lg">C</button>


            </div>

        </div>


    </div>




</body>

</html>