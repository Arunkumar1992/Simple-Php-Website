
<?php
echo "In a slack bot handler page";
echo $_POST;
echo "new post printed";
$datain = file_get_contents('php://input');
$obj = json_decode($datain);
print_r(json_encode($datain));
echo "new datain printed";
echo $_GET;
echo "new get printed";

echo $obj;
echo "new obj printed";

?>


