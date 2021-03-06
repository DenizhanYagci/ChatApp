
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <headline2> </headline2>

    <title>Chat Application</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class="app">
        <header>
            <h1>ChatGen</h1>
            <input type="text" name="username" id="username" placeholder="Enter Username..." />
        </header>
        <div id="messages"></div>
        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Message..." />
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>
