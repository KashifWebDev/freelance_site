<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="{{ route('index') }}" class="sidebar-logo">
            <img src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="site logo" class="light-logo">
            <img src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="site logo" class="dark-logo">
            <img src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{ route('client.all-freelancers') }}">
                    <iconify-icon icon="gridicons:multiple-users" class="menu-icon"></iconify-icon>
                    <span>All Freelancers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('client.chat') }}">
                    <iconify-icon icon="basil:chat-solid" class="menu-icon"></iconify-icon>
                    <span>Messages</span>
                </a>
            </li>
            <li>
                <a href="{{ route('client.my-contracts') }}">
                    <iconify-icon icon="clarity:contract-line" class="menu-icon"></iconify-icon>
                    <span>Contracts</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('client.invoice') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
                    </li>
                    <li>
                        <a href="{{ route('client.invoice-show') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
