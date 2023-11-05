<style>
      .card-client {
        background: #2a4c47;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 20px;
        padding-right: 20px;
        border: 4px solid #7cdacc;
        box-shadow: 0 6px 10px rgba(207, 212, 222, 1);
        border-radius: 10px;
        text-align: center;
        color: #fff;
        font-family: "Poppins", sans-serif;
        transition: all 0.3s ease;
      }

      .card-client:hover {
        transform: translateY(-10px);
      }

      .user-picture {
        overflow: hidden;
        object-fit: cover;
        width: 5rem;
        height: 5rem;
        border: 4px solid #7cdacc;
        border-radius: 999px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
      }

      .user-picture svg {
        width: 2.5rem;
        fill: currentColor;
      }

      .name-client {
        margin: 0;
        margin-top: 20px;
        font-weight: 600;
        font-size: 18px;
      }

      .name-client span {
        display: block;
        font-weight: 200;
        font-size: 16px;
      }

      .social-media a {
        position: relative;
        margin-right: 15px;
        text-decoration: none;
        color: inherit;
      }

      .social-media a:last-child {
        margin-right: 0;
      }

      .social-media a svg {
        width: 1.1rem;
        fill: currentColor;
      }

      /*-- Tooltip Social Media --*/
      .tooltip-social {
        background: #262626;
        display: block;
        position: absolute;
        bottom: 0;
        left: 50%;
        padding: 0.5rem 0.4rem;
        border-radius: 5px;
        font-size: 0.8rem;
        font-weight: 600;
        opacity: 0;
        pointer-events: none;
        transform: translate(-50%, -90%);
        transition: all 0.2s ease;
        z-index: 1;
      }

      .tooltip-social:after {
        content: " ";
        position: absolute;
        bottom: 1px;
        left: 50%;
        border: solid;
        border-width: 10px 10px 0 10px;
        border-color: transparent;
        transform: translate(-50%, 100%);
      }

      .social-media a .tooltip-social:after {
        border-top-color: #262626;
      }

      .social-media a:hover .tooltip-social {
        opacity: 1;
        transform: translate(-50%, -130%);
      }
    </style>
<div
      class="max-w-screen-xl mx-auto bg-transparent flex justify-between items-center p-2 flex-wrap"
    >
      <span class="text-sm font-extrabold text-[#ff9900] max-[480px]:hidden"
        >Chào mừng bạn đến với bếp ăn của tập đoàn</span
      >
      <span class="text-sm font-extrabold text-[#ff9900]"
        >Open: 10AM - 17PM</span
      >
    </div>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 py-2"
      >
        <a href="#" class="flex items-center">
          <img
            src="img/LOGO-01.png"
            class="h-14 mr-3 w-full"
            alt="Flowbite Logo"
          />
        </a>
        <div class="flex items-center md:order-2">
          <a href="?page=cart" class="text-gray-100 mr-4">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <button
            type="button"
            class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom"
          >
            <span class="sr-only">Open user menu</span>
            <img
              class="w-8 h-8 rounded-full"
              src="/img/suachua.jpg"
              alt="user photo"
            />
          </button>
          <!-- Dropdown menu -->
          <div
            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
            id="user-dropdown"
          >
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white"
                >Bonnie Green</span
              >
              <span
                class="block text-sm text-gray-500 truncate dark:text-gray-400"
                >name@flowbite.com</span
              >
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >Dashboard</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >Settings</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >Earnings</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >Sign out</a
                >
              </li>
            </ul>
          </div>
          <button
            data-collapse-toggle="navbar-user"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-user"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
        </div>
        <div
          class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
          id="navbar-user"
        >
          <ul
            class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
          >
            <li>
              <a
                href="#"
                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                aria-current="page"
                >Trang chủ</a
              >
            </li>
            <li>
              <a
                href="?page=menu"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Thực đơn</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Giới thiệu</a
              >
            </li>
            <li>
              <a
                href="?page=contact"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Liên hệ</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>