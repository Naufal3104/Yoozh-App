<!--

=========================================================
* Notus Tailwind JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="stylesheet"
        href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <title>Login | Yoozh</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="/"
            >Back</a
          >
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
        </div>
      </div>
    </nav>
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
          style="background-image: url(../../assets/img/register_bg_2.png)"
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 class="text-blueGray-500 text-sm font-bold">
                      Sign in with
                    </h6>
                  </div>
                  <div class="btn-wrapper text-center">
                    <button
                      class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                      type="button"
                    >
                      <img
                        alt="..."
                        class="w-5 mr-1"
                        src="../../assets/img/github.svg"
                      />Github</button
                    ><button
                      class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                      type="button"
                    >
                      <img
                        alt="..."
                        class="w-5 mr-1"
                        src="../../assets/img/google.svg"
                      />Google
                    </button>
                  </div>
                  <hr class="mt-6 border-b-1 border-blueGray-300" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <div class="text-blueGray-400 text-center mb-3 font-bold">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form action='/authenticate' method="post">
                    @csrf
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        for="grid-password"
                        >Email</label
                      ><input
                        type="email" id="email" name="email"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Email"
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        for="grid-password"
                        >Password</label
                      ><input
                        type="password" id="password" name="password"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Password"
                      />
                    </div>
                    <div>
                      <label class="inline-flex items-center cursor-pointer"
                        ><input
                          id="customCheckLogin"
                          type="checkbox"
                          class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                        /><span
                          class="ml-2 text-sm font-semibold text-blueGray-600"
                          >Remember me</span
                        ></label
                      >
                    </div>
                    <div class="text-center mt-6">
                      <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        Sign In
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="flex flex-wrap mt-6">
                <div class="w-1/2">
                  <a href="#pablo" class="text-blueGray-200"
                    ><small>Forgot password?</small></a
                  >
                </div>
                <div class="w-1/2 text-right">
                  <a href="./register.html" class="text-blueGray-200"
                    ><small>Create new account</small></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        @if (count($errors) > 0)
                  <div class = "text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li> @endforeach
                    </ul>
                  </div>
                 @endif
        <footer class="absolute
        w-full bottom-0 bg-blueGray-800 pb-6">
    </footer>
    </section>
    </main>
    </body>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        /* Make dynamic date appear */
        (function() {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();
        /* Function for opning navbar on mobile */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>

</html>
