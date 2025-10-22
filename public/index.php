<!-- http://localhost/TaskFlow/public/ -->
<?php
$tasks= [
    [
        'title' => 'Estudiar PHP',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Aprender a dividir',
        'completed' => true,
        'priority' => 'Alta'
    ],
    [
        'title' => 'Entrenar la mente',
        'completed' => false,
        'priority' => 'baja'
    ],
    [
        'title' => 'Actualizar repositorio en GitHub',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Organizar escritorio de trabajo',
        'completed' => false,
        'priority' => 'media'
    ]
];

?>
<?php
define('SITE_NAME', 'TaskFlow');

include '../app/views/header.php';
?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php foreach ($tasks as $task): ?>
        <?php
            $taskClasses = 'task-item';

            if ($task['completed']) {
                $taskClasses .= ' completed';
            }
            switch ($task['priority']) {
                case 'alta':
                    $taskClasses .= ' priority-alta';
                    break;
                case 'media':
                    $taskClasses .= ' priority-media';
                    break;
                case 'baja':
                    $taskClasses .= ' priority-baja';
                    break;
            }
        ?>
        <li class="<?php echo $taskClasses; ?>">
            <?php echo $task['title']; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php
    include("../app/views/footer.php"); // Incluye el pie de página
?>
