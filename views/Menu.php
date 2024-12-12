<?php
	if(!isset($_SESSION))
    {
        session_start();
    }
	var_dump($_SESSION);
 ?>
<link rel="stylesheet" href="css/style.css">
<nav id="navbar">
        <div id="nav-container">
            <h1 class="logo">
                Freezer Tricolor
            </h1>
            <ul id="nav-items">
                <li>
                    <a href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/cadastro">
                        cadastro
                    </a>
                </li>
                    <?php
                        if(!isset($_SESSION["perfil"]))
                        {
                            echo "
                        <li>
                            <a href='/login'>
                                Login
                            </a>
                        </li>";
                        }
                        else
                        {
                            echo "
                            <li>
                                <a href='/logout'>
                                    sair
                                </a>
                            </li>";
                        }
	                ?>
            </ul>
        </div>
    </nav>