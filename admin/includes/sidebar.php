<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id=
"mainNav">

<a class="navbar-brand" href="index.php?dashboard">Admin Panel</a>

<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse"
data-target="#navbarResponsive">

<span class="navbar-toggler-icon"></span>

</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php?dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#pdf">
                <i class="fas fa-file-pdf"></i>
                <span class="nav-link-text">Pdf Requests</span>
                <i class="fas fa-fw fa-caret-down"></i>
            </a>
            <ul class="li-second-level collapse" id="pdf">
                <li>
                    <a href="index.php?view_pdf">View Pdf Requests</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#research">
                <i class="fas fa-project-diagram"></i>
                <span class="nav-link-text">Research Requests</span>
                <i class="fas fa-fw fa-caret-down"></i>
            </a>
            <ul class="li-second-level collapse" id="research">
                <li>
                    <a href="index.php?view_preminary">View Preminary Requests</a>
                </li>
                <li>
                    <a href="index.php?view_project">View Main Project Printing Requests</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#users">
                <i class="fas fa-user"></i>
                <span class="nav-link-text">Users</span>
                <i class="fas fa-fw fa-caret-down"></i>
            </a>
            <ul class="li-second-level collapse" id="users">
                <li>
                    <a href="index.php?insert_user">Insert User</a>
                </li>
                <li>
                    <a href="index.php?view_users">View User</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <i class="fas fa-power-off"></i>
                <span class="nav-link-text">Log Out</span>
            </a>
        </li>
        
    </ul>

    <div class="dropdown ml-auto">

        <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
          <i class="fas fa-user">
          <?php echo $admin_name; ?>
          </i>  
        </a>

        <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?user_profile">

                <i class="fas fa-fw fa-user"></i>Edit Profile

            </a>
            <a class="dropdown-item" href="index.php?view_pdf">

                <i class="fas fa-fw fa-file-pdf"></i>PDFs
                <span class="badge badge-secondary">
                <?php echo $count_pdf; ?>
                </span>

            </a>
            <a class="dropdown-item" href="index.php?view_preminary">

                <i class="fas fa-fw fa-project-diagram"></i>Preminary PDFs
                <span class="badge badge-secondary">
                <?php echo $count_project; ?>
                </span>

            </a>
            <a class="dropdown-item" href="index.php?view_project">

                <i class="fas fa-fw fa-project-diagram"></i>Main Project PDFs
                <span class="badge badge-secondary">
                <?php echo $count_research; ?>
                </span>

            </a>
            <div class="dropdown-divider">
                <a class="dropdown-item" href="logout.php">

                    <i class="fas fa-power-off"></i>Log Out

                </a>
            </div>
           

        </div>


    </div>

</div>





</nav>