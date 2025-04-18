<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Praktikum 5</title>

  <!-- DaisyUI & Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

  <!-- Custom Style -->
  <style>
    /* Styling sidebar & navbar */
    .sidebar-item {
      color: white !important;
      background-color: transparent;
      transition: background 0.2s ease;
    }

    .sidebar-item:hover {
      background-color: #4c52e3 !important;
      color: white !important;
    }

    .sidebar-item.active {
      background-color: #5e64ff !important;
      color: white !important;
      font-weight: bold;
    }

    .menu summary {
      color: white !important;
    }

    .menu summary:hover {
      background-color: #4c52e3 !important;
      color: white !important;
    }

    .menu li ul li a {
      color: white !important;
      padding-left: 2.5rem;
    }

    .menu li ul li a:hover {
      background-color: #4c52e3 !important;
      color: white !important;
    }

    .menu li ul {
      background-color: transparent;
    }

    .custom-navbar {
      background-color: #EDEDED;
      color: black;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="flex flex-col w-64 border-r shadow-md" style="background-color: #3339CD;">
      <div class="flex items-center justify-center h-16">
        <img src="/images/logo.png" class="w-14 h-14 mt-5" alt="Logo" />
      </div>
      <div class="font-bold divider mb-2 text-center text-xl text-white">Lidya's Store</div>

      <ul class="menu w-full rounded-box px-2">
        <li>
          <!-- Bagian active sebaiknya dikontrol backend sesuai halaman aktif -->
          <a class="sidebar-item" href="/DashboardAdmin">
            <i class="fas fa-tachometer-alt mr-1"></i>Dashboard
          </a>
        </li>
        <li>
          <!-- Juga bisa dikasih kondisi active via backend -->
          <a class="sidebar-item" href="/MenuItem">
            <i class="fas fa-file-medical mr-2"></i>Produk
          </a>
        </li>
        <li>
          <details>
            <summary><i class="fas fa-users mr-1"></i>Users</summary>
            <ul>
              <li>
                <a class="sidebar-item" href="/">
                  <i class="fas fa-user mr-2"></i>Admin
                </a>
              </li>
              <li>
                <a class="sidebar-item" href="/">
                  <i class="fas fa-user mr-2"></i>Customer
                </a>
              </li>
            </ul>
          </details>
        </li>
        <li>
          <!-- Juga bisa dikasih kondisi active via backend -->
          <a class="sidebar-item" href="/Pembayaran">
            <i class="fas fa-credit-card mr-2"></i>Pembayaran
          </a>
        </li>
        <li>
          <!-- Link logout sebaiknya diarahkan ke route logout dari backend -->
          <a class="sidebar-item" href="/Login">
            <i class="fas fa-sign-out-alt mr-1"></i>Logout
          </a>
        </li>
      </ul>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
      <!-- Navbar -->
      <div class="navbar bg-[#EDEDED] text-black shadow-md px-4 custom-navbar">
        <div class="flex-1">
          <!-- Judul halaman bisa diisi dinamis dari backend -->
          <h1 class="text-xl font-bold"></h1>
        </div>

        <div class="flex-none gap-4 items-center">
          <!-- Nama user diambil dari session / auth backend -->
          <span class="text-sm font-semibold">Hi, Lidya</span>
          <!-- nanti ini diubah dinamis -->

          <!-- Avatar user -->
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar me-6" aria-label="User Profile">
              <div class="w-10 h-10 rounded-full overflow-hidden tooltip" data-tip="User Profile">
                <!-- URL gambar juga harus dinamis dari user login -->
                <img src="/images/profile.jpeg" class="w-full h-full object-cover" alt="Profile" />
              </div>
            </div>
            <ul tabindex="0" class="menu dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a class="justify-between">Profile <span class="badge">New</span></a></li>
              <li><a>Settings</a></li>
              <li>
                <!-- Logout sebaiknya pakai form POST (bukan GET link) -->
                <a href="/login">Logout</a>
                <!-- contoh: <form method="POST" action="/logout"> -->
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Placeholder konten halaman utama -->
      <main class="p-6 bg-base-100 flex-1 overflow-y-auto">
        <!-- Ini adalah tempat konten dinamis dari backend akan masuk -->
        @yield('Dashboard')
      </main>
    </div>
  </div>
</body>
</html>