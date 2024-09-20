<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'bizever_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'bizever_framework',
    'framework_title' => __('Bizever Theme Options', 'biziver'),
  ) );

  //
  // Create a section

  CSF::createSection( $prefix, array(
    'title'  => 'Posts Section',
    'id'  => 'posts-section',
    'icon'  => 'dashicons dashicons-welcome-widgets-menus',
  ) );

  //
  // Create a sub section
  CSF::createSection( $prefix, array(
    'title'  => 'Posts Header Section',
    'id'  => 'posts-header-section',
    'parent'  => 'posts-section',
    'icon'  => 'dashicons dashicons-admin-comments',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'recent-posts',
        'type'  => 'text',
        'title' => 'Recent posts',
        'default' => 'Recent posts',

      ),
      // A text field
      array(
        'id'    => 'latest-news-update',
        'type'  => 'text',
        'title' => 'Latest News Update',
        'default' => 'Latest News Update',
      ),

    )
  ) );

  //
  // Create a sub section
  CSF::createSection( $prefix, array(
    'title'  => 'Posts',
    'id'  => 'posts',
    'parent'  => 'posts-section',
    'icon'  => 'dashicons dashicons-admin-comments',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'recent-posts',
        'type'  => 'text',
        'title' => 'Recent posts',
        'default' => 'Recent posts',

      ),
      // A text field
      array(
        'id'    => 'latest-news-update',
        'type'  => 'text',
        'title' => 'Latest News Update',
        'default' => 'Latest News Update',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
