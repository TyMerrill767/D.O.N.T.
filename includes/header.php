<header role="banner" id="banner">
    <a href="index.php"><img src="images/logo_only.png" alt="D.O.N.T. logo" id="logo"></a>
    <p id="tagline">Drivers Opposed to Neglecting Toddlers</p>
</header>

<nav role="navigation" id="menu">
    <ul>
        <li><a <?php if ($thisPage=="Home") echo " id=\"home-active\""; ?>href="index.php" class="nav home">Home</a></li>
        <li><a <?php if ($thisPage=="Dangers") echo " id=\"dangers-active\""; ?>href="dangers.php" class="nav dangers">Dangers</a></li>
        <li><a <?php if ($thisPage=="Prevention") echo " id=\"prev-active\""; ?>href="prevention.php" class="nav prev">Prevention</a></li>
        <li><a <?php if ($thisPage=="Take Action") echo " id=\"action-active\""; ?>href="action.php" class="nav action">Take Action</a></li>
        <li><a <?php if ($thisPage=="About Us") echo " id=\"about-active\""; ?>href="about.php" class="nav about">About Us</a></li>
        <li><a <?php if ($thisPage=="Resources") echo " id=\"resources-active\""; ?>href="resources.php" class="nav resources">Resources</a></li>
    </ul>
</nav>
