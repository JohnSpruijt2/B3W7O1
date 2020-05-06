<header>
    <img id='header' src="img/header.jpeg" alt="header">
    <nav>
        <a <?php if($_GET['page'] == 'home') {echo "id='active'";} ?> href="?page=home">Home</a>
        <a <?php if($_GET['page'] == 'games') {echo "id='active'";} ?> href="?page=games">Games</a>
        <a <?php if($_GET['page'] == 'planning') {echo "id='active'";} ?> href="?page=planning">Planning</a>
    </nav>
</header>