<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itsjrc</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/css/styles.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com">
    </script>
</head>

<body class="bg-gray-50">
    <div class="container mx-auto">
        <?php echo $content; ?>
        <?php echo $script ?? ''; ?>
    </div>
</body>

</html>