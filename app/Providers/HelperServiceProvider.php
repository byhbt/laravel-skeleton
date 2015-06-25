<?php

/**
 * Description of HelperServiceProvider
 *
 * @author tt
 */
class HelperServiceProvider
{
    public function register()
    {
        foreach (glob(app_path().'/Helpers/*.php') as $filename){
            require_once($filename);
        }
    }
}
