<?php

	include 'db_con.php';

	
	$stmt = 'SELECT * FROM subjects';
	$stmt = $pdo->prepare($stmt);
	$stmt->execute();
	$result = $stmt->fetchAll();
	
	if(empty($_GET['id'])){
		$id = 0;
	} else {
		$id = $_GET['id'];
	}

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab 4 - Dynamische content</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <!-- laad hier via php je header in (vanuit je includes map) -->
        <?php
			include_once './includes/header.php';
		?>

        <!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->
        <div class="content">
            <div>
                <img class="content-img" src="<?php echo $result[$id]['image']?>" alt="Image">
                <h2><?php echo $result[$id]['name']?></h2>
                <p><?php echo $result[$id]['description']?></p>
            </div>
        </div>
        <?php
			include_once './includes/footer.php';
		?>
    </main>
</body>

</html>