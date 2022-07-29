<?php

class ModelBasic
{
  private $title;
  private $header_style;
  private $header_text;
  private $a_class;
  private $content;

  public function __construct($title, $header_style, $header_text, $a_class, $content)
  {
    $this->title = $title;
    $this->header_style = $header_style;
    $this->header_text = $header_text;
    $this->a_class = $a_class;
    $this->content = $content;
  }

  /**
   * Get the value of title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Get the value of header_style
   */
  public function getHeader_style()
  {
    return $this->header_style;
  }

  /**
   * Get the value of header_text
   */
  public function getHeader_text()
  {
    return $this->header_text;
  }

  /**
   * Get the value of a_class
   */
  public function getA_class()
  {
    return $this->a_class;
  }

  /**
   * Get the value of content
   */
  public function getContent()
  {
    return $this->content;
  }
}
