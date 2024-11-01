<?php
/*
Plugin Name: WPT Hello World
Description: Shows "Hello World!" on the center of every page. Educational purposes.
Version: 1.0.1
Author: Sergio Guillén (WPTester77)
License: GPLv3
*/


//Añado Hook para cada vez que se carga una página o post.
add_filter( 'the_content', 'wptester_hello_world', 10, 2 );

function wptester_hello_world( $content, $id ) {
  $content = $content.'<div style="z-index:6000; position:absolute; top:10%;left:50%;width:200px;height:50px;background-color:red;color:white; border: 1px solid white; margin-top: -25px; margin-left: -100px;">Hello World!</div>';
  return $content;
}
?>