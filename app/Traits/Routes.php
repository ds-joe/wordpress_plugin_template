<?php

/**
 * @package WooCommerceLocations
 */
trait Routes
{

  /**
   * @desc This method using to create plugin routes.
   * @return void
   */
  protected function createRoutes(): void
  {
    add_action('admin_menu', function () {
      $this->createMainRoute();
      $this->createSubRoute(ROUTES);
    });
  }

  /**
   * @desc This method using to create sub routes.
   * @param array $routes
   * @return void
   */
  protected function createSubRoute(array $routes): void
  {
    foreach ($routes as $route) {
      add_submenu_page(
        ROUTE_SLUG,
        $route['page-title'],
        $route['menu-title'],
        $route["capability"],
        $route['page-domain'],
        function () use ($route) {
          require VIEWS_PATH . "/" . $route['file'];
        }
      );
    }
  }

  /**
   * @desc This method using to create main route.
   * @return void
   */
  protected function createMainRoute(): void
  {
    add_menu_page(
      MAIN_ROUTE['page-title'],
      MAIN_ROUTE['menu-title'],
      MAIN_ROUTE['capability'],
      ROUTE_SLUG,
      function () {
        require VIEWS_PATH . "/" . MAIN_ROUTE['file'];
      },
    );
  }

}