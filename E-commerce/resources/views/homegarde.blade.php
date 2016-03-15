<html>
    <head>
        <script type="text/javascript" src="../../jkit/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../../jkit/jquery.jkit.1.2.16.min.js"></script>
        <link rel="stylesheet" href="">
        <script type="text/javascript">
            $(document).ready(function(){
                $('body').jKit();
            });
        </script>
        <style>
            div.parallax-container {
                position: relative;
                width: 100%;
                height: 100%;
                overflow: hidden;
                background: #333;
            }
            div.parallax-container div.parallax {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 2000px;
                text-align: center;
                height: 120%;
                font-weight: bold;

            }
        </style>
    </head>
    <body>
        <div class="parallax-container" data-jkit="[parallax:strength=2;axis=both]">
            <div class="parallax">
                <img src="cosmos2.jpg">
                <p><h1><a href="home">www.art-creatif.ch</a></h1></p>
            </div>
        </div>
    </body>
</html>