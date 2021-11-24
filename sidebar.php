<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <h1>Job Request</h1> <!-- <img src="images/icon/logo.png" alt="CoolAdmin" /> -->
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li id="Home">
                    <a href="Home.php">
                        <i class="fas fa-home"></i>Dashboard</a>
                </li>
                <li id="AllJob" class="active has-sub">
                    <!-- <li id="AllJob"> -->
                    <a href="#">
                        <i class="fas fa-align-justify"></i>All Job</a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-power-off"></i>Log Out</a>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <h3>Job Request</h3> <!-- <img src="images/icon/logo.png" alt="Cool Admin" /> -->
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li id="HomeNav">
                    <a id="HomeNavA" href="Home.php">
                        <i class="fas fa-home"></i>Dashboard</a>
                </li>
                <li id="AllJobNav">
                    <a id="AllJobNavA" href="job_all.php">
                        <i class="fas fa-align-justify"></i>All Job</a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-power-off"></i>Log Out</a>
                </li>
                <div style="position: absolute;  bottom: 10px;">
                    <li>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">

                                <a class="js-arrow" href="#">
                                    <?php
                                    include("connect.php");

                                    $sqlT = "SELECT * FROM vw_Employee where EmployeeUsername = '$Username' ";
                                    $queryT = sqlsrv_query($conn, $sqlT);
                                    $resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC);
                                    if (!$resultT) {
                                        // echo "Error while fetching array.\n";
                                        die(print_r(sqlsrv_errors(), true));
                                    } else if ($resultT === null) {
                                        echo "No results were found.\n";
                                    } else {
                                        do { ?>

                                            <i class="fas fa-user"></i><?php echo $resultT["ThFirstName"]; ?> <?php echo $resultT["ThLastName"]; ?>
                                            <?php echo $resultT["EmployeeCode"]; ?>

                                </a>



                        <?php
                                        } while ($resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC));
                                    }
                        ?>


                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
</aside>