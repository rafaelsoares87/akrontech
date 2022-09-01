<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akrontech</title>
    @vite(['resources/css/siteApp.css'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    @include('layouts.site.header')

    <div class="">
        @yield('content')
    </div>


    @include('layouts.site.footer')


    <script>
        function mascaraFone(event) {
            var valor = document.getElementById("telefone").attributes[0].ownerElement['value'];
            var retorno = valor.replace(/\D/g, "");
            retorno = retorno.replace(/^0/, "");
            if (retorno.length > 10) {
                retorno = retorno.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (retorno.length > 5) {
                if (retorno.length == 6 && event.code ==
                    "Backspace") { // necessário pois senão o "-" fica sempre voltando ao dar backspace
                    return;
                }
                retorno = retorno.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (retorno.length > 2) {
                retorno = retorno.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                if (retorno.length != 0) {
                    retorno = retorno.replace(/^(\d*)/, "($1");
                }
            }
            document.getElementById("telefone").attributes[0].ownerElement['value'] = retorno;
        }
    </script>
    <script src="https://kit.fontawesome.com/d113113a6e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
