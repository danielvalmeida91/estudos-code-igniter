<style>
        .nav-bar {
            background-color: #333;
            padding: 1rem;
            margin: 0;
        }
        .nav-bar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: start;
            gap: 2rem;
        }
        .nav-bar a {
            color: white;
            text-decoration: none;
            font-family: sans-serif;
            font-weight: bold;
        }
        .nav-bar a:hover {
            color: #ccc;
        }
    </style>

<nav class="nav-bar">
    <ul>
        <!-- Using site_url() helper to create links -->
        <!-- <li><a href=<?= site_url('/') ?>>HOME</a></li>
        <li><a href=<?= site_url('about') ?>>ABOUT</a></li>
        <li><a href=<?= site_url('services') ?>>SERVICES</a></li> -->

        <!-- Using anchor() helper to create links -->
        <li><?= anchor('/', 'HOME') ?></li>
        <li><?= anchor('about', 'ABOUT') ?></li>
        <li><?= anchor('services', 'SERVICES') ?></li>
    </ul>
  </nav