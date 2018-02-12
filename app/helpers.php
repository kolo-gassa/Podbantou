<?php

  if(!function_exists(page_title))
  {

    function page_title($title)
    {
      $TITRE_APPLI = config('app.name');
      if($title==''){
        return $TITRE_APPLI;
      }
      else{
        return $title.' | '.$TITRE_APPLI;
      }
    }
  }


   if(!function_exists(set_active_route))
  {

    function set_active_route($route)
    {
      return Route::is($route) ? 'active' : '';
    }
  }