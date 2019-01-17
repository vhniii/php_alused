<html>

<head>

    <title>Veebileht - Avaleht</title>

</head>


<body>

<h1>Avaleht</h1>

<div class="main-menu">

    <ul>
        <li><a href="index.php">Avaleht</a></li>
        <li><a href="tooted.php">Tooted</a></li>
        <li><a href="hinnakiri.php">Hinnakiri</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>

    </ul>

</div>

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

<?php

if (!empty($_GET['leht'])) {
    $page = htmlspecialchars($_GET['leht']);
    $pages = array('tooted', 'hinnakiri', 'kontakt');
    $kontroll = in_array($page, $pages);

    if($kontroll == true) {

        include($leht.'.php');

    } else {

        echo 'Sellist lehte ei eksisteeri! Vabandame!';

    }


}

?>

</body>



</html>