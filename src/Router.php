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

  public function post(string $url, string $view, ?string $name = null): self
  {
    $this->router->map('POST', $url, $view, $name);
    return $this;
  }

  public function getPost(string $url, string $view, ?string $name = null): self
  {
    $this->router->map('GET|POST', $url, $view, $name);
    return $this;
  }

  public function url(string $name, array $params = [])
  {
    return $this->router->generate($name, $params);
  }

  public function run(): self
  {
    $match = $this->router->match();
    if (!$match) {
      $view = 'e404';
    } else {
      $view = $match['target'];
    }
    $router = $this;

    try {
      ob_start();
      switch($view) {
        
        case 'access/login' :
        case 'access/logout' :
          require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
          break;
  
        //case 'command/fill' :
        case 'e404' :
        case 'admin/drinks' :
        case 'admin/extras' :
        case 'admin/pizzas' :
        case 'admin/orders' :
        case 'admin/actions/action-delete' :
        case 'admin/actions/action-update' :
        case 'admin/actions/action-create' :
          require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/navbar.php';
          require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
          break;
  
        default :
          require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/navbar.php';
          require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
          require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/footer.php';
      }
      $content = ob_get_clean();
  
      require $this->viewPath . DIRECTORY_SEPARATOR . 'layouts/default.php';

    } catch (SessionException $e) {
      header('Location: ' . $this->url('login') . '?access=0');
    }

    return $this;
  }
}