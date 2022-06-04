<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toolsx Presales Notification</title>
</head>
    <body>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Trackfi Presales Transaction Details</h5>
                <hr/>
                <p class="card-text"><b>Transaction ID: </b>{{ $data['trxId'] }}</p>
                <hr/>
                <p class="card-text"><b>Algo Paid: </b>{{ $data['algoSent'] }}</p>
                <hr/>
                <p class="card-text"><b>Trackfi Received: </b>{{ $data['toolToReceive'] }}</p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    </body>
</html>