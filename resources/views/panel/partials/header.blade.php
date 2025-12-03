<div class="bg-base-100 border-base-content/20 lg:ps-75 sticky top-0 z-50 flex border-b">
  <div class="mx-auto w-full max-w-7xl">
    <nav class="navbar py-2">
      <div class="navbar-start items-center gap-2">
        <button type="button" class="btn btn-soft btn-square btn-sm lg:hidden" aria-haspopup="dialog" aria-expanded="false" aria-controls="layout-sidebar" data-overlay="#layout-sidebar">
          <span class="icon-[tabler--menu-2] size-4.5"></span>
        </button>

        <!-- Search  -->
        <div class="input no-focus border-0 px-0">
          <span class="icon-[tabler--search] text-base-content/80 my-auto me-2 size-4 shrink-0"></span>
          <input type="search" class="grow placeholder:text-sm" placeholder="Type to Search..." id="kbdInput" />
          <label class="sr-only" for="kbdInput">Search</label>
        </div>
      </div>

      <div class="navbar-end items-end gap-6">
        <!-- GitHub Button -->
        <div class="max-md:hidden">
          <a class="github-button" href="https://github.com/themeselection/flyonui" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/flyonui on GitHub">Star</a>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Profile Dropdown -->
        <div class="dropdown relative inline-flex [--offset:21]">
          <button id="profile-dropdown" type="button" class="dropdown-toggle avatar" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            <span class="rounded-field size-9.5">
              <img src="{{asset("public/assets/img/avatars/2.png")}}" alt="User Avatar" />
            </span>
          </button>
          <ul class="dropdown-menu dropdown-open:opacity-100 max-w-75 hidden w-full space-y-0.5" role="menu" aria-orientation="vertical" aria-labelledby="profile-dropdown">
            <li class="dropdown-header pt-4.5 mb-1 gap-4 px-5 pb-3.5">
              <div class="avatar avatar-online-top">
                <div class="w-10 rounded-full">
                  <img src="{{asset('public/assets/img/avatars/2.png')}}" alt="avatar" />
                </div>
              </div>
              <div>
                <h6 class="text-base-content mb-0.5 font-semibold">Mitchell Johnson</h6>
                <p class="text-base-content/80 font-medium">Influencer</p>
              </div>
            </li>
            <li>
              <a class="dropdown-item px-3" href="#">
                <span class="icon-[tabler--user] size-5"></span>
                My account
              </a>
            </li>
            <li>
              <a class="dropdown-item px-3" href="#">
                <span class="icon-[tabler--settings] size-5"></span>
                Setting
              </a>
            </li>
            <li>
              <a class="dropdown-item px-3" href="#">
                <span class="icon-[tabler--credit-card] size-5"></span>
                Billing
              </a>
            </li>
            <li>
              <hr class="border-base-content/20 -mx-2 my-1" />
            </li>
            <li>
              <a class="dropdown-item px-3" href="{{url('/')}}">
                <span class="icon-[tabler--users] size-5"></span>
                Back to Home
              </a>
            </li>

            <li class="dropdown-footer p-2 pt-1">
                <a class="btn btn-text btn-error btn-block h-11 justify-start px-3 font-normal" href="{{route('logout')}}">
                <span class="icon-[tabler--logout] size-5"></span>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div id="activity-drawer" class="overlay overlay-open:translate-x-0 drawer drawer-end sm:max-w-104 hidden" role="dialog" tabindex="-1">
  <div class="drawer-header border-base-content/20 border-b p-4">
    <h3 class="drawer-title text-base font-semibold">Activity</h3>
    <button type="button" class="btn btn-text btn-circle btn-xs" aria-label="Close" data-overlay="#activity-drawer">
      <span class="icon-[tabler--x] size-4"></span>
    </button>
  </div>
  <div class="drawer-body p-0">
    <ul class="space-y-0">
      <!-- Joe Lincoln Activity -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="{{asset('public/assets/img/avatars/1.png')}}" alt="avatar" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">joe Lincoln</span>
            <span class="text-base-content text-sm">mentioned you in last trends topic</span>
          </div>
          <p class="text-base-content/50 mb-3 text-sm">18 Mins ago</p>

          <div class="bg-base-200 rounded-box border-base-content/20 border px-4 py-2.5">
            <p class="text-base-content mb-4 text-sm font-medium">@Flyonui For an expert opinion, check out what Mike has to say on this topic!</p>
            <div class="input input-sm">
              <input type="text" class="grow" placeholder="Reply" id="flyonuiReply" />
              <span class="icon-[tabler--photo] text-base-content/80 my-auto ms-2 size-4 shrink-0"></span>
            </div>
          </div>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Sofia -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/2.png" alt="Sofia" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Sofia</span>
            <span class="text-base-content text-sm">requested feedback on her design.</span>
          </div>
          <p class="text-base-content/50 text-sm">1 Hour ago</p>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Jane Perez File Review -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/3.png" alt="Jane Perez" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Jane Perez</span>
            <span class="text-base-content text-sm">invites you to review a file.</span>
          </div>
          <p class="text-base-content/50 mb-2.5 text-sm">3 Hours ago</p>
          <span class="badge badge-soft badge-lg">
            <span class="icon-[tabler--file-type-pdf] text-error"></span>
            invoices.pdf
          </span>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Liam -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/11.png" alt="Liam" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Liam</span>
            <span class="text-base-content text-sm">has shared a project update.</span>
          </div>
          <p class="text-base-content/50 text-sm">5 Hours ago</p>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Tyler Hero Design Project -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/9.png" alt="Tyler Hero" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Tyler Hero</span>
            <span class="text-base-content text-sm">wants to view your design project</span>
          </div>
          <p class="text-base-content/50 mb-3 text-sm">18 Mins ago</p>

          <div class="bg-base-200 rounded-box border-base-content/20 flex items-center gap-4 border px-4 py-2.5">
            <div class="avatar avatar-placeholder">
              <div class="bg-base-100 text-primary rounded-box size-8 p-2">
                <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/brand-logo/figma-icon.png" alt="avatar" />
              </div>
            </div>
            <span class="text-sm font-medium">Launcher-UIkit.fig</span>
          </div>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Denial Invite -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/4.png" alt="Denial" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Denial</span>
            <span class="text-base-content text-sm">Invite from invite link</span>
          </div>
          <p class="text-base-content/50 text-sm">3 Hours ago</p>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Leslie Alexander Tags -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/5.png" alt="Leslie Alexander" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Leslie Alexander</span>
            <span class="text-base-content text-sm">new tags to Web Redesign</span>
          </div>
          <p class="text-base-content/50 mb-3 text-sm">18 Mins ago</p>

          <div class="flex gap-2.5">
            <span class="badge badge-soft badge-primary badge-sm">Client - Request</span>
            <span class="badge badge-soft badge-warning badge-sm">Figma</span>
            <span class="badge badge-soft badge-info badge-sm">Redesign</span>
          </div>
        </div>
      </li>

      <li>
        <div class="divider"></div>
      </li>

      <!-- Miya File Review -->
      <li class="flex items-start gap-4 p-4">
        <div class="avatar">
          <div class="size-8 rounded-full">
            <img src="../assets/img/avatars/6.png" alt="Miya" />
          </div>
        </div>
        <div class="flex-1">
          <div class="mb-1">
            <span class="text-base-content font-semibold">Miya</span>
            <span class="text-base-content text-sm">invites you to review a file.</span>
          </div>
          <p class="text-base-content/50 text-sm">10 Hours ago</p>
        </div>
      </li>
    </ul>
  </div>
</div>
