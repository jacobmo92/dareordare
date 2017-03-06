<!DOCTYPE html>
<html>
    <head>
        <title>Dare or Dare</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/lightbox.min.css') }}" rel="stylesheet" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{ asset('js/stripe.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/imageSwap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/lightbox.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/buy.js') }}" type="text/javascript"></script>
    </head>
    <body class="home" id="home" ng-app="myApp" ng-controller="myCtrl">
        
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

        <div class="container-fluid red section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 buyHeader">
                        <h2>Get <span>Dare or Dare</span></h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 buyOption">
                        <h3>Kickstarter</h3>
                        <p>Back Dare or Dare on Kickstarter now before it's available anywhere else.</p>
                        <div id="kickstarter" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Dare or Dare will be on Kickstarter soon!"><img src="{{ asset('/images/kickstarter-logo-light.png') }}" alt="Kickstarter"></div>
                        <div class="col-xs-12 col-sm-6 share">
                            <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/dareordaregame/">Share Dare or Dare on Facebook</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 share">
                            <a href="http://twitter.com/intent/tweet?status=Check out Dare or Dare!+https://www.facebook.com/dareordaregame/">Share Dare or Dare on Twitter</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 share">
                            <a href="https://plus.google.com/share?url=https://www.facebook.com/dareordaregame/">Share Dare or Dare on Google+</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 share">
                            <a href="http://www.reddit.com/submit?url=https://www.facebook.com/dareordaregame/">Share Dare or Dare on Reddit</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 share">
                            <a href="http://www.tumblr.com/share?v=3&u=https://www.facebook.com/dareordaregame/">Share Dare or Dare on Tumblr</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 buyOption">
                        <h3>Right Here</h3>
                        <form>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name">What's your name? *</label>
                                <input type="text" class="form-control" id="name" name="name" required="required">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="email">What's your email? *</label>
                                <input type="text" class="form-control" id="email" name="email" required="required">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="phone">What's your phone number?</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12">
                                <label for="address">Where are we sending it? *</label>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="required">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" required="required">
                                <h1 ng-show="myVar">My Header</h1>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" class="form-control" id="state" name="state" placeholder="State" required="required">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <div id="country">
                                    <select name="country" class="form-control" required="required" ng-model="countrySelect" ng-change="updatePrice()">
                                        <option ng-repeat="country in countries" value="<% country %>"><% country %></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="cc-name">Credit card *</label>
                                <div id="card-element">
                                      <!-- a Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors -->
                                    <div id="card-errors"></div>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="amount">How many do you want? *</label>
                            </div>
                            <div class="form-group col-xs-12 amount">
                                <div class="col-xs-3">
                                    <input type="radio" id="a1" checked="checked" name="amount" value="1" ng-model="amount" ng-value="1" ng-change="updatePrice()">
                                    <label for="a1">1</label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="radio" id="a2" name="amount" value="2" ng-model="amount" ng-value="2" ng-change="updatePrice()">
                                    <label for="a2">2</label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="radio" id="a3" name="amount" value="3" ng-model="amount" ng-value="3" ng-change="updatePrice()">
                                    <label for="a3">3</label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="radio" id="a4" name="amount" value="4" ng-model="amount" ng-value="4" ng-change="updatePrice()">
                                    <label for="a4">4</label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-xs-6 buyButton">
                                <button type="submit" disabled="disabled">Available Soon</button>
                            </div>
                            <div class="form-group col-xs-6 buyButton">
                                <span><% priceTotal %></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid white" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="http://jacobmorris.me">jacobmorris.me</a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
