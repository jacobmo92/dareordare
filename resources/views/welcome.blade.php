<!DOCTYPE html>
<html>
    <head>
        <title>Dare or Dare</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('js/imageSwap.js') }}" type="text/javascript"></script>
    </head>
    <body class="home" id="home">
        
        <div class="container-fluid">
            <div class="container header">
                <div class="row">
                    <div class="col-xs-12 logo">Dare or Dare</div>
                </div>
            </div>
        </div>

        <div class="container-fluid green section">
            <div class="container">
                <div class="row">
                    <div id="hoverNotify"><span>Hover Over The Cards!<span></div>
                    <div class="cardRow">
                        <div class="col-xs-12 cards">
                            <div class="col-xs-12 col-sm-4 card">
                                <img src="{{ asset('/images/2-back.png') }}" id="cardOne" onmouseover="changeImageTo('cardOne')" onmouseout="changeImageBack('cardOne')">
                            </div>
                            <div class="col-xs-12 col-sm-4 card">
                                <img src="{{ asset('/images/1-back.png') }}" id="cardTwo" onmouseover="changeImageTo('cardTwo')" onmouseout="changeImageBack('cardTwo')">
                            </div>
                            <div class="col-xs-12 col-sm-4 card">
                                <img src="{{ asset('/images/3-back.png') }}" id="cardThree" onmouseover="changeImageTo('cardThree')" onmouseout="changeImageBack('cardThree')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
