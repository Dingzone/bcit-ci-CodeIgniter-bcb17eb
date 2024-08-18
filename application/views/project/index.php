<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects and Locations</title>
</head>
<body>
    <h1>Projects</h1>
    <a href="<?php echo site_url('projects/create'); ?>">Add New Project</a>
    <ul>
        <?php foreach ($projects as $project): ?>
            <li>
                <?php echo $project['name']; ?> 
                <a href="<?php echo site_url('projects/edit/'.$project['id']); ?>">Edit</a>
                <a href="<?php echo site_url('projects/delete/'.$project['id']); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Locations</h1>
    <ul>
        <?php foreach ($locations as $location): ?>
            <li><?php echo $location['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
