<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Discord Webhook Sender - Fabian9799</title>

    <!-- Favicon -->
    <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link type="text/css" href="style.css" rel="stylesheet">

    <meta property="og:title" content="Webhook">
    <meta property="og:url" content="https://fabian9799.de">
    <meta name="theme-color" content="#00fff7">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>Discord Webhook Sender</h2>
                <h3>Webhook Link:</h3><input type='text' id="link" placeholder="https://discordapp.com/api/webhooks/xxx">
                <h3>Bot Username:</h3><input type="text" id="username" placeholder="Mr. Hook">
                <h3>Avatar URL:</h3><input type="text" id="avatar_url" placeholder="https://fabian9799.de/img/fabian9799.png">

                <h3>Content:</h3><input type="text" id="content" placeholder="Hello this is a great message">
                <button class="btn btn-primary" id="btn" style="margin-top: 40px">Send</button>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
</body>

</html>