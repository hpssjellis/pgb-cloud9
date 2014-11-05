inappbrowser-pgb-helloworld
===========================



Jan 21, 2014  When I loaded this code into Phonegap Client everything worked as expected in the API's. 


Retried using Phonegap Build and basically inAppBrowser loads the chrome browser every time if the access config is set to any url. If anyone can solve this please explain how.



Jan 15, 2014 Just did a major redo and things are still the same. With the phonegap plugin inappbrowser, and the access origin set to any website I get all links going to a brand new phone default web browser (Chrome - that's good). otherwise it is like inappbrowser is not there and all links go to the default internal phonegap web browser, but I can not choose it is either all or nothing.










No idea if I am doing things correctly but this simple Android App does open all links into the default Android (Chrome) web browser on at least a Samsung Galaxy S3.

All calls to _blank  _system  _self seem useless and I could not get the Phonegap Browser to work at all once the inappbrowser pluggin was working

The main criteria seems to be having an  <access origin="anySite.com" />   in your config.xml file. Not sure why since the  website does not have to go to that site. Note the two values 



        <access />            - a blank access tag denies access to all external resources.
        <access origin="*" /> - a wildcard access tag allows access to all external resource.

 did not work. Or at least all links went to the internal phonegap browser, which I think happens even if you do not have the inappbrower installed at all
 
 Done Jan 10, 2014
 
 
 
 
 
 Presently not seeing this behaviour at all. Either I do not use the plugin and all webpages go to the internal phongap browser or I use the plugin and all links to the installed device (Chrome on my phone)
 
 target: The target in which to load the URL, an optional parameter that defaults to _self. (String)

_self: Opens in the Cordova WebView if the URL is in the white list, otherwise it opens in the InAppBrowser.
_blank: Opens in the InAppBrowser.
_system: Opens in the system's web browser.







************************************************************************************************************

###Disclaimer: I spend my time getting complex things working in simple ways. I have no idea if I am doing anything correctly so please beware if you use my work. If you like this App and can hum, play or sing please help the musically illiterate, use a flash capable computer to add your favorite song at http://www.rocksetta.com 



