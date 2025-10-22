<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        .task-item {
            padding: 10px;
            margin: 5px 0;
            border-left: 5px solid #ccc;
            list-style-type: none;
        }
        .completed {
            text-decoration: line-through;
            color: #888;
        }
        .priority-alta {
            border-left-color: #e74c3c;
        }
        .priority-media {
            border-left-color: #f39c12;
        }
        .priority-baja {
            border-left-color: #27ae60;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    <main>