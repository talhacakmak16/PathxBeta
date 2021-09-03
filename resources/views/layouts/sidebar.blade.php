<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Admin Paneli</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.users.index')}}">
                    <i class="material-icons">person</i>
                    <p>Kullanıcılar</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.brand.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Markalar</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.team.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Takımlar</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.jersey.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Ürünler</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.category.index')}}">
                    <i class="material-icons">location_on</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.order.index')}}">
                    <i class="material-icons text-gray">notifications</i>
                    <p>Siparişlerim</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="{{route('admin.special.index')}}">
                    <i class="material-icons">unarchive</i>
                    <p>Gelecek Ürünler</p>
                </a>
            </li>
        </ul>
    </div>
</div>
