Advert Tracker jQuery Plugin
===========================
A fork of original [iframeTracker jQuery Plugin](https://github.com/vincepare/iframeTracker-jquery) - a jQuery plugin that allow tracking of clicks on iframes.

What it does ?
------------------
advertTracker tracks clicks on adverts and triggers a tracking event in Google Analytics for each advert click. Using Google Analytics you'll be able to see what adverts were clicked and on what page.

How to use it ?
------------
 - You will need to have Google Analytics installed on your website
 - You will have to modify your advert code to include an id and a css style (see instructions below)
 - You will have to download and install two scripts into your website (see below)
 
Step 1 - Install Google Analytics
------------
Visit this link and follow the instructions to intall Google Analytics:
[Set up Analytics tracking](https://support.google.com/analytics/answer/1008080?hl=en)
*If you already have Google Analytics installed you can skip this step.*

Step 2 - Modify your advert code
------------
You need to add **id="name-of-your-advert"** into your existing advert code. Your original advert code should look something like this:
```javascript
<ins class="advert"
     style="display:block"
     ad-client="da-XP-0000000000"
     ad-slot="123456789"
     ad-format="long"
     id="name-of-your-advert"></ins>
```
After adding **id="name-of-your-advert"** (remember to add your own name without spaces), your code should look something like this:
```javascript
<ins class="advert"
     style="display:block"
     ad-client="da-XP-0000000000"
     ad-slot="123456789"
     ad-format="long"
     id="header-area-300x250"></ins>
```

Step 3 - Include the jquery.adsensetracker.js
------------
You need to download both of the javascript files (jquery.iframetracker.js and jquery.trackersetup.js) and upload them to your website hosting. In this example the files were uploaded to a folder named **scripts** in the root (public_html) directory of the website hosting.

Add
`
<script src="/scripts/jquery.iframetracker.js"></script>
<script src="/scripts/jquery.trackersetup.js"></script>
`
between the **head** tags in your html. This will need to be done for every page of your website but if you're using a CMS (like WordPress) it will only need to be added to one file. If you are using WordPress a simple solution is to use this plugin to add the code to the head section for you: [Set up Analytics tracking](https://support.google.com/analytics/answer/1008080?hl=en)

If your site does not already have jQuery installed you'll also have to add this script:
`<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>`

***PLEASE NOTE:*** The scripts must be in this order 

Your html should look something like this after you've added the code:
`
<head>
<title>My website</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/scripts/jquery.iframetracker.js"></script>
<script src="/scripts/jquery.trackersetup.js"></script>

</head>
`
