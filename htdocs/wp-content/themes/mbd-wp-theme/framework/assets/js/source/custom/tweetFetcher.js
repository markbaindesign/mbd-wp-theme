/*
=====================================================
        
    Twitter-Post-Fetcher
    
=====================================================
*/ 

// https://github.com/jasonmayes/Twitter-Post-Fetcher

/**
 * ### HOW TO CREATE A VALID ID TO USE: ###
 * Go to www.twitter.com and sign in as normal, go to your settings page.
 * Go to "Widgets" on the left hand side.
 * Create a new widget for what you need eg "user time line" or "search" etc.
 * Feel free to check "exclude replies" if you don't want replies in results.
 * Now go back to settings page, and then go back to widgets page and
 * you should see the widget you just created. Click edit.
 * Look at the URL in your web browser, you will see a long number like this:
 * 345735908357048478
 * Use this as your ID below instead!
 */ 

jQuery(document).ready(function($) { // Wrap all scripts in this

  var config5 = {
    // "profile": {"screenName": twitter_handle.twitter_id},
    "profile": {"screenName": 'mbain'},
    "domId": 'twitter-feed',
    "maxTweets": 3,
    "enableLinks": true,
    "showUser": true,
    "showTime": true,
    "dateFunction": '',
    "showRetweet": true,
    "customCallback": handleTweets,
    "showInteraction": true
  };

  function handleTweets2(tweets){
      var x = tweets.length;
      var n = 0;
      var element = document.getElementById( 'twitter-feed' );
      var html = '<ul class="tweet-list">';
      while(n < x) {
        html += '<li>' + tweets[n] + '</li>';
        n++;
      }
      html += '</ul>';
      element.innerHTML = html;
      $( "a" ).wrapInner( "<span></span>" );
  }

  function handleTweets(tweets){
      var x = tweets.length;
      var n = 0;
      //var element = document.getElementById('slides');
      var html = '';
      while(n < x) {
        html += '<li>' + tweets[n] + '</li>';
        n++;
      }
      html += '';
      // element.innerHTML = html;
      $('.twitter-feed').find("div.slides").html(html);
     $( "a" ).wrapInner( "<span></span>" ); // wrap text in span for styling

  } 
  
twitterFetcher.fetch(config5);

  /**
   *
   *  Slider config
   *
   */

  var configSlider = {
    "id": twitter_handle.twitter_id,
    "domId": 'twitter-feed-slider',
    "maxTweets": 5,
    "enableLinks": true,
    "showUser": false,
    "showTime": true,
    "dateFunction": '',
    "showRetweet": false,
    "customCallback": handleSliderTweets,
    "showInteraction": true
  };


  function handleSliderTweets(tweets){
      var x = tweets.length;
      var n = 0;
      //var element = document.getElementById('slides');
      var html = '';
      while(n < x) {
        html += '<li class="slide">' + tweets[n] + '</li>';
        n++;
      }
      html += '';
      $('#twitter-feed-slider').find("ul.slides").html(html);
      $( "a" ).wrapInner( "<span></span>" );
  }

  // twitterFetcher.fetch(configSlider);


}); // end Wrap all scripts in this