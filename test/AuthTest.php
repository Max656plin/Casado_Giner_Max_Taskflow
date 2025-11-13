<?php
use PHPUnit\Framework\TestCase;

require_once 'C:/xampp/htdocs/TaskFlow/app/data.php';
require_once 'C:/xampp/htdocs/TaskFlow/app/controllers/AuthController.php';
class AuthTest extends TestCase
{
    public function testLoginConCredencialesValidas()
    {
        $usuarios_bbdd = [
            'usuario1@taskflow.com' => [
                'id' => 1,
                'nombre' => 'Maxim Masin',
                'password' => 'pass123'
            ],
            'usuario2@taskflow.com' => [
                'id' => 2,
                'nombre' => 'Carla Alumna',
                'password' => 'admin'
            ]
        ];

        // ACTUAR: Llamar a la función con datos correctos
        $resultado = handleLogin('usuario1@taskflow.com', 'pass123', $usuarios_bbdd);

        // ASERCIÓN: Afirmar que el resultado es verdadero
        $this->assertTrue($resultado);
    }
    
    public function testLoginConCredencialesInvalidas()
    {
        $usuarios_bbdd = [
            'usuario1@taskflow.com' => [
                'id' => 1,
                'nombre' => 'Maxim Masin',
                'password' => 'pass123'
            ],
            'usuario2@taskflow.com' => [
                'id' => 2,
                'nombre' => 'Carla Alumna',
                'password' => 'admin'
            ]
        ];
        
        $resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo', $usuarios_bbdd);
        $this->assertFalse($resultado);
    }
}
