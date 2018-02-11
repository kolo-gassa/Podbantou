<?php

  if(!function_exists(page_title))
  {

    function page_title($title)
    {
      $TITRE_APPLI = 'Podbantou';
      if($title==''){
        return $TITRE_APPLI;
      }
      else{
        return $title.' | '.$TITRE_APPLI;
      }
    }
  }