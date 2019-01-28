<html>


<head>

    <title>Require/Include kasutamine</title>

</head>


<body>

<h1>Avaleht</h1>

<div class="main-menu">

    <ul>
        <li><a href="index.php">Avaleht</a></li>
        <li><a href="index.php?leht=kontakt">Kontakt</a></li>
        <li><a href="index.php?leht=leht1">Leht1</a></li>
        <li><a href="index.php?leht=leht2">Leht2</a></li>

    </ul>

</div>


<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    } else {
        echo 'Ei eksisteeri, proovi uuesti!';
    }
}
?>


<div class="content">

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui massa, lobortis at magna ut, venenatis ultrices libero.
        Praesent pulvinar nisl erat, tincidunt convallis sapien aliquet at. Fusce sit amet erat lectus. Quisque interdum nisi sit amet diam ornare cursus.
        Nunc malesuada mi leo, at aliquet purus sagittis a. Nam nisi dolor, tincidunt non erat sed, tempor tempor augue.
        Fusce tempor lorem eu neque accumsan, vitae tempor ipsum sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        Sed nec est et enim pellentesque fringilla. Sed eget lacinia arcu, sit amet pharetra tortor.
        Morbi dolor eros, euismod eget odio dignissim, lobortis ultrices ex. Pellentesque pretium sapien ac orci dictum dictum.
        Proin commodo nulla orci, eu viverra purus pretium vestibulum. Ut a scelerisque lectus, eu mattis ligula. Nulla at est mauris.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

    </p>

</div>

</body>



</html>