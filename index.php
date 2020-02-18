<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="assets/js/bootstrap.js"></script> -->

    <script src="assets/js/index.js"></script>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <div class="container " style="margin-top:20%">
        <h1 class="text-center">Binário para decimal</h1>
        <form class="form">

            <div class="row justify-content-center">
                <label for="target" class="col-1">Binário</label>
                <input type="text" id="binario" class="ml-2 form-control form-control-sm col-4" value="" maxlength="8" autocomplete="off" autofocus placeholder="Digite um número binário" />
                <button id="btnConverterBin2Dec" class="ml-2 btn btn-primary btn-sm col-2">
                    Converter para Decimal
                </button>
            </div>

            <div class="row py-2 justify-content-center">
                <label for="pattern" class="col-1">Decimal</label>
                <input type="text" id="decimal" class=" ml-2 form-control form-control-sm col-4" value="" autocomplete="off" placeholder="Digite um número decimal" />
                <button id="btnConverterDec2Bin" class="ml-2 btn btn-primary btn-sm col-2">
                    Converter para Binário
                </button>
            </div>

        </form>
        <br />
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
