      <aside id="layout-sidebar" class="overlay overlay-open:translate-x-0 drawer drawer-start sm:w-75 inset-y-0 start-0 hidden h-full [--auto-close:lg] lg:z-50 lg:block lg:translate-x-0 lg:shadow-none" aria-label="Sidebar" tabindex="-1">
        <div class="drawer-body border-base-content/20 h-full border-e p-0">
          <div class="flex h-full max-h-full flex-col">
            <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3 lg:hidden" aria-label="Close" data-overlay="#layout-sidebar">
              <span class="icon-[tabler--x] size-4.5"></span>
            </button>
            <div class="text-base-content border-base-content/20 flex flex-col items-center gap-4 border-b px-4 py-6">
              <div class="avatar">
                <div class="size-17 rounded-full">
                  <img src="../assets/img/avatars/2.png" alt="avatar" />
                </div>
              </div>
            </div>
            <div class="h-full overflow-y-auto">
              <ul class="accordion menu menu-sm gap-1 p-3">
                <!-- Accordion Menu Item (Level 0) -->

                  <!-- Simple Link Item (for nested items) -->
                  <li>
                      <a href="{{url('/dashboard')}}" class="menu-active inline-flex w-full items-center px-2">
                        <span class="icon-[tabler--dashboard] size-4.5"></span>
                      <span>Dashboard</span>
                    </a>
                  </li>

                <!-- Section Divider -->
                <li class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">Pages</li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="account-settings">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="account-settings-collapse-account-settings" aria-expanded="true">
                    <span class="icon-[tabler--settings] size-4.5"></span>
                    <span class="grow">Account Setting</span>
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="account-settings-collapse-account-settings" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="account-settings" role="region">
                    <ul class="space-y-1">
                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="pages-account-settings-account.html" class="inline-flex w-full items-center px-2">
                          <span>Account</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/pages-account-settings-security.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span class="grow">Security</span>
                          <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/pages-account-settings-billing.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span class="grow">Billing & Plans</span>
                          <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="pages-account-settings-notifications.html" class="inline-flex w-full items-center px-2">
                          <span>Notifications</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="pages-account-settings-connections.html" class="inline-flex w-full items-center px-2">
                          <span>Connections</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="misc">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="misc-collapse-misc" aria-expanded="true">
                    <span class="icon-[tabler--layout-grid] size-4.5"></span>
                    <span class="grow">Misc</span>
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="misc-collapse-misc" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="misc" role="region">
                    <ul class="space-y-1">
                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="pages-misc-error.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Error</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="pages-misc-under-maintenance.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Under Maintenance</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="authentications">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="authentications-collapse-authentications" aria-expanded="true">
                    <span class="icon-[tabler--lock] size-4.5"></span>
                    <span class="grow">Authentications</span>
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="authentications-collapse-authentications" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="authentications" role="region">
                    <ul class="accordion space-y-1">
                      <!-- Accordion Menu Item (Level 1) -->
                      <li class="accordion-item" id="authentications-login">
                        <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="login-collapse-authentications-login" aria-expanded="true">
                          <span class="grow">Login</span>
                          <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                        </button>
                        <div id="login-collapse-authentications-login" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="authentications-login" role="region">
                          <ul class="space-y-1">
                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="auth-login-1.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Basic</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/auth-login-2.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span class="grow">Cover</span>
                                <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <!-- Accordion Menu Item (Level 1) -->
                      <li class="accordion-item" id="authentications-register">
                        <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="register-collapse-authentications-register" aria-expanded="true">
                          <span class="grow">Register</span>
                          <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                        </button>
                        <div id="register-collapse-authentications-register" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="authentications-register" role="region">
                          <ul class="space-y-1">
                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="auth-register-1.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Basic</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/auth-register-2.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span class="grow">Cover</span>
                                <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <!-- Accordion Menu Item (Level 1) -->
                      <li class="accordion-item" id="authentications-forgot-password">
                        <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="forgot-password-collapse-authentications-forgot-password" aria-expanded="true">
                          <span class="grow">Forgot-password</span>
                          <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                        </button>
                        <div id="forgot-password-collapse-authentications-forgot-password" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="authentications-forgot-password" role="region">
                          <ul class="space-y-1">
                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="auth-forgot-password-1.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Basic</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/auth-forgot-password-2.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span class="grow">Cover</span>
                                <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>

                <!-- Regular Menu Item (Level 0) -->
                <li>
                  <a href="https://demos.flyonui.com/templates/html/dashboard-default/pages-faq.html" class="px-2" target="_blank">
                    <span class="icon-[tabler--help] size-4.5"></span>
                    <span class="grow">FAQ</span>
                    <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                  </a>
                </li>

                <!-- Regular Menu Item (Level 0) -->
                <li>
                  <a href="https://demos.flyonui.com/templates/html/dashboard-default/pages-pricing.html" class="px-2" target="_blank">
                    <span class="icon-[tabler--currency-dollar] size-4.5"></span>
                    <span class="grow">Pricing</span>
                    <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                  </a>
                </li>

                <!-- Section Divider -->
                <li class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">Forms & Tables</li>

                <!-- Regular Menu Item (Level 0) -->
                <li>
                  <a href="https://demos.flyonui.com/templates/html/dashboard-default/form-validation.html" class="px-2" target="_blank">
                    <span class="icon-[tabler--checklist] size-4.5"></span>
                    <span class="grow">Form Validation</span>
                    <span class="badge badge-primary badge-soft badge-sm">Pro</span>
                  </a>
                </li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="datatable">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="datatable-collapse-datatable" aria-expanded="true">
                    <span class="icon-[tabler--table] size-4.5"></span>
                    <span class="grow">DataTables</span>
                    <span class="badge badge-primary badge-soft badge-sm me-2">Pro</span>
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="datatable-collapse-datatable" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="datatable" role="region">
                    <ul class="space-y-1">
                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/tables-datatables-basic.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Basic</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/tables-datatables-advanced.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Advanced</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/tables-datatables-extensions.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Extensions</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <!-- Section Divider -->
                <li class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">Applications</li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="app-user">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="app-user-collapse-app-user" aria-expanded="true">
                    <span class="text-bg-neutral rounded-field flex size-6 items-center justify-center">
                      <span class="icon-[tabler--user] size-4.5"></span>
                    </span>
                    <span class="grow">User</span>
                   
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="app-user-collapse-app-user" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="app-user" role="region">
                    <ul class="accordion space-y-1">
                      <!-- Simple Link Item (for nested items) -->
                      <li>
                          <a href="{{route('users.list')}}" class="inline-flex w-full items-center px-2">
                          <span>List</span>
                        </a>
                      </li>

                      <!-- Accordion Menu Item (Level 1) -->
                      <li class="accordion-item" id="app-user-view">
                        <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="view-collapse-app-user-view" aria-expanded="true">
                          <span class="grow">View</span>
                          <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                        </button>
                        <div id="view-collapse-app-user-view" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="app-user-view" role="region">
                          <ul class="space-y-1">
                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-account.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Account</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-security.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Security</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-billing.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Billing & Plans</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-notifications.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Notifications</span>
                              </a>
                            </li>

                            <!-- Simple Link Item (for nested items) -->
                            <li>
                              <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-connections.html" class="inline-flex w-full items-center px-2" target="_blank">
                                <span>Connections</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="roles-permission">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="roles-permission-collapse-roles-permission" aria-expanded="true">
                    <span class="text-bg-neutral rounded-field flex size-6 items-center justify-center">
                      <span class="icon-[tabler--shield-check] size-4.5"></span>
                    </span>
                    <span class="grow">Roles & Permissions</span>
                    <span class="badge badge-primary badge-sm badge-soft me-2">Pro</span>
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="roles-permission-collapse-roles-permission" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="roles-permission" role="region">
                    <ul class="space-y-1">
                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-access-roles.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Roles</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-access-permission.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Permission</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <!-- Section Divider -->
                <li class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">eCommerce</li>

                <!-- Accordion Menu Item (Level 0) -->
                <li class="accordion-item" id="order">
                  <button class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal" aria-controls="order-collapse-order" aria-expanded="true">
                    <span class="text-bg-neutral rounded-field flex size-6 items-center justify-center">
                      <span class="icon-[tabler--receipt] size-4.5"></span>
                    </span>
                    <span class="grow">Order</span>
                    <span class="badge badge-primary badge-sm badge-soft me-2">Pro</span>
                    <span class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                  </button>
                  <div id="order-collapse-order" class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="order" role="region">
                    <ul class="space-y-1">
                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-list.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Order List</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-details.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Order Details</span>
                        </a>
                      </li>

                      <!-- Simple Link Item (for nested items) -->
                      <li>
                        <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-tracking.html" class="inline-flex w-full items-center px-2" target="_blank">
                          <span>Order Tracking</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>


              </ul>
            </div>
            <div class="dropdown relative inline-flex w-full p-2 [--offset:5] [--placement:bottom]">
              <button id="workshop-dropdown" type="button" class="dropdown-toggle bg-base-200 rounded-box flex w-full items-center gap-4 px-4 py-2.5" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <span class="avatar">
                  <span class="size-9.5">
                    <span class="text-primary">
                      <svg width="38" height="38" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_18078_104881)">
                          <mask id="mask0_18078_104881" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="34" height="34">
                            <path d="M25.5 0H8.5C3.80558 0 0 3.80558 0 8.5V25.5C0 30.1944 3.80558 34 8.5 34H25.5C30.1944 34 34 30.1944 34 25.5V8.5C34 3.80558 30.1944 0 25.5 0Z" fill="white" />
                          </mask>
                          <g mask="url(#mask0_18078_104881)">
                            <path d="M25.5 0H8.5C3.80558 0 0 3.80558 0 8.5V25.5C0 30.1944 3.80558 34 8.5 34H25.5C30.1944 34 34 30.1944 34 25.5V8.5C34 3.80558 30.1944 0 25.5 0Z" fill="url(#paint0_linear_18078_104881)" />
                            <path
                              d="M16.1238 20.1522C16.511 19.662 17.2479 19.6428 17.66 20.1122L20.5526 23.41C21.1194 24.0563 20.6611 25.0689 19.8016 25.0692H14.3055C13.47 25.0692 13.0026 24.1059 13.5203 23.4501L16.1238 20.1522ZM16.1326 8.45497C16.5308 7.95801 17.286 7.95453 17.6883 8.44813L27.5164 20.5077C28.0488 21.161 27.5838 22.1395 26.741 22.1395H24.4442C24.1428 22.1395 23.8577 22.0034 23.6678 21.7694L17.7029 14.4188C17.2962 13.9175 16.5285 13.927 16.1346 14.4384L10.7303 21.454C10.5411 21.6996 10.2484 21.8435 9.9383 21.8436H7.4881C6.64925 21.8436 6.18332 20.8733 6.70783 20.2186L16.1326 8.45497Z"
                              fill="url(#paint1_linear_18078_104881)" />
                          </g>
                          <path d="M25.5002 0.707886H8.50017C4.19695 0.707886 0.708496 4.19634 0.708496 8.49956V25.4996C0.708496 29.8028 4.19695 33.2912 8.50017 33.2912H25.5002C29.8034 33.2912 33.2918 29.8028 33.2918 25.4996V8.49956C33.2918 4.19634 29.8034 0.707886 25.5002 0.707886Z" stroke="url(#paint2_linear_18078_104881)" stroke-width="2" />
                        </g>
                        <defs>
                          <linearGradient id="paint0_linear_18078_104881" x1="30.2812" y1="2.65625" x2="4.25" y2="32.4063" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="currentColor" />
                            <stop offset="1" stop-color="currentColor" />
                          </linearGradient>
                          <linearGradient id="paint1_linear_18078_104881" x1="17.1147" y1="8.08008" x2="17.1147" y2="25.0692" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="white" />
                            <stop offset="1" stop-color="white" stop-opacity="0.6" />
                          </linearGradient>
                          <linearGradient id="paint2_linear_18078_104881" x1="17.0002" y1="-0.000447931" x2="17.0002" y2="33.9996" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="white" stop-opacity="0.28" />
                            <stop offset="1" stop-color="white" stop-opacity="0.04" />
                          </linearGradient>
                          <clipPath id="clip0_18078_104881">
                            <rect width="34" height="34" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </span>
                </span>

                <span class="flex flex-1 flex-col text-start">
                  <span class="text-base-content font-semibold">FlyonUI</span>
                  <span class="text-base-content/80 text-sm">Workspace</span>
                </span>
                <span class="icon-[tabler--chevron-up] dropdown-open:rotate-180 size-6 transition-transform duration-300"></span>
              </button>
              <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-full max-w-60 space-y-2" role="menu" aria-orientation="vertical" aria-labelledby="workshop-dropdown">
                <!-- FlyonUI -->
                <li>
                  <a class="dropdown-item dropdown-active" href="#">
                    <div class="flex items-center gap-3">
                      <div class="avatar">
                        <div class="size-9.5">
                          <span class="text-primary">
                            <svg width="38" height="38" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_18078_104881)">
                                <mask id="mask0_18078_104881" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="34" height="34">
                                  <path d="M25.5 0H8.5C3.80558 0 0 3.80558 0 8.5V25.5C0 30.1944 3.80558 34 8.5 34H25.5C30.1944 34 34 30.1944 34 25.5V8.5C34 3.80558 30.1944 0 25.5 0Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_18078_104881)">
                                  <path d="M25.5 0H8.5C3.80558 0 0 3.80558 0 8.5V25.5C0 30.1944 3.80558 34 8.5 34H25.5C30.1944 34 34 30.1944 34 25.5V8.5C34 3.80558 30.1944 0 25.5 0Z" fill="url(#paint0_linear_18078_104881)" />
                                  <path
                                    d="M16.1238 20.1522C16.511 19.662 17.2479 19.6428 17.66 20.1122L20.5526 23.41C21.1194 24.0563 20.6611 25.0689 19.8016 25.0692H14.3055C13.47 25.0692 13.0026 24.1059 13.5203 23.4501L16.1238 20.1522ZM16.1326 8.45497C16.5308 7.95801 17.286 7.95453 17.6883 8.44813L27.5164 20.5077C28.0488 21.161 27.5838 22.1395 26.741 22.1395H24.4442C24.1428 22.1395 23.8577 22.0034 23.6678 21.7694L17.7029 14.4188C17.2962 13.9175 16.5285 13.927 16.1346 14.4384L10.7303 21.454C10.5411 21.6996 10.2484 21.8435 9.9383 21.8436H7.4881C6.64925 21.8436 6.18332 20.8733 6.70783 20.2186L16.1326 8.45497Z"
                                    fill="url(#paint1_linear_18078_104881)" />
                                </g>
                                <path d="M25.5002 0.707886H8.50017C4.19695 0.707886 0.708496 4.19634 0.708496 8.49956V25.4996C0.708496 29.8028 4.19695 33.2912 8.50017 33.2912H25.5002C29.8034 33.2912 33.2918 29.8028 33.2918 25.4996V8.49956C33.2918 4.19634 29.8034 0.707886 25.5002 0.707886Z" stroke="url(#paint2_linear_18078_104881)" stroke-width="2" />
                              </g>
                              <defs>
                                <linearGradient id="paint0_linear_18078_104881" x1="30.2812" y1="2.65625" x2="4.25" y2="32.4063" gradientUnits="userSpaceOnUse">
                                  <stop offset="0" stop-color="currentColor" />
                                  <stop offset="1" stop-color="currentColor" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_18078_104881" x1="17.1147" y1="8.08008" x2="17.1147" y2="25.0692" gradientUnits="userSpaceOnUse">
                                  <stop offset="0" stop-color="white" />
                                  <stop offset="1" stop-color="white" stop-opacity="0.6" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_18078_104881" x1="17.0002" y1="-0.000447931" x2="17.0002" y2="33.9996" gradientUnits="userSpaceOnUse">
                                  <stop offset="0" stop-color="white" stop-opacity="0.28" />
                                  <stop offset="1" stop-color="white" stop-opacity="0.04" />
                                </linearGradient>
                                <clipPath id="clip0_18078_104881">
                                  <rect width="34" height="34" fill="white" />
                                </clipPath>
                              </defs>
                            </svg>
                          </span>
                        </div>
                      </div>
                      <div class="flex-1 text-start">
                        <h6 class="text-base-content font-semibold">FlyonUI</h6>
                        <p class="text-base-content/80 text-sm">Workspace</p>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- ShadCN Studio -->
                <li>
                  <a class="dropdown-item px-3 py-2" href="#">
                    <div class="flex items-center gap-3">
                      <div class="avatar">
                        <div class="size-9.5">
                          <img src="../assets/img/shadcn-logo.png" alt="shadcn-studio" />
                        </div>
                      </div>
                      <div class="flex-1 text-start">
                        <h6 class="text-base-content font-semibold">Shadcn/Studio</h6>
                        <p class="text-base-content/80 text-sm">Workspace</p>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- Themeselection -->
                <li>
                  <a class="dropdown-item px-3 py-2" href="#">
                    <div class="flex items-center gap-3">
                      <div class="avatar">
                        <div class="size-9.5">
                          <img src="../assets/img/themeselection-logo.png" alt="themeselection" />
                        </div>
                      </div>
                      <div class="flex-1 text-start">
                        <h6 class="text-base-content font-semibold">Themeselection</h6>
                        <p class="text-base-content/80 text-sm">Workspace</p>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- Pixinvent -->
                <li>
                  <a class="dropdown-item px-3 py-2" href="#">
                    <div class="flex items-center gap-3">
                      <div class="avatar">
                        <div class="size-9.5">
                          <img src="../assets/img/pixinvent-logo.png" alt="pixinvent" />
                        </div>
                      </div>
                      <div class="flex-1 text-start">
                        <h6 class="text-base-content font-semibold">Pixinvent</h6>
                        <p class="text-base-content/80 text-sm">Workspace</p>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- Add Workspace -->
                <li>
                  <a class="btn btn-primary btn-soft btn-block" href="#">
                    Add New Workspace
                    <span class="icon-[tabler--plus] size-5"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
