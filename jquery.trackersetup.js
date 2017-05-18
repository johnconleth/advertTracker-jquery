/**
 * adsense tracker jQuery plugin setup
 *
 * Setup file for using original iframe click tracker jQuery plugin to track AdSense clicks
 * @author John Conleth (http://JohnConleth.com)
 * @copyright © 2017 John Conleth
 * @version 1.0
 */

// add iframe tracking to all elements with .adsbygoogle style attached
$(function() {
   $('.adsbygoogle iframe').iframeTracker({
   blurCallback: function(){
    ga('send', 'event', 'Advert', 'click', this._overId);
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
 
