<!DOCTYPE html>
<html>
<head>
  <title>asd</title>
  <link rel="stylesheet" href="./Css/style.css">
</head>
<body>
<div class="pdf">
    <div class="pdfContainer">
    <div id="top">
        <h1>{{$data->title}}</h1>
        <h3>Written By: {{$data->author}}</h3>
    </div>
    <div id="mid">
        <div id="midleft">
            <img src="images/backcover.jpg" alt="">
            <p>{{$data->author}}</p>
        </div>
        <div id="midright">
            <p>{{$data->shortdescription}}</p>
        </div>
    </div>
    <div id="bottom">
        <h1>Published By Bri Books</h1>
        <p>Bri Books is the world's leading children creative writing platform, enabling children to learn crearive writing writing and publish thier books on global outlets such as Amazon. Powered by cutting edge AI system, BriBooks combines the complete process of ideation,creativity,book writing ,publishing, and selling on one single platform.
        </p>
        <span>&copy; BriBooks</span>
    </div>
    <div id="footer">
        <div id="leftfooter">
            <h1>BriBooks</h1>
            <a href="">www.bribooks.com</a>
            <p>preview copy for limited distribution</p>
        </div>
        <div id="rightfooter">
            <h1>QR CODE</h1>
        </div>
    </div>
    </div>
</div>
</body>
</html>
