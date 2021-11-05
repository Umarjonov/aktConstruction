<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Контрольного обмера</title>
    <!-- Custom styles for this template -->
{{--    <link href="{{ asset('dist/css/form-validation.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('dist/css/all.css') }}" rel="stylesheet">--}}
    <style>
        .title{
            font-size: 58px;
            text-transform: uppercase;
            font-weight: 700;
            color: #ffc001;
        }
        @media only screen and (min-width: 800px) {
            .section-center {
                padding-top: 130px;
            }
        }
    </style>
</head>
<body class="section" style="background-image: url('consImages/headerImg1.png');background-size: cover;">
<div class="section-center">
    <div class="container ">
        <h1 class="title">Контрольного обмера</h1>
        <form action="" method="POST">
            @csrf
            <div class="row align-items-stretch">
                <div class="col-md-8 p-1">
                    <div class="bg-light row p-2 w-100 h-100" style="border: 1px solid #ffc001;box-shadow: 0 0 10px #ccc;border-radius: 0.625rem;">
                        <div class="form-group col-md-6">
                            <label for="zakazchik">zakazchik</label>
                            <input type="text" name="zakazchik" id="zakazchik" class="form-control w-100" required placeholder="Recipient's zakazchik">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bajaruvchi">bajaruvchi</label>
                            <input type="text" name="bajaruvchi" id="bajaruvchi" class="form-control w-100" required placeholder="Recipient's bajaruvchi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="object">object</label>
                            <input type="text" name="object" id="object" class="form-control w-100" required placeholder="Recipient's object">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <label for="sum1" class="pl-3 w-100">obmerom rabot na</label>
                                <div class="col-7">
                                    <input type="number" name="sum1" id="sum1" class="form-control w-100" required placeholder="Recipient's summa">
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <input type="checkbox" name="check-num1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">sum s nds</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="data1">data start</label>
                                    <input type="date" name="data1" id="data1" class="form-control w-100" required placeholder="Recipient's object">
                                </div>
                                <div class="col-6">
                                    <label for="data2">data end</label>
                                    <input type="date" name="data2" id="data2" class="form-control w-100" required placeholder="Recipient's object">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <label for="sum2" class="pl-3 w-100">результате obmera na</label>
                                <div class="col-7">
                                    <input type="number" name="sum2" id="sum2" class="form-control w-100" required placeholder="Recipient's summa">
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <input type="checkbox" name="check-num2" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">sum s nds</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit"
                                    class="submit-btn w-100 font-weight-bold py-3"
                            style="color: #101113;background-color: #ffc001;border:none;border-radius: 0.5rem;text-transform: uppercase;">Send</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1">
                    <div class="bg-light p-2" id="name-group" style="overflow-y: auto;height: 25rem;border: 1px solid #ffc001;box-shadow: 0 0 10px #ccc;border-radius: 0.625rem;">
                        <label for="">Injener name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Injener name" required aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2022 SQB Construction</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
{{--<script src="{{ asset('dist/js/all.js') }}" ></script>--}}
<script>
    let i = 1;
    $("#button-addon2").on('click',function () {
        $("#name-group").append(`<div class="input-group mb-3"><input type="text" name="name${i}" class="form-control" required placeholder="Injener name${i}"></div>`);
        i++;
    });

</script>
<script>
{{--    // Example starter JavaScript for disabling form submissions if there are invalid fields--}}
{{--    (function() {--}}
{{--        'use strict';--}}

{{--        window.addEventListener('load', function() {--}}
{{--            // Fetch all the forms we want to apply custom Bootstrap validation styles to--}}
{{--            var forms = document.getElementsByClassName('needs-validation');--}}

{{--            // Loop over them and prevent submission--}}
{{--            var validation = Array.prototype.filter.call(forms, function(form) {--}}
{{--                form.addEventListener('submit', function(event) {--}}
{{--                    if (form.checkValidity() === false) {--}}
{{--                        event.preventDefault();--}}
{{--                        event.stopPropagation();--}}
{{--                    }--}}
{{--                    form.classList.add('was-validated');--}}
{{--                }, false);--}}
{{--            });--}}
{{--        }, false);--}}
{{--    })();--}}
</script>
</body>
</html>
