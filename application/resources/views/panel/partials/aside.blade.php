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
                      class="flex flex-col items-center justify-center gap-3  px-6 py-10 bg-base-200/30">
                      <a href="{{ url('/dashboard') }}" class="transition-all duration-300 hover:opacity-80">
                          <img src="{{ asset('/assets/images/logo.png') }}" alt="Pix Clipping"
                              class="h-16 w-20 object-contain" style="width: 200px;" />
                      </a>
                     
                  </div>

                  <div class="h-full overflow-y-auto">

                      <ul class="accordion menu menu-sm gap-1 p-3">
                          <li>

                              <a href="{{ url('/dashboard') }}"
                                  class="menu-active inline-flex w-full items-center px-2">

                                  <span class="icon-[tabler--dashboard] size-4.5"></span>

                                  <span>Dashboard</span>

                              </a>

                          </li>

                          <!-- Section Divider -->

                          <li <!-- Section Divider -->

                          <li
                              class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">

                              Order</li>

                          <!-- Accordion Menu Item (Level 0) -->
                          <li class="accordion-item" id="order">

                              <button
                                  class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                  aria-controls="order-collapse-order" aria-expanded="true">

                                  <span class=" flex size-6 items-center justify-center">

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

                                          <a href="{{ route('order.list') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Order List</span>

                                          </a>

                                      </li>



                                      <!-- Simple Link Item (for nested items) -->

                                      <li>

                                          <a href="{{ route('order.tracking') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Tracking Order</span>

                                          </a>

                                      </li>



                                      <!-- Simple Link Item (for nested items) -->

                                      <li>

                                          <a href="{{ route('order.pending') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Pending Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.received') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Recieved Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.invoiced') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Invoiced Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.processing') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Processing Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.finalized') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Finalizing Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.completed') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span> Completed Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.downloaded') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span> Downloaded Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.canceled') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Canceled Order </span>

                                          </a>

                                      </li>

                                      <li>

                                          <a href="{{ route('order.paid') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>Paid Order </span>

                                          </a>

                                      </li>

                                  </ul>

                              </div>

                          </li>

                          <!-- Payment History Menu Item -->

                          <li>

                              @if (auth()->user()->is_admin == 1)
                                  <a href="{{ route('transactions.index') }}"
                                      class="inline-flex w-full items-center px-2">

                                      <span
                                          class=" flex size-6 items-center justify-center">

                                          <span class="icon-[tabler--credit-card] size-4.5"></span>

                                      </span>

                                      <span>Transaction History</span>

                                  </a>
                              @else
                                  <a href="{{ route('payment.history') }}"
                                      class="inline-flex w-full items-center px-2">

                                      <span
                                          class="flex size-6 items-center justify-center">

                                          <span class="icon-[tabler--credit-card] size-4.5"></span>

                                      </span>

                                      <span>Payment History</span>

                                  </a>
                              @endif

                          </li>

                          <li
                              class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">

                              Others</li>
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

                                          <a href="{{ route('notice.index') }}"
                                              class="inline-flex w-full items-center px-2">

                                              <span>@lang('List')</span>

                                          </a>

                                      </li>



                                      <!-- Simple Link Item (for nested items) -->

                                      @if (auth()->user()->is_admin == 1)
                                          <li>

                                              <a href="{{ route('notice.create') }}"
                                                  class="inline-flex w-full items-center px-2">

                                                  <span>@lang('Create')</span>

                                              </a>

                                          </li>
                                      @endif

                                  </ul>

                              </div>

                          </li>

                          <li>


                              <a href="{{ route('free-trial-list.index') }}"
                                  class="inline-flex w-full items-center px-2">

                                  <span class=" flex size-6 items-center justify-center">

                                      <span class="icon-[tabler--credit-card] size-4.5"></span>

                                  </span>

                                  <span>Free Trial</span>

                              </a>

                          </li>

                          <!-- Section Divider -->

                          <!-- Accordion Menu Item (Level 0) -->

                          @if (auth()->user()->is_admin)
                              <li
                                  class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">

                                  Applications</li>



                              <li class="accordion-item" id="app-user">

                                  <button
                                      class="accordion-toggle accordion-item-active:bg-neutral/10 inline-flex w-full items-center p-2 text-start text-sm font-normal"
                                      aria-controls="app-user-collapse-app-user" aria-expanded="true">

                                      <span
                                          class=" flex size-6 items-center justify-center">

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



                                      </ul>

                                  </div>

                              </li>
                          @endif

                          <li>


                              <a href="{{ route('logout') }}" class="inline-flex w-full items-center px-2">

                                  <span class=" flex size-6 items-center justify-center">

                                      <span class="icon-[tabler--logout] size-4.5"></span>

                                  </span>

                                  <span>Logout</span>

                              </a>

                          </li>


                      </ul>

                  </div>



              </div>

          </div>

      </aside>
