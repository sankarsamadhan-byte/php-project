

<head>
<title>

</title>
<body>

<?php

$sam =new mysqli("localhost","root","","broo");

echo "conssction satblish ";

$sql = "ALTER TABLE every ADD COLUMN STU_ADDD VARCHAR(20)";
$sam->query($sql);

echo "<br>Column added";

$sql = "UPDATE every SET STU_ADDD='Ahmedabad' WHERE STUD_ID=13";
$sam->query($sql);

echo "<br>Update complete";

$sam->close();


?>

</body>

</head>