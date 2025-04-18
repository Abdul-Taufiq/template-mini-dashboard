<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon" aria-hidden="true">
                    <img src="{{ asset('images/logo-rounded.png') }}" alt="Logo"
                        style="width: 45px; height: 45px; margin-right: 9px;">
                </span>
                <div class="logo-text">
                    <span class="logo-title">Mini</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>

                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="newicon fa-duotone fa-solid fa-user-group" aria-hidden="true"></span>Master User
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('master-user.index') }}">Manage User</a>
                        </li>
                        <li>
                            <a href="new-post.html">Show All Activity</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>List
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="posts.html">All List</a>
                        </li>
                        <li>
                            <a href="new-post.html">Add new list</a>
                        </li>
                    </ul>
                </li>


            </ul>
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Appearance</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon category" aria-hidden="true"></span>Extentions
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="extention-01.html">Extentions-01</a>
                        </li>
                        <li>
                            <a href="extention-02.html">Extentions-02</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    {{-- side footer --}}
    <div class="sidebar-footer">
        <a href="{{ route('profile.index') }}" class="sidebar-user">
            <span class="sidebar-user-img" style="background-color: rgb(240, 240, 240);">
                <picture>
                    <img src="{{ Auth::user()->profile_image != null
                        ? asset('images/profile_image/' . Auth::user()->profile_image)
                        : (Auth::user()->UserDetails->gender == 'Laki-laki'
                            ? asset('template/img/avatar/avatar-illustrated-02.webp')
                            : asset('template/img/avatar/avatar-illustrated-01.webp')) }}"
                        alt="Image Profile" style="width: 40px; height: 40px; object-fit: cover; ">
                </picture>
            </span>
            <div class="sidebar-user-info">
                @php
                    function shortenName($name, $maxLength = 9)
                    {
                        if (strlen($name) > $maxLength) {
                            $shortened = substr($name, 0, $maxLength) . '...';
                            return $shortened;
                        }
                        return $name;
                    }
                @endphp
                <span class="sidebar-user__title">{{ shortenName(Auth::user()->nama) }}</span>
                <span class="sidebar-user__subtitle">{{ Auth::user()->jabatan }}</span>
            </div>
        </a>
    </div>
</aside>
