<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des pages</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Back Office</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Pages</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">
    <h1>Liste degueu</h1>
    <a href="?a=ajouter">Ajouter</a>
    <table class="table-bordered table-responsive table">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>
        <?php if (count($data) == 0 ):?>
            <tr>
                <td colspan="4">
                    Pas de page
                </td>
            </tr>
        <?php endif;?>
        <?php foreach($data as $page):?>
            <tr>
                <td><?=$page->id?></td>
                <td><?=$page->slug?></td>
                <td><?=$page->title?></td>
                <td>
                    <a href="?a=details&id=<?=$page->id?>">Détails</a> |
                    <a href="?a=modifier&id=<?=$page->id?>">Modifier</a> |
                    <a href="?a=supprimer&id=<?=$page->id?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <a href="?a=ajouter">Ajouter</a>
</div>
</body>
</html>