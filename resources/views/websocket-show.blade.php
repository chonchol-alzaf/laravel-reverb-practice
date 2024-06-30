<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="text-center">
            <p class="m-3 p-3">Hello developer, if any event is occur then will be show here</p>
            <div id="message"></div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Echo.channel(`dashboard`)
                .listen('OrderShipped', (e) => {
                    console.log("Hello");
                    console.log(e);

                    const messageElement = document.getElementById('message');

                    messageElement.textContent = JSON.stringify(e, null, 2);
                });
        })
    </script>
</body>

</html>
