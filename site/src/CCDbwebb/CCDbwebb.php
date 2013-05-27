<?php
/**
 * Sample controller for a site builder.
 */
class CCDbwebb extends CObject implements IController {

  /**
   * Constructor
   */
  public function __construct() { parent::__construct(); }

  public function Index() {
    $this->views->SetTitle('DBwebb')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(), 'primary')
                ->AddString('<img src="http://dbwebb.se/image/blog/bth-sommar.jpg?w=950&h=180&crop=0,0,0,-250&crop-to-fit&quality=70" alt="" width="950" height="180">', array(),'flash')
                ->AddString('featured-first', array(),'featured-first')
                ->AddString('featured-middle', array(),'featured-middle')
                ->AddString('featured-last', array(),'featured-last')
                ->AddString('sidebartest', array(),'sidebar')
                ->AddString('triptych-first', array(),'triptych-first')
                ->AddString('triptych-middle', array(),'triptych-middle')
                ->AddString('triptych-last', array(),'triptych-last')
                ->AddString('footer-column-one', array(),'footer-column-one')
                ;
  }


}