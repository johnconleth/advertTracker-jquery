/**
 * iframe click tracker jQuery plugin setup
 *
 * Setup file for using iframe click tracker jQuery plugin to track AdSense clicks
 * @author John Conleth (http://JohnConleth.com)
 * @copyright © 2017 John Conleth
 * @version 1.0
 */


// add iframe tracking to all elements with .adsenseadvert style attached
$(function() {
   $('.adsenseadvert iframe').iframeTracker({
   blurCallback: function(){
    $('<div class="consoledebug">').html('Click on iframe : #' + this._overId).appendTo('#status');
    console.log(this._overId);
    ga('send', 'pageview', 'advert-'+this._overId);

    //console.log(this);
   },
   overCallback: function(element){
    this._overId = $(element).parents('.adsenseadvert').attr('id'); // Saving the iframe wrapper id
   },
   outCallback: function(element){
    this._overId = null; // Reset hover iframe wrapper id
   },
   _overId: null
  });
});
 
