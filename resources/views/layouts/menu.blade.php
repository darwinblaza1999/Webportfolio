<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Dashboard
        <!-- <i class="right fas fa-angle-left"></i> -->
        </p>
    </a>

</li>

<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
        Users
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
<ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>View users</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
        Profile
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('profile')}}" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Profile Setting</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
        Portfolio
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('image')}}" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Images</p>
            </a>
        </li>
    </ul>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>System Overview</p>
            </a>
        </li>
    </ul>
</li>
