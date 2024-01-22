<?php

/**
 * @return view
 */


 if( !function_exists('viewPath'))
 {
    function viewPath($fileName, $data=null)
    {
        // dd($data);
        return view($fileName, $data ? ($data) : []);
    }
 }