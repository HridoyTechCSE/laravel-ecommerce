<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

@if(Auth::user()->role == 'Admin')
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Users
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('users.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>


            </ul>
        </li>

        @endif

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('profiles.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Profile</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('profiles.password.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Password</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Logo
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('logos.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Logo</p>
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Slider
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('sliders.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View slider</p>
                    </a>
                </li>


            </ul>
        </li>



        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Contact
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('contact.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contacts.communicate')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View communicate</p>
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage about
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('about.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View about</p>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Category
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('categories.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Category</p>
                    </a>
                </li>



            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Brand
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('brands.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Brand</p>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Color
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('colors.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Color</p>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Size
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('sizes.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Size</p>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Product
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('products.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Product</p>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Customer
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('customers.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Customer</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('customers.draft.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Draft Customer</p>
                    </a>
                </li>



            </ul>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Orders
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('orders.pending.list')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pending Orders</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('orders.approved.list')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Approve Orders</p>
                    </a>
                </li>



            </ul>
        </li>


    </ul>
</nav>
<!-- /.sidebar-menu -->
