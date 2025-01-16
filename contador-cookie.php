<? php
if (isset($_COOKIE['count'])) {
   $count = $_COOKIE['count' ];
   $count++;
} else {
   $count = 0;
}
setcookie('count', $count);
echo $count;
?>
