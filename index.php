<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>chat system</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .chat-box {
            margin: 100px 400px;
            border: 1px solid #999;
            padding: 50px 30px;
            border-radius: 4px;
        }
        #res {
    text-align: center;
    margin: 20px 0;
}
        #send-img{
            background-color: #f4f4f4;
            padding: 10px 8px;
        }
        #res p{
    background-color: #2488FF;
    padding: 10px 8px;
    font-size: 14px;
    color: #fff;
}
    </style>
</head>

<body>
    <div class="chat-box">
        <div class="text-box">
            <form id="send-chat">
                <input type="text" name="username" id="username" placeholder="enter your name" required>
                <input type="text" name="msg" id="message" placeholder="enter your message" required>

                <button type="submit" id="msg-sbt"><img src="send.svg" width="50px" height="50px" id="send-img"></button>
            </form>
        </div>
        <div id="loading" style="display:none">
            <img src="spinner.gif" alt="loading" width="50px" height="50px">
        </div>
        <div id="res">
            please wait..<img src="spinner.gif" alt="loading" width="50px" height="50px">
        </div>
    </div>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>

</html>