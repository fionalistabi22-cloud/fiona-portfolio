<?php
$navbarBase = basename(dirname($_SERVER['PHP_SELF'])) === 'projects' ? '../' : '';
?>

<header class="site-header">
    <div class="container navbar-wrapper">
        <a class="site-logo" href="<?php echo $navbarBase; ?>index.php" aria-label="Fiona Lista Nivie home">
            Fiona Lista Nivie
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
            <span class="menu-toggle-label">Menu</span>
            <span class="menu-icon" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <nav class="site-navigation" id="site-navigation" aria-label="Primary navigation">
            <ul class="nav-links">
                <li><a href="<?php echo $navbarBase; ?>index.php#home">Home</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#about">About</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#skills">Skills</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#projects">Projects</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#experience">Experience</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#education">Education</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#certifications">Certifications</a></li>
                <li><a href="<?php echo $navbarBase; ?>index.php#contact">Contact</a></li>
            </ul>

            <ul class="social-links" aria-label="Social links">
                <li>
                    <a href="https://github.com/fionalistabi22-cloud" target="_blank" rel="noopener noreferrer">
                        GitHub
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/fiona-lista-nivie-2530ba254" target="_blank" rel="noopener noreferrer">
                        LinkedIn
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>