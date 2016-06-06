<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification de la page</title>
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
    <h1>Modification de la page</h1>

    <form action="?a=modifier&id=<?=$data->id?>" method="post">
        <input type="hidden" name="id" value="<?=$data->id?>">
        <h4>Slug</h4><input name="slug" type="text" value="<?=$data->slug?>">
        <h4>Title</h4><input name="title" type="text" value="<?=$data->title?>">
        <h4>Body</h4><textarea name="body" rows="10" cols="100"><?=htmlentities($data->body)?></textarea>
        <input type="submit">
    </form>

</div>
</body>
</html>