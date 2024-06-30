<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    Hello developer, 
    <div id="message"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Echo.channel(`dashboard`)
                .listen('OrderShipped', (e) => {
                    console.log("Hello");
                    console.log(e);

                    const messageElement = document.getElementById('message');

                    // Convert the event data to a string and display it
                    messageElement.textContent = JSON.stringify(e, null, 2);
                });
        })
    </script>
</body>

</html>
