<?php include "connect.php"; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
<body>

<?php

	$result = $link->query('SELECT * FROM memory_cards');

	while ($row = $result->fetch_assoc())
	{
		echo '<p><strong>' . htmlspecialchars($row['carte_a']) . '</strong> : ' . htmlspecialchars($row['carte_b']) . '</p>';
	}

?>
</body>
</html>