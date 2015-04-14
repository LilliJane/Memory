<?php include "connect.php";

// On démarre la session AVANT d'écrire du code HTML
session_start();

?>


<?php

	$result = $link->query('SELECT * FROM memory_cards ');

	while ($row = $result->fetch_assoc())
	{
		echo '<p><strong>' . htmlspecialchars($row['carte_a']) . '</strong> : ' . htmlspecialchars($row['carte_b']) . '</p>';
	}

?>
</body>
</html>