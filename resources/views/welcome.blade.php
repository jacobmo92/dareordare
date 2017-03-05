<!DOCTYPE html>
<html>
    <head>
        <title>Dare or Dare</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/lightbox.min.css') }}" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('js/imageSwap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/lightbox.min.js') }}" type="text/javascript"></script>
    </head>
    <body class="home" id="home">
        
        <div class="container-fluid header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 logo">Dare or Dare</div>
                </div>
            </div>
        </div>

        <div class="container-fluid white section">
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

        <div class="container-fluid green section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>What is <span>Dare or Dare</span>?</h1>
                        <h3>It's not truth or dare, it's Dare or Dare! You'll laugh, drink, get embarrassed, and be involved in many awkward situations.</h3>
                        <p>Are your college parties or casual Friday night hangouts getting boring? Are you and your group running out of new and exciting games to play? Have you grown tired of relying on beer pong to get you drunk?</p>
                        <p>Then Dare or Dare is exactly what you need!</p>
                        <div class="spacer"></div>
                        <h1>How do you play <span>Dare or Dare</span>?</h1>
                        <p>Dare or Dare is actually quite simple to play.</p>
                        <p>When it is your turn, you will roll the red, green, and yellow die. This roll will determine which color card you play.</p>
                        <p>After picking up your card, look at the top dare. You can either choose to play the dare, or pass. If you play the dare, and are successful, you keep the card.  If you fail, you discard the card.</p>
                        <p>If you pass the dare, you will lay it face down so nobody else can see it. Another player may choose to take the card for themselves. </p>
                        <p>If you play a declined card, you will play the bottom dare. If you successfully complete the dare, you keep the card as you normally would. If you pass on it, or fail it, you must discard the current card plus one of your own, or discard the current card and take a shot.</p>
                        <img src="{{ asset('/images/dice.png') }}" alt="dice">
                        <small>If you see this icon on a card, you roll the 1-6 die to determine how much you do something or for how long</small>
                        <img src="{{ asset('/images/silent.png') }}" alt="dice">
                        <small>If you see this icon on a card, you play the card without reading it off</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid white section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 galleryImage">
                        <a href="{{ asset('/images/box1.jpg') }}" data-lightbox="image-1" ><img src="{{ asset('/images/box1.jpg') }}" class="img-responsive"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 galleryImage">
                        <a href="{{ asset('/images/box2.jpg') }}" data-lightbox="image-1" ><img src="{{ asset('/images/box2.jpg') }}" class="img-responsive"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 galleryImage">
                        <a href="{{ asset('/images/box3.jpg') }}" data-lightbox="image-1" ><img src="{{ asset('/images/box3.jpg') }}" class="img-responsive"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 galleryImage">
                        <a href="{{ asset('/images/box4.jpg') }}" data-lightbox="image-1" ><img src="{{ asset('/images/box4.jpg') }}" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
