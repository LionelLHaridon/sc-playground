<html>
<head>
<title>SC playground</title>

</head>
<body>

<h1>Welcome to SC playground!</h1>


<ul>
<?php foreach($experiments as $experiment):?>

<li>
  
  <a href="<?= $experiment->path;?>"><?= $experiment->title;?></a> 
  <div><?= $experiment->description;?></div>
</li>


<?php endforeach;?>
</ul>


</body>
</html>