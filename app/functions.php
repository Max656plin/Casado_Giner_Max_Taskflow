<?php
function obtenerClasePrioridad($prioridad)
{
    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return '';
    }
}

function renderizarTarea($tarea)
{
    $clases = 'task-item';

    if (!empty($tarea['completado'])) {
        $clases .= ' completed';
    }

    $priorClass = obtenerClasePrioridad(isset($tarea['prioridad']) ? $tarea['prioridad'] : '');
    if ($priorClass !== '') {
        $clases .= ' ' . $priorClass;
    }

    $titulo = isset($tarea['titulo']) ? htmlspecialchars($tarea['titulo'], ENT_QUOTES, 'UTF-8') : '';

    return "<li class=\"{$clases}\">{$titulo}</li>" . PHP_EOL;
}
?>

   