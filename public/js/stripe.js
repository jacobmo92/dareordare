$(document).ready(function() {
  var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');
  var elements = stripe.elements();

  // Custom styling can be passed to options when creating an Element.
  var style = {
    base: {
      // Add your base input styles here. For example:
      fontSize: '18px',
      lineHeight: '24px',
    }
  };

  // Create an instance of the card Element
  var card = elements.create('card', {style: style});

  // Add an instance of the card Element into the `card-element` <div>
  card.mount('#card-element');
});