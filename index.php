<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indonesia Mount</title>
    <link rel="icon" href="./img/logo.webp" />
    <!-- bootsrap start -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- boostrap end -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <Style>
      .container1 {
        background-image: url(https://e0.pxfuel.com/wallpapers/207/940/desktop-wallpaper-mountain-scenery-art-mountain-background-art-scenery-mountain-laptop.jpg);
        background-size: cover;
        background-attachment: scroll;
        opacity: 0, 5;
      }

      .container2 {
        background-color: pink;
        align-items: center;
      }
      .img1 {
        width: 300px;
      }

      section {
        padding-top: 0;
        padding-bottom: 50px;
      }

      ul li a:hover {
        text-decoration: underline;
      }
      * {
        transition: 0.3s;
      }

      .navbar {
        transition: box-shadow 0.3s ease;
      }

      .navbar.scrolled {
        box-shadow: 0 4px 6px -4px rgba(0, 0, 0, 0.3);
      }

      .datetime {
        position: absolute;
        bottom: 20px;
        left: 20px;
        font-size: 18px;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 5px;
      }
      .hero-section {
        position: relative;
      }

      @media (max-width: 768px) {
        .datetime {
          font-size: 14px;
          bottom: 10px;
          left: 10px;
        }
      }

      #gallery img {
    max-height: 300px; /* Atur tinggi maksimum */
    width: 100%; /* Pastikan gambar mengisi lebar kontainer */
    object-fit: contain; /* Memastikan gambar tidak terpotong */
    background-color: #f8f9fa; /* Tambahkan latar belakang untuk area kosong */
  }
      #gallery,
      #article,
      .footer img,
      i {
        cursor: pointer;
      }

      .panah {
        text-align: right;
        padding: 10px;
        scroll-behavior: smooth;
      }
    </Style>
  </head>
  <body>
    <header>
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg p-3 fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold fs-3" href="">Mountain Indonesia</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link fs-5" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="#article"
                  >Article</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="#gallery"
                  >Gallery</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="#schedule"
                  >Schedule</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="#aboutme"
                  >About Me</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-5 ms-0- ms-lg-3"
                  href="login.php"
                  target="_blank"
                  >Login</a
                >
              </li>

              <li class="nav-item dropdown">
                <button
                  class="btn nav-link fs-5 ms-0- ms-lg-3 dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i
                    class="bi-circle-half theme-icon-active"
                    data-theme-icon-active="bi-sun-fill"
                  ></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <button
                      id="light"
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="light"
                    >
                      <i
                        class="bi bi-sun-fill me-2 opacity-50"
                        data-theme-icon="bi-sun-fill"
                      ></i>
                      Light
                    </button>
                  </li>
                  <li>
                    <button
                      id="dark"
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="dark"
                    >
                      <i
                        class="bi bi-moon-fill me-2 opacity-50"
                        data-theme-icon="bi-moon-fill"
                      ></i>
                      Dark
                    </button>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
    </header>

    <!-- Hero Start -->
    <section id="home">
      <div class="container1">
        <div
          class="d-flex flex-column justify-content-center vh-100 align-items-center"
        >
          <h1 class="fw-bold text-center text-light">
            Welcome To <br />
            Mountain Of Indonesia
          </h1>

          <a href="#article" class="btn btn-dark fs-5 fw-bold mt-2">
            let's Go
          </a>
        </div>
      </div>
      <div id="datetime" class="datetime"></div>
    </section>
    <!-- Hero End -->

    
    <!-- article start -->
<section id="article" class="text-center p-5">
  <div class="container" style="padding-top: 50px">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
    <!-- Article End -->

    <!-- Gallery Start -->
    <section id="gallery" class="text-center p-5">
  <div class="container" style="padding-top: 50px">
    <h1 class="fw-bold display-4 pb-3">Gallery</h1>
    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);
        $active = true; // Untuk menandai slide pertama sebagai aktif

        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="carousel-item <?= $active ? 'active' : '' ?>">
            <div class="card h-100 text-center">
              <!-- Tambahkan class pada gambar -->
              <img src="img/<?= $row["gambar"] ?>" class="d-block w-100" alt="<?= $row["judul"] ?>" />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
                </small>
              </div>
            </div>
          </div>
        <?php
          $active = false; // Setelah slide pertama, nonaktifkan `active`
        }
        ?>
      </div>

      <!-- Controls for Carousel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>




    <!-- Gallery End -->

    <!-- Schedule Start  -->
    <section id="schedule">
      <div class="container" style="padding-top: 100px">
        <div class="title text-center mb-5">
          <h1 class="fw-bold">Schedule</h1>
        </div>
        <div class="row">
          <div class="col-12 col-lg-3 col-md-3">
            <div class="card">
              <div class="card-body bg-danger">
                <h5 class="card-title text-center">Senin</h5>
              </div>
              <div class="card-text text-center pt-4">
                <p>Kriptografi</p>
                <p>13.00 - 15.00 | H.4.10</p>
              </div>
              <br /><br /><br />
              <br /><br />
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-3">
            <div class="card">
              <div class="card-body bg-danger">
                <h5 class="card-title text-center">Selasa</h5>
              </div>
              <div class="card-text text-center pt-4">
                <p>Basis Data (Praktikum)</p>
                <p>14.10 - 15.50 | D.3.H</p>
              </div>
              <hr />
              <div class="card-text text-center">
                <p>Pendidikan Pancasila</p>
                <p>18.30 - 20.00 | Aula H.7</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-3">
            <div class="card">
              <div class="card-body bg-danger">
                <h5 class="card-title text-center">Rabu</h5>
              </div>
              <div class="card-text text-center pt-4">
                <p>Logika Informatika</p>
                <p>07.00 - 09.30 | H.3.7</p>
              </div>
              <hr />
              <div class="card-text text-center">
                <p>Pemrograman Berbasis Web</p>
                <p>10.20 - 12.00 | D.2.J</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 col-md-3">
            <div class="card">
              <div class="card-body bg-danger">
                <h5 class="card-title text-center">Kamis</h5>
              </div>
              <div class="card-text text-center pt-4">
                <p>RPL</p>
                <p>12.30 - 14.00 | H.3.8</p>
              </div>
              <hr />
              <div class="card-text text-center">
                <p>Basis Data (Teori)</p>
                <p>12.30 - 14.00 | H.3.8</p>
              </div>
            </div>
          </div>
        </div>
        <br />

        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body bg-danger">
                <h5 class="card-title text-center">jumat</h5>
              </div>
              <div class="card-text text-center pt-4">
                <p>Sistem Operasi</p>
                <p>07.00 - 09.30 | H.5.8</p>
              </div>
              <hr />
              <div class="card-text text-center">
                <p>Probabilitas dan Statistik</p>
                <p>09.30 - 11.30 | H.4.10</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body bg-danger">
                <h5 class="card-title text-center">Sabtu</h5>
              </div>
              <div class="card-text text-center pt-4">
                <p>FREE</p>
              </div>
              <br /><br /><br />
              <br /><br /><br />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Schedule End  -->

    <!-- About Me Start -->
    <section id="aboutme">
      <div class="container3" style="padding-top: 100px">
        <div class="row">
          <div class="container2 p-5 text-center">
            <img
              src="https://cdn.pixabay.com/photo/2012/04/18/23/36/boy-38262_1280.png"
              class="img1"
            />
            <h4>A11.2023.15033</h4>
            <h1 class="fw.bold">Aksioma Tsalatsa Yufuna</h1>
            <h4></h4>
          </div>
        </div>
      </div>
    </section>
    <!-- About Me End -->

    <div class="panah">
      <a href="#home"><img src="./img/arrow-bar-up.svg" alt="" /></a>
    </div>

    <!-- Footer Start -->

    <footer class="footer text-center p-3 shadow-lg">
      Copyright © 2024 AKSIOMA TY. All Rights Reserved
      <div>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-twitter-x"></i>
        <i class="bi bi-whatsapp"></i>
      </div>
    </footer>

    <!-- Footer End -->

    <!-- Js Bootstraps -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Js dark dan light mode start -->
    <script>
      /*!
       * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
       * Copyright 2011-2024 The Bootstrap Authors
       * Licensed under the Creative Commons Attribution 3.0 Unported License.
       */

      (() => {
        "use strict";

        const getStoredTheme = () => localStorage.getItem("theme");
        const setStoredTheme = (theme) => localStorage.setItem("theme", theme);

        const getPreferredTheme = () => {
          const storedTheme = getStoredTheme();
          if (storedTheme) {
            return storedTheme;
          }

          return window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        };

        const setTheme = (theme) => {
          if (theme === "auto") {
            document.documentElement.setAttribute(
              "data-bs-theme",
              window.matchMedia("(prefers-color-scheme: dark)").matches
                ? "dark"
                : "light"
            );
          } else {
            document.documentElement.setAttribute("data-bs-theme", theme);
          }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
          const themeSwitcher = document.querySelector("#bd-theme");

          if (!themeSwitcher) {
            return;
          }

          const themeSwitcherText = document.querySelector("#bd-theme-text");
          const activeThemeIcon = document.querySelector(".theme-icon-active");
          const btnToActive = document.querySelector(
            `[data-bs-theme-value="${theme}"]`
          );
          const iconOfActiveBtn =
            btnToActive.querySelector("i").dataset.themeIcon;

          document
            .querySelectorAll("[data-bs-theme-value]")
            .forEach((element) => {
              element.classList.remove("active");
              element.setAttribute("aria-pressed", "false");
            });

          btnToActive.classList.add("active");
          btnToActive.setAttribute("aria-pressed", "true");
          activeThemeIcon.classList.remove(
            activeThemeIcon.dataset.themeIconActive
          );
          activeThemeIcon.classList.add(iconOfActiveBtn);
          activeThemeIcon.dataset.iconActive = iconOfActiveBtn;
          const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
          themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

          if (focus) {
            themeSwitcher.focus();
          }
        };

        window
          .matchMedia("(prefers-color-scheme: dark)")
          .addEventListener("change", () => {
            const storedTheme = getStoredTheme();
            if (storedTheme !== "light" && storedTheme !== "dark") {
              setTheme(getPreferredTheme());
            }
          });

        window.addEventListener("DOMContentLoaded", () => {
          showActiveTheme(getPreferredTheme());

          document
            .querySelectorAll("[data-bs-theme-value]")
            .forEach((toggle) => {
              toggle.addEventListener("click", () => {
                const theme = toggle.getAttribute("data-bs-theme-value");
                setStoredTheme(theme);
                setTheme(theme);
                showActiveTheme(theme, true);
              });
            });
        });
      })();
    </script>
    <!-- Js dark dan light mode end -->

    <!-- shadow navbar start -->
    <script>
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 0);
      });
    </script>
    <!-- shadow navbar end -->

    <!-- Js real date time start -->
    <script>
      function updateTime() {
        const now = new Date();
        const options = {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
          hour: "2-digit",
          minute: "2-digit",
          second: "2-digit",
        };
        const formattedTime = now.toLocaleDateString("en-US", options);
        document.getElementById("datetime").textContent = formattedTime;
      }

      // Update the time every second
      setInterval(updateTime, 1000);
      updateTime(); // Initial call to display time immediately on load
    </script>
    <!-- Js real date time end -->
  </body>
</html>
