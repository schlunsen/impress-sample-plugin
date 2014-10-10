<?php
/**
 * Load JavaScript file.
 */
namespace Plugin\RSMapPlugin;


class Event
{
    /**
     * This method is launched before loading the controller.
     * Add JS and CSS files here.
     */
    public static function ipBeforeController()
    {

        //ipAddJs('https://maps.googleapis.com/maps/api/js?client=204146756598-q4n8gd4o9v70vpgknhq8stccv6kossdo.apps.googleusercontent.com&v=3.17');
        ipAddJs('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&callback=ipGoogleMapsLoadedCallback');
        ipAddJs('assets/rsmapplugin.js');
    }

}
