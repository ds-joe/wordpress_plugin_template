<?php
class Scripts
{

  /**
   * @desc This method using to create stylesheet link
   * @param string $file
   * @return void
   */
  public static function createStylesheet(string $file): void
  {
    $file = STYLES_URL . "/" . $file . ".css";
    echo <<<"stylesheet"
      <link rel="stylesheet" href="{$file}" />
    stylesheet;
  }

  /**
   * @desc This method using to create script element.
   * @param string $file
   * @param bool $defer
   * @param string $type
   * @return void
   */
  public static function createScript(string $file, bool $defer = true, string $type = "module"): void
  {
    $file = SCRIPTS_URL . "/" . $file . ".js";
    $lazyLoad = $defer ? "defer" : "";
    echo <<<"script"
      <script src="{$file}" {$lazyLoad} type="{$type}"></script>
    script;

  }


}