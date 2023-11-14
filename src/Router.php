<?php

namespace App;

use AltoRouter;

class Router {

  private $viewPath;

  private $router;

  public function __construct(string $viewPath)
  {
    $this->viewPath = $viewPath;
    $this->router = new AltoRouter();
  }

  public function get(string $url, string $view, ?string $name = null): self
  {
    $this->router->map('GET', $url, $view, $name);
    return $this;
  }

  public function url(string $name, array $params = [])
  {
    return $this->router->generate($name, $params);
  }

  public function run(): self
  {
    $match = $this->router->match();
    $view = $match['target'];
    $router = $this;

    ob_start();
    switch($view) {
      case 'access/login' :
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        break;

      case 'admin/drinks' :
      case 'admin/extras' :
      case 'admin/pizzas' :
      case 'admin/orders' :
        $navbar = "admin";
        require $this->viewPath .DIRECTORY_SEPARATOR . 'layouts/navbar.php';
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        break;

      default :
        $navbar = "customer";
        require $this->viewPath .DIRECTORY_SEPARATOR . 'layouts/navbar.php';
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        require $this->viewPath .DIRECTORY_SEPARATOR . 'layouts/footer.php';
    }
    $content = ob_get_clean();

    require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/default.php';

    return $this;
  }




}


?>