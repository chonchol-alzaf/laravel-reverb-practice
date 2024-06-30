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
        <h4 class="m-3 p-3">Hello developer,  <a href="{{ route('websocket.show') }}">Click to view reverb update</a></h4>
       

        <div class="row">
            <form action="{{ route("status-update") }}" method="POST">
                @csrf
                <div class="col-md-4">
                    <p> Select Status</p>
                    <select name="status" class="form-select">
                        <option>Processing</option>
                        <option>Shipped</option>
                        <option>Delivered</option>
                        <option>Cancel</option>
                        <option>Return</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div id="message"></div>

    </div>

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
