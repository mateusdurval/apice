<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="/home/style.css">
        <title>Document</title>
    </head>

    <body>
        <div class="row" style="margin: 0; height: 100vh">
            <div class="col-md-6">
                <iframe src="https://files.passeidireto.com/b4632a4b-9033-48be-b732-715be93d9548/1.html" class="iframe" width="100%" style="height: 100%"></iframe>
            </div>
            <div class="col-md-6">
                <a href="javascript:void(0)" class="btn btn-lg btn-primary btnProx">Próximo</a>
            </div>
        </div>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script></script>
    <script>
        $(document).ready(function() {
            var url = 'https://files.passeidireto.com/b4632a4b-9033-48be-b732-715be93d9548/1.html';
            var new_url = url.split("/");
            new_url[4] = 1;
            console.log(new_url);
            $(document).on('click', '.btnProx', function() {
                new_url[4]++;
                $(".iframe").attr("src", new_url.join("/")+'.html')
            });
        });
    </script>
</html>