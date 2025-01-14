<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * El nombre del espacio de nombres para los controladores.
     *
     * @var string
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Mapeo de rutas para el servicio de la aplicación.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();  // Asegúrate de que este método esté llamado

        // Otros métodos de mapeo...
    }

    /**
     * Mapea las rutas de la API.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')  // Este es el prefijo correcto para las rutas de la API
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));  // Asegúrate de que 'api.php' esté correctamente indicado
    }
}
