jQuery(document).ready(function(){
  initAjaxCall();
});

function initAjaxCall() {
  jQuery('.products .product').each(function(){
    var item = jQuery(this);
    item.on('click', function(e) {
      e.preventDefault();

      var product = item.find('.name').text();
      var price = parseInt(item.find('.price').text());

      $.get( "currency.php", function( data ) {
        var rates = JSON.parse(data);

        var ratesKeys = Object.keys(rates.rates);
        var keyLength = ratesKeys.length;

        var randomNum = Math.floor(Math.random() * keyLength);
        var currentKey = ratesKeys[randomNum];
        var randomRate = parseFloat(rates.rates[currentKey]);

        var myRate = price * randomRate;
        alert(product + ' price is ' + ratesKeys[randomNum] + ': ' + myRate.toFixed(2));
      });
    });
  });
}