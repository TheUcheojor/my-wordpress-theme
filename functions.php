<?php



//Functions pages
//are used to add HOOKS to configure themes
//Basics: enqueueing style sheet and scripts

class StyleSheets{

  public function __construct(){

        //The action I am doing is to at a stylesheet
        add_action('wp_enqueue_scripts',array($this, 'loadStyleSheets'));
        add_action("wp_enqueue_scripts", array($this,'includeJQuery'));
        add_action('wp_enqueue_scripts',array($this, 'loadJavaScripts'));

  }

  public function loadStyleSheets(){

        //Telling wordpress to register the  StyleSheets
        //get_template_directory_uri gets the current template Dir + the stylesheet
        //we want to register
        //CSS and CSS folders are from Bootstrap v4.0.0

        //BASICS: wp_register_style( [ Name of the stylesheet],  [FULL URL OF StyleSheets]  , [ DEFUALT: array()--->An array of registered stylesheet handles this stylesheet depends on],[ DEFAULT: null ------> Version - String specifying stylesheet version number], [DEFAULT: 'all'  ---> ) The media for which this stylesheet has been defined. ] )
        //SAMPLE: wp_register_style( string $handle, string|bool $src, string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
        wp_register_style("wpStylesheet",get_template_directory_uri().'/css/bootstrap.min.css', array(), false,'all' );
        wp_enqueue_style("wpStylesheet");

        wp_register_style("paulStyleSheet", get_template_directory_uri().'/style.css',array(), false,'all');
        wp_enqueue_style("paulStyleSheet");

  }

  public function loadJavaScripts(){
    //BASICS: wp_register_style( [ Name of the stylesheet],  [FULL URL OF StyleSheets]  , [ DEFUALT: array()--->An array of registered stylesheet handles this stylesheet depends on],[ DEFAULT: null ------> Version - String specifying stylesheet version number], [DEFAULT: 'false'  ---> In footer ] )
    //SAMPLE:wp_register_script( string $handle, string|bool $src, string[] $deps = array(), string|bool|null $ver = false, bool $in_footer = false )


        wp_register_script("paulScript",get_template_directory_uri().'/js/paulScript.js','',1,true );

        wp_enqueue_script('paulScript');



  }

  public function includeJQuery(){

        //Jquery may already be registed  by wordpress so deregistering it is a good // IDEA:

        wp_deregister_script('jquery');

        wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.5.1.min.js', '',1,true);

        wp_enqueue_script('jquery');

  }



}

new StyleSheets();





class Foo{


  public function __construct(){
        add_action( 'init', array($this, 'wporg_callback') );

  }
  public function wporg_callback() {
      echo " <h1>Hello World </h1> \n Glad you are here \n TESTING";
  }




}

//new Foo();


//add_action( HOOK, CALL BACK FUNCTION, PRIORITY (an int typically b/t 1 & 20)   )


//HOOKS
    //There are two types of HOOKS
            //Actions
                  // Actions allows you to add data or change how WP operates
                  //Examples
                          //init  - (GOOD FOR PLUGINS) after  user is already authenticated by this time.
                          //wp_loaded - After WordPress is fully loaded
                          //get header - B4 the heaer template file is loarded
            //Filters
                  //igives the abiility to change data during the execution of WP
