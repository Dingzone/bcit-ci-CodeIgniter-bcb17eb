<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Project</title>
</head>
<body>
    <h1>Create New Project</h1>
    <form action="<?php echo site_url('projects/store'); ?>" method="POST">
        <label for="name">Project Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="location_id">Location:</label>
        <input type="text" id="location_id" name="location_id" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
