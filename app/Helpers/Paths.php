<?php
class Paths
{
  private string $rootPath;
  private string $rootUrl;

  public function __construct(string $rootPath, string $rootUrl)
  {
    $this->rootPath = $rootPath;
    $this->rootUrl = $rootUrl;
  }

  /**
   * @desc This method using to get the plugin root path.
   * @return string
   */
  public function rootPath(): string
  {
    return $this->rootPath;
  }

  /**
   * @desc This method using to get root plugin url.
   * @return string
   */
  public function rootUrl(): string
  {
    return $this->rootUrl;
  }

}