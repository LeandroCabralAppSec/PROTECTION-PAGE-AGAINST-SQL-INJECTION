<?php

//disable injection na url

if( in_array( get_query_var( 'pagename' ), $pages ) ) {
  die();

} else {
  header( 'Location: ' . home_url() );
  die();
}
