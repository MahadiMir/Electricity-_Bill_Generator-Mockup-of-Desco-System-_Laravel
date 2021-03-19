<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{route('index')}}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('assets/images/faces/admin.png')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::check() ? Auth::user()->name: "Non User"}}</span>
                    <span class="text-secondary text-small">Management</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">
                <span class="menu-title">Management</span>
                <i class="mdi mdi-account-badge menu-icon"></i>
            </a>
        </li>
            <div class="Inventory">
                <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-inventory" aria-expanded="false" aria-controls="ui-basic-inventory">
                    <span class="menu-title">Customers List</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-inventory">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('customer.show')}}">Customer</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('customer.payment')}}">Payments</a></li>
{{--                        <li class="nav-item"> <a class="nav-link" href="{{route('bill.receipt1')}}">Payments1</a></li>--}}
                    </ul>
                </div>
            </li>
            </div>
        <div class="Customer">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-customer" aria-expanded="false" aria-controls="ui-basic-customer">
                    <span class="menu-title">Frontend</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-customer">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('customer.index')}}">Customer UI</a></li>
                    </ul>
                </div>
            </li>
        </div>
    </ul>
</nav>
