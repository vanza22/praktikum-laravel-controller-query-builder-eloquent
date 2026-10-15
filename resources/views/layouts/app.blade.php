<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul', 'Sistem Informasi Akademik')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #050d1c;
            color: #eaf2ff;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .navbar {
            height: 76px;
            background: #07152b;
            border-bottom: 1px solid #18365d;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .brand h2 {
            font-size: 21px;
            color: #ffffff;
        }

        .brand p {
            color: #8daedb;
            font-size: 13px;
            margin-top: 5px;
        }

        .user {
            color: #a9c8f5;
            font-size: 14px;
        }

        .layout {
            display: flex;
            min-height: calc(100vh - 76px);
        }

        .sidebar {
            width: 240px;
            flex-shrink: 0;
            background: #071329;
            border-right: 1px solid #18365d;
            padding: 24px 15px;
        }

        .menu-title {
            color: #7196c9;
            font-size: 11px;
            letter-spacing: 2px;
            margin: 5px 12px 15px;
        }

        .menu a {
            display: block;
            padding: 14px 16px;
            margin-bottom: 8px;
            border-radius: 10px;
            color: #b9cce8;
            transition: 0.2s;
        }

        .menu a:hover,
        .menu a.active {
            background: linear-gradient(100deg, #1454cb, #12347a);
            color: white;
        }

        .sidebar hr {
            border: 0;
            border-top: 1px solid #1a3457;
            margin: 22px 0;
        }

        .main {
            flex: 1;
            min-width: 0;
            padding: 30px;
        }

        .welcome {
            min-height: 250px;
            padding: 36px;
            border: 1px solid #214e8a;
            border-radius: 18px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            background:
                linear-gradient(90deg, rgba(3, 12, 29, .96),
                rgba(4, 20, 48, .72), rgba(4, 20, 48, .15)),
                url('/images/kampus.png') center 45% / cover;
        }

        .welcome-content {
            max-width: 510px;
        }

        .tag {
            display: inline-block;
            background: #102b50;
            color: #8dbbff;
            border: 1px solid #24518c;
            padding: 7px 12px;
            border-radius: 30px;
            font-size: 12px;
            margin-bottom: 16px;
        }

        .welcome h1 {
            font-size: clamp(27px, 3vw, 40px);
            line-height: 1.2;
            margin-bottom: 12px;
        }

        .welcome h1 span {
            color: #3985ff;
        }

        .welcome p {
            color: #b5c9e8;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 12px 19px;
            border-radius: 9px;
            background: #216cff;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .button:hover {
            background: #4384ff;
            transform: translateY(-2px);
        }

        .section-title {
            font-size: 21px;
            margin-bottom: 18px;
        }

        .quick-menu {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-bottom: 28px;
        }

        .quick-card {
            display: block;
            background: linear-gradient(145deg, #0c1d39, #09142a);
            border: 1px solid #1c3e6b;
            border-radius: 14px;
            padding: 22px;
            transition: 0.2s;
        }

        .quick-card:hover {
            border-color: #3985ff;
            transform: translateY(-3px);
            background: #102448;
        }

        .quick-card .icon {
            font-size: 25px;
            margin-bottom: 14px;
        }

        .quick-card h3 {
            margin-bottom: 9px;
            font-size: 17px;
        }

        .quick-card p {
            color: #91afd8;
            font-size: 13px;
            line-height: 1.6;
        }

        .content-card {
            background: #08162c;
            border: 1px solid #1b365b;
            border-radius: 14px;
            padding: 24px;
            margin-bottom: 22px;
            overflow-x: auto;
        }

        .content-card h2,
        .content-card h3 {
            margin-bottom: 18px;
        }

        .content-card p {
            line-height: 1.8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            min-width: 550px;
        }

        th {
            background: #10284b;
            color: #c8ddff;
            text-align: left;
        }

        th, td {
            padding: 13px;
            border-bottom: 1px solid #1b365b;
        }

        td {
            color: #d0def3;
        }

        tr:hover td {
            background: #0d203d;
        }

        input, select, textarea {
            width: 100%;
            padding: 11px;
            margin: 7px 0 15px;
            border-radius: 8px;
            border: 1px solid #294a75;
            background: #071329;
            color: white;
        }

        label {
            color: #b9cce8;
        }

        .content-card button,
        .content-card input[type="submit"] {
            width: auto;
        }

        .footer {
            color: #718eb7;
            text-align: center;
            padding: 24px 10px;
            font-size: 12px;
        }

        @media (min-width: 1200px) {
            .quick-menu {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media (max-width: 760px) {
            .navbar {
                padding: 0 16px;
            }

            .brand h2 {
                font-size: 16px;
            }

            .brand p {
                font-size: 11px;
            }

            .layout {
                display: block;
            }

            .sidebar {
                width: 100%;
                padding: 12px;
                border-right: none;
                border-bottom: 1px solid #18365d;
            }

            .menu-title,
            .sidebar hr {
                display: none;
            }

            .menu {
                display: flex;
                gap: 7px;
                overflow-x: auto;
            }

            .menu a {
                white-space: nowrap;
                margin: 0;
                padding: 11px 13px;
            }

            .main {
                padding: 16px;
            }

            .welcome {
                padding: 24px;
                min-height: 280px;
            }

            .quick-menu {
                grid-template-columns: 1fr;
            }

            .content-heading {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 20px;
                flex-wrap: wrap;
                margin-bottom: 24px;
            }

            .content-heading h1 {
                font-size: 30px;
                margin: 12px 0;
            }

            .content-heading p {
                color: #91afd8;
                line-height: 1.6;
            }

            .content-card .button {
                font-size: 12px;
                padding: 8px 12px;
                margin: 2px;
            }

            .content-card form {
                display: inline;
            }

            
            /* Memperbaiki pagination Laravel */
            nav[role="navigation"] {
                margin-top: 20px;
                font-size: 14px;
            }

            nav[role="navigation"] svg {
                width: 18px !important;
                height: 18px !important;
            }

            nav[role="navigation"] a,
            nav[role="navigation"] span {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 34px;
                min-height: 34px;
                padding: 6px 10px;
                border-radius: 7px;
                color: #b9cce8;
            }

            nav[role="navigation"] a:hover {
                background: #153563;
                color: white;
            }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="brand">
            <h2>Sistem Informasi Akademik</h2>
            <p>Politeknik Negeri Banjarmasin</p>
        </div>

        <div class="user">Portal Akademik • Mahasiswa</div>
    </header>

    <div class="layout">
        <aside class="sidebar">
            <p class="menu-title">MENU UTAMA</p>

            <nav class="menu">
                <a href="{{ route('mahasiswa.index') }}"
                   class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">
                    ▦ &nbsp; Mahasiswa
                </a>

                <a href="{{ route('matakuliah.index') }}"
                   class="{{ request()->routeIs('matakuliah.*') ? 'active' : '' }}">
                    ▤ &nbsp; Mata Kuliah
                </a>

                <a href="{{ route('mahasiswa.jumlah-prodi') }}"
                   class="{{ request()->routeIs('mahasiswa.jumlah-prodi') ? 'active' : '' }}">
                    ▥ &nbsp; Laporan Akademik
                </a>
            </nav>

            <hr>

            <p class="menu-title">INFORMASI</p>
            <div class="menu">
                <a href="{{ route('mahasiswa.index') }}">⌂ &nbsp; Beranda Data</a>
            </div>
        </aside>

        <main class="main">
            @if (request()->routeIs('mahasiswa.index'))
                <section class="welcome">
                    <div class="welcome-content">
                        <span class="tag">PORTAL AKADEMIK</span>
                        <h1>Selamat Datang di<br>
                            <span>Sistem Informasi Akademik</span>
                        </h1>
                        <p>
                            Kelola data mahasiswa, mata kuliah, dan laporan
                            akademik dalam satu tempat.
                        </p>
                        <a class="button" href="{{ route('mahasiswa.create') }}">
                            + Tambah Mahasiswa
                        </a>
                    </div>
                </section>

                <h2 class="section-title">Menu Akademik</h2>

                <section class="quick-menu">
                    <a class="quick-card" href="{{ route('mahasiswa.index') }}">
                        <div class="icon">👨‍🎓</div>
                        <h3>Data Mahasiswa</h3>
                        <p>Lihat dan kelola data mahasiswa.</p>
                    </a>

                    <a class="quick-card" href="{{ route('matakuliah.index') }}">
                        <div class="icon">📚</div>
                        <h3>Mata Kuliah</h3>
                        <p>Kelola informasi mata kuliah.</p>
                    </a>

                    <a class="quick-card" href="{{ route('mahasiswa.jumlah-prodi') }}">
                        <div class="icon">📊</div>
                        <h3>Laporan Akademik</h3>
                        <p>Lihat statistik jumlah mahasiswa per prodi.</p>
                    </a>

                    <a class="quick-card" href="{{ route('mahasiswa.create') }}">
                        <div class="icon">➕</div>
                        <h3>Tambah Mahasiswa</h3>
                        <p>Masukkan data mahasiswa baru.</p>
                    </a>
                </section>
            @endif

            <section class="content-card">
                @yield('konten')
            </section>

            <footer class="footer">
                &copy; {{ date('Y') }} Sistem Informasi Akademik
                • Politeknik Negeri Banjarmasin
            </footer>
        </main>
    </div>
</body>
</html>