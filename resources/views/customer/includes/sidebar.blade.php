<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="index.html">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> Dashboard</a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> Order</a>
            <ul class="nav-group-items compact">
                <li class="nav-item"><a class="nav-link" href="{{url('/customer/order/all')}}"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>All Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/customer/order/pending')}}"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>Pending Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/customer/order/confirmed')}}"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>Confirmed Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/customer/order/delivered')}}"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>Delivered Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/customer/order/returned')}}"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>Returned Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/customer/order/cancelled')}}"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>Cancelled Orders</a></li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
</div>
