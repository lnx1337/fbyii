<?php $userid = Yii::app()->facebook->getUser(); ?>
<?php $loginUrl = Yii::app()->facebook->getLoginUrl();

echo $userid."<br>";

?>
<?php 

$results = Yii::app()->facebook->api('/me');


print_r($results);
 ?>


<a href="<?php echo $loginUrl; ?> " >cambios </a> 