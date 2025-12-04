      <aside id="layout-sidebar"
          class="overlay overlay-open:translate-x-0 drawer drawer-start sm:w-75 inset-y-0 start-0 hidden h-full [--auto-close:lg] lg:z-50 lg:block lg:translate-x-0 lg:shadow-none"
          aria-label="Sidebar" tabindex="-1">
          <div class="drawer-body border-base-content/20 h-full border-e p-0">
              <div class="flex h-full max-h-full flex-col">
                  <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3 lg:hidden"
                      aria-label="Close" data-overlay="#layout-sidebar">
                      <span class="icon-[tabler--x] size-4.5"></span>
                  </button>
                  <div
                      class="text-base-content border-base-content/20 flex flex-col items-center gap-4 border-b px-4 py-6">
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
                              <a href="{{ url('/dashboard') }}"
                                  class="menu-active inline-flex w-full items-center px-2">
                                  <span class="icon-[tabler--dashboard] size-4.5"></span>
                                  <span>Dashboard</span>
                              </a>
                          </li>

                          <!-- Section Divider -->
                          <li
                              class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">
                              Pages</li>

                          <!-- Accordion Menu Item (Level 0) -->
                          <li class="accordion-item" id="account-settings">
                              <button
                                  class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                  aria-controls="account-settings-collapse-account-settings" aria-expanded="true">
                                  <span class="icon-[tabler--settings] size-4.5"></span>
                                  <span class="grow">Account Setting</span>
                                  <span
                                      class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                              </button>
                              <div id="account-settings-collapse-account-settings"
                                  class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300"
                                  aria-labelledby="account-settings" role="region">
                                  <ul class="space-y-1">
                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="pages-account-settings-account.html"
                                              class="inline-flex w-full items-center px-2">
                                              <span>Account</span>
                                          </a>
                                      </li>

                                      <!-- Simple Link Item (for nested items) -->
                                     

                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-default/pages-account-settings-billing.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span class="grow">Billing & Plans</span>
                                              <span class="badge badge-primary badge-sm badge-soft">Pro</span>
                                          </a>
                                      </li>

                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="pages-account-settings-notifications.html"
                                              class="inline-flex w-full items-center px-2">
                                              <span>Notifications</span>
                                          </a>
                                      </li>

                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="pages-account-settings-connections.html"
                                              class="inline-flex w-full items-center px-2">
                                              <span>Connections</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>

                          <!-- Accordion Menu Item (Level 0) -->
                          <li class="accordion-item" id="misc">
                              <button
                                  class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                  aria-controls="misc-collapse-misc" aria-expanded="true">
                                  <span class="icon-[tabler--layout-grid] size-4.5"></span>
                                  <span class="grow">@lang('Notice')</span>
                                  <span
                                      class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                              </button>
                              <div id="misc-collapse-misc"
                                  class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300"
                                  aria-labelledby="misc" role="region">
                                  <ul class="space-y-1">
                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="{{ route('notice.index') }}" class="inline-flex w-full items-center px-2"
                                              >
                                              <span>@lang('List')</span>
                                          </a>
                                      </li>

                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="{{ route('notice.create') }}"
                                              class="inline-flex w-full items-center px-2">
                                              <span>@lang('Create')</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>

                    
                          <!-- Section Divider -->
                          <li
                              class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">
                              Applications</li>

                          <!-- Accordion Menu Item (Level 0) -->
                          <li class="accordion-item" id="app-user">
                              <button
                                  class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                  aria-controls="app-user-collapse-app-user" aria-expanded="true">
                                  <span class="text-bg-neutral rounded-field flex size-6 items-center justify-center">
                                      <span class="icon-[tabler--user] size-4.5"></span>
                                  </span>
                                  <span class="grow">User</span>

                                  <span
                                      class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                              </button>
                              <div id="app-user-collapse-app-user"
                                  class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300"
                                  aria-labelledby="app-user" role="region">
                                  <ul class="accordion space-y-1">
                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="{{ route('users.list') }}"
                                              class="inline-flex w-full items-center px-2">
                                              <span>List</span>
                                          </a>
                                      </li>

                                      <!-- Accordion Menu Item (Level 1) -->
                                      <li class="accordion-item" id="app-user-view">
                                          <button
                                              class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                              aria-controls="view-collapse-app-user-view" aria-expanded="true">
                                              <span class="grow">View</span>
                                              <span
                                                  class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                                          </button>
                                          <div id="view-collapse-app-user-view"
                                              class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300"
                                              aria-labelledby="app-user-view" role="region">
                                              <ul class="space-y-1">
                                                  <!-- Simple Link Item (for nested items) -->
                                                  <li>
                                                      <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-account.html"
                                                          class="inline-flex w-full items-center px-2"
                                                          target="_blank">
                                                          <span>Account</span>
                                                      </a>
                                                  </li>

                                                  <!-- Simple Link Item (for nested items) -->
                                                  <li>
                                                      <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-security.html"
                                                          class="inline-flex w-full items-center px-2"
                                                          target="_blank">
                                                          <span>Security</span>
                                                      </a>
                                                  </li>

                                                  <!-- Simple Link Item (for nested items) -->
                                                  <li>
                                                      <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-billing.html"
                                                          class="inline-flex w-full items-center px-2"
                                                          target="_blank">
                                                          <span>Billing & Plans</span>
                                                      </a>
                                                  </li>

                                                  <!-- Simple Link Item (for nested items) -->
                                                  <li>
                                                      <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-notifications.html"
                                                          class="inline-flex w-full items-center px-2"
                                                          target="_blank">
                                                          <span>Notifications</span>
                                                      </a>
                                                  </li>

                                                  <!-- Simple Link Item (for nested items) -->
                                                  <li>
                                                      <a href="https://demos.flyonui.com/templates/html/dashboard-default/app-user-view-connections.html"
                                                          class="inline-flex w-full items-center px-2"
                                                          target="_blank">
                                                          <span>Connections</span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </li>

                        

                          <!-- Section Divider -->
                          <li
                              class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">
                              eCommerce</li>

                          <!-- Accordion Menu Item (Level 0) -->
                          <li class="accordion-item" id="order">
                              <button
                                  class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                  aria-controls="order-collapse-order" aria-expanded="true">
                                  <span class="text-bg-neutral rounded-field flex size-6 items-center justify-center">
                                      <span class="icon-[tabler--receipt] size-4.5"></span>
                                  </span>
                                  <span class="grow">Order</span>
                                 
                                  <span
                                      class="icon-[tabler--chevron-right] accordion-item-active:rotate-90 size-4.5 shrink-0 transition-transform duration-300 rtl:rotate-180"></span>
                              </button>
                              <div id="order-collapse-order"
                                  class="accordion-content mt-1 hidden w-full overflow-hidden transition-[height] duration-300"
                                  aria-labelledby="order" role="region">
                                  <ul class="space-y-1">
                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-list.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Order List</span>
                                          </a>
                                      </li>

                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-details.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Tracking Order</span>
                                          </a>
                                      </li>

                                      <!-- Simple Link Item (for nested items) -->
                                      <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-tracking.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Pending Order </span>
                                          </a>
                                      </li>
                                       <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-tracking.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Recieve Order </span>
                                          </a>
                                      </li>
                                       <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-tracking.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Invoiced Order </span>
                                          </a>
                                      </li>
                                       <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-tracking.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Processing Order </span>
                                          </a>
                                      </li>
                                       <li>
                                          <a href="https://demos.flyonui.com/templates/html/dashboard-ecommerce/ecommerce-order-tracking.html"
                                              class="inline-flex w-full items-center px-2" target="_blank">
                                              <span>Finalizing Order </span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>


                      </ul>
                  </div>
                
              </div>
          </div>
      </aside>
