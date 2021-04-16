<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Exam Maker</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <?php
                        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/dashboard';
                        echo '<a class="nav-link" href=' . $url . '>Dashboard<span class="sr-only">(current)</span></a>';
                        ?>
                    </li>
                    <li class="nav-item active">
                        <?php
                        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/questions';
                        echo '<a class="nav-link" href=' . $url . '>Questions<span class="sr-only">(current)</span></a>';
                        ?>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wellcome <?php echo $_SESSION['username']; ?></a>
                        <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Account Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>