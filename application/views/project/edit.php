<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>
    <form action="<?php echo site_url('projects/update/'.$project['id']); ?>" method="POST">
        <label for="name">Project Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $project['name']; ?>" required>
        <br>
        <label for="location_id">Location:</label>
        <input type="text" id="location_id" name="location_id" value="<?php echo $project['location_id']; ?>" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
