Advert Tracker jQuery Plugin
===========================
A fork of original [iframeTracker jQuery Plugin](https://github.com/vincepare/iframeTracker-jquery) - a jQuery plugin that allow tracking of clicks on iframes.

What it does ?
------------------
advertTracker tracks clicks on adverts and triggers a tracking event in Google Analytics for each advert click. Using Google Analytics you'll be able to see what adverts were clicked and on what page.

How to use it ?
------------
 - You will need to have Google Analytics installed on your website
 - You will have to modify your advert code to include an id (see instructions below)
 - You will have to download and install two scripts into your website (see instructions below)
 
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
     ad-format="long"</ins>
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
***NOTE:*** You should not modify any other part of your advert code

Step 3 - Include the script files
------------
You need to download both of the javascript files (jquery.iframetracker.js and jquery.trackersetup.js) and upload them to your website hosting. In this example the files are uploaded to a folder named **scripts** in the root (public_html) directory of the website hosting.

Add
```
<script src="/scripts/jquery.iframetracker.js"></script>
<script src="/scripts/jquery.trackersetup.js"></script>
```
between the **head** tags in your html. This will need to be done for every page of your website but if you're using a CMS (like WordPress) it will only need to be added to one file. If you are using WordPress a simple solution is to use this plugin to add the code to the head section for you: [AddFunc Head & Footer Code](https://wordpress.org/plugins/addfunc-head-footer-code/)

If your site does not already have jQuery installed you'll also have to add this script:
`<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>`

***NOTE:*** The scripts must be added as close to the closing `</head>` as possible as they require jQuery to be running in order to work correctly. To check if you have jQuery installed, view your websites source code and search for ***jquery***

Your html should look something like this after you've added the code:
```
<head>
<title>My website</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/scripts/jquery.iframetracker.js"></script>
<script src="/scripts/jquery.trackersetup.js"></script>
</head>
```
***NOTE:*** /scripts/ means that the scripts are located in http://mywebsite.com/scripts/.

Final Step - Tracking Advert clicks
------------

After the code has been working for some time and you've earned some money from clicks on your adverts it's time to see which adverts were clicked on. To do this got to Google Analytics and navigate to ***Behavior*** > ***Events***

All your advert click events should be listed, click on the advert, then the click and finally the advert name to see information like what page the visitor was on when they clicked on the advert. You can also create a goal in Google Analytics that will give a clearer picture but that's beyond the scope of what I've done here!

##Enjoy!##
