<template>
  <div>
    <div class="min-h-screen w-full bg-white">
      <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex justify-between h-16">
              <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                  <Link :href="route('index')">
                    <ApplicationMark class="block h-9 w-auto" />
                  </Link>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                  <NavLink
                    :href="route('index')"
                    :active="route().current('index')"
                  >
                    Home
                  </NavLink>
                  <NavLink
                    :href="route('shop')"
                    :active="route().current('shop')"
                  >
                    Shop
                  </NavLink>
                  <NavLink
                    class="whitespace-nowrap"
                    :href="route('aboutUs')"
                    :active="route().current('aboutUs')"
                  >
                    About Us
                  </NavLink>
                  <NavLink
                    :href="route('contact')"
                    :active="route().current('contact')"
                  >
                    Contact
                  </NavLink>
                  <input
                    class="h-fit mt-3.5 p-1.5 border-[#e93578] border-2 w-56"
                    placeholder="Search..."
                  />
                  <Popover class="relative">
                    <PopoverButton>
                      <span class="inline-block cursor-pointer">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="35"
                          height="35"
                          fill="currentColor"
                          class="bi bi-bell text-[#e93578] h-fit mt-3.5"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
                          />
                        </svg>
                        <span
                          class="
                            absolute
                            top-5
                            right-0
                            inline-flex
                            items-center
                            justify-center
                            px-2
                            py-1
                            text-xs
                            font-bold
                            leading-none
                            text-[#e93578]
                            transform
                            translate-x-1/2
                            -translate-y-1/2
                            bg-[#fcd062]
                            rounded-full
                          "
                        >
                          {{ 0 }}
                        </span>
                      </span>
                    </PopoverButton>

                    <PopoverPanel class="absolute z-10 w-96 right-[-10rem]">
                      <div
                        class="
                          flex flex-col
                          bg-white/75
                          backdrop-blur-lg
                          rounded-xl
                          shadow-xl
                          py-5
                          px-3
                        "
                      >
                        <div class="flex justify-between h-6">
                          <span class="mb-5">Notifications</span>
                          <div
                            class="
                              flex
                              items-center
                              justify-center
                              bg-[#fcd062]
                              rounded-full
                              px-3
                              py-1
                              space-x-2
                              cursor-pointer
                            "
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              aria-hidden="true"
                              role="img"
                              class="h-4 w-4 text-white"
                              preserveAspectRatio="xMidYMid meet"
                              viewBox="0 0 28 28"
                            >
                              <path
                                fill="currentColor"
                                d="M21.75 3A3.25 3.25 0 0 1 25 6.25v15.5A3.25 3.25 0 0 1 21.75 25H6.25A3.25 3.25 0 0 1 3 21.75V6.25A3.25 3.25 0 0 1 6.25 3h15.5Zm0 1.5H6.25A1.75 1.75 0 0 0 4.5 6.25V15h6a.75.75 0 0 1 .743.648l.007.102a2.75 2.75 0 1 0 5.5 0a.75.75 0 0 1 .648-.743L17.5 15h6V6.25a1.75 1.75 0 0 0-1.75-1.75Z"
                              />
                            </svg>
                            <span class="text-white text-sm"> unread</span>
                          </div>
                        </div>
                        <div
                          class="
                            flex flex-col
                            space-y-2
                            max-h-60
                            overflow-y-auto
                            p-1
                            mt-2
                          "
                        ></div>

                        <div
                          class="
                            flex flex-col
                            space-y-2
                            p-1
                            mt-2
                            text-base text-slate-500
                          "
                        >
                          You dont have any notifications at the moment. 😢
                        </div>
                      </div>
                    </PopoverPanel>
                  </Popover>

                  <Popover class="relative">
                    <PopoverButton>
                      <span class="inline-block cursor-pointer">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="40"
                          height="40"
                          fill="currentColor"
                          class="bi bi-person text-[#e93578] mt-3.5"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                          />
                        </svg>
                      </span>
                    </PopoverButton>

                    <PopoverPanel class="absolute z-10 w-52 right-[-10rem]">
                      <div
                        class="
                          flex flex-col
                          bg-white/75
                          backdrop-blur-lg
                          rounded-xl
                          shadow-xl
                          py-5
                          px-3
                        "
                      >
                        <div class="h-fit  text-lg font-semibold cursor-pointer ">
                          <Link :href="route('login')">
                            <div  class="w-full h-full p-2 rounded-lg hover:bg-[#e93578] hover:text-[#fcd062]">Log In</div>
                          </Link>
                          <Link :href="route('register')">
                            <div class="w-full h-full p-2 rounded-lg hover:bg-[#e93578] hover:text-[#fcd062]">Sign Up</div>
                          </Link>
                          </div>
                      </div>
                    </PopoverPanel>
                  </Popover>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    fill="currentColor"
                    class="bi bi-cart3 text-[#e93578] mt-3.5"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <header v-if="$slots.header" class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header>
      <main>
        <slot />
      </main>
    </div>
    <div class="w-full">
      <img
        class="w-full"
        src="../../../../../public/images/supportfil.png"
        alt=""
      />
    </div>
    <footer class="h-fit w-full">
      <div class="flex w-full m-auto h-full pl-64 pr-64 my-10">
        <div class="w-1/2 h-fit m-auto">
          <Link :href="route('index')">
            <img class="h-14" src="../../../../../public/images/Logo.png" />
          </Link>
          <p>123 anywhere, Philippines</p>
          <p>stickygoph@gmail.com</p>
          <p>+63 900 000 0000</p>
        </div>
        <div class="w-1/2 h-fit my-auto">
          <div class="w-fit mx-auto my-auto h-fit">
            <div class="text-lg">Connect with us</div>
            <div class="flex w-fit m-auto gap-x-5">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                fill="currentColor"
                class="bi bi-facebook text-[#e93578]"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                fill="currentColor"
                class="bi bi-twitter text-[#e93578]"
                viewBox="0 0 16 16"
              >
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                fill="currentColor"
                class="bi bi-instagram text-[#e93578]"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full text-lg mb-2 text-center text-gray-400">
        © StamPoint 2022
      </div>
    </footer>
  </div>
</template>
<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import NavLink from "@/Components/NavLink.vue";
import { Popover, PopoverButton, PopoverPanel } from "@headlessui/vue";
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";

export default {
  setup() {},
  components: {
    Head,
    Link,
    ApplicationMark,
    NavLink,
    Popover,
    PopoverButton,
    PopoverPanel,
    Menu,
    MenuButton,
    MenuItems,
    MenuItem,
  },
  data() {
    return {
      links: [
        { href: "/account-settings", label: "Account settings" },
        { href: "/support", label: "Support" },
        { href: "/license", label: "License" },
        { href: "/sign-out", label: "Sign out" },
      ],
    };
  },
};
</script>