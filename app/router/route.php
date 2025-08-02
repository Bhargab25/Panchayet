<?php
/**
 * Centralized Routing System
 * Handles both public and admin page routing
 */

class Router
{
    private $routes = [];
    private $adminRoutes = [];

    public function __construct()
    {
        $this->setupPublicRoutes();
        $this->setupAdminRoutes();
    }

    /**
     * Define public page routes
     */
    private function setupPublicRoutes()
    {
        $this->routes = [
            '' => '../templates/home.php',
            'index.php' => '../templates/home.php',
            'home' => '../templates/home.php',
            'panchayat' => '../templates/glance.php',
            'water' => '../templates/water.php',
            'Publichealth' => '../templates/public.php',
            'social' => '../templates/socialScheme.php',
            'education' => '../templates/education.php',
            'polling-station' => '../templates/polling-station.php',
            'activity' => '../templates/activity.php',
            'swachh-bharat' => '../templates/swachh-bharat.php',
            'orders' => '../templates/orders.php',
            'etender' => '../templates/etender.php',
            'contact' => '../templates/contact.php',
        ];
    }

    /**
     * Define admin page routes
     */
    private function setupAdminRoutes()
    {
        $this->adminRoutes = [
            'admin' => '../admin/index.php',
            'admin/dashboard' => '../admin/dashboard.php',
            'admin/upload' => '../admin/upload.php',
            'admin/manage-pages' => '../admin/manage-pages.php',
            'admin/logout' => '../admin/logout.php',
        ];
    }

    /**
     * Get the requested page from URL
     */
    public function getRequestedPage()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Remove base path if present
        $base = '/app/public/';
        if (strpos($uri, $base) === 0) {
            $uri = substr($uri, strlen($base));
        }

        $uri = trim($uri, '/');

        // Remove index.php if present
        if ($uri === 'index.php') {
            $uri = '';
        }

        return $uri;
    }

    /**
     * Check if route is an admin route
     */
    private function isAdminRoute($route)
    {
        return strpos($route, 'admin') === 0;
    }

    /**
     * Handle admin authentication
     */
    private function handleAdminAuth($route)
    {
        // Skip auth check for admin login page
        if ($route === 'admin' || $route === 'admin/') {
            return true;
        }

        // Check if admin is logged in for other admin routes
        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            header('Location: ' . BASE_URL . '/admin');
            exit;
        }

        return true;
    }

    /**
     * Route the request to appropriate page
     */
    public function route()
    {
        $requestedPage = $this->getRequestedPage();

        // Handle admin routes
        if ($this->isAdminRoute($requestedPage)) {
            $this->handleAdminAuth($requestedPage);

            if (array_key_exists($requestedPage, $this->adminRoutes)) {
                $this->loadPage($this->adminRoutes[$requestedPage], false); // No header/footer for admin
                return;
            }
        }

        // Handle public routes
        if (array_key_exists($requestedPage, $this->routes)) {
            $this->loadPage($this->routes[$requestedPage], true); // With header/footer
            return;
        }

        // Handle dynamic routes (e.g., blog posts with IDs)
        if ($this->handleDynamicRoutes($requestedPage)) {
            return;
        }

        // 404 - Page not found
        $this->show404();
    }

    /**
     * Handle dynamic routes (e.g., blog/post-id)
     */
    private function handleDynamicRoutes($route)
    {
        $parts = explode('/', $route);

        // Example: blog/123 -> load blog post with ID 123
        if (count($parts) === 2 && $parts[0] === 'blog' && is_numeric($parts[1])) {
            $_GET['post_id'] = $parts[1];
            $this->loadPage('../templates/blog-single.php', true);
            return true;
        }

        return false;
    }

    /**
     * Load the requested page
     */
    private function loadPage($templatePath, $includeHeaderFooter = true)
    {
        if (!file_exists($templatePath)) {
            $this->show404();
            return;
        }

        if ($includeHeaderFooter) {
            include '../includes/header.php';
            include $templatePath;
            include '../includes/footer.php';
        } else {
            include $templatePath;
        }
    }

    /**
     * Show 404 error page
     */
    private function show404()
    {
        http_response_code(404);

        $errorPagePath = '../templates/404.php';
        if (file_exists($errorPagePath)) {
            include '../includes/header.php';
            include $errorPagePath;
            // include '../includes/footer.php';
        } else {
            // Simple fallback content if 404.php is missing
            echo "<h1>404 - Page Not Found</h1>";
            echo "<p>The requested page was not found.</p>";
            echo "<p><a href='" . BASE_URL . "'>Return to Home</a></p>";
        }
    }

    /**
     * Get current route (useful for navigation highlighting)
     */
    public function getCurrentRoute()
    {
        return $this->getRequestedPage();
    }
}

// Helper functions for easy access
function route()
{
    $router = new Router();
    $router->route();
}

function getCurrentRoute()
{
    $router = new Router();
    return $router->getCurrentRoute();
}
?>