<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Draw and View</title>
    <script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script>
    <style>
        #colors_sketch { border: 1px solid #000; margin: 0 auto; display: block;}
        .theSize { text-align: center; color: #000; text-decoration: none; border: 1px solid black; display: inline-block; width: 20px !important; height: 20px !important; background: #bababa }
        .theColors { border: 1px solid black; display: inline-block; width: 20px !important; height: 20px !important;}
    </style>
</head>
<body>
<div id="content">
    <h1>Draw and view on different screens</h1>
    <a href="view.html">View the drawing</a>

    <div class="tools">
        <a href="#colors_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
    </div>
    <canvas id="colors_sketch" width="1000" height="700"></canvas>

</div>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="sketch.js"></script>
<script src="main.js"></script>
</body>
</html>