<nav class="side-nav">
    <ul>
        <li>
            <a href="javascript:;" class="side-menu side-menu{{ request()->is('admin/dash') }}">
                <div class="side-menu__title">
                    Sections
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="" style="display: none;">
                <li>
                    <a href="https://enigma.left4code.com/page/side-menu/light/dashboard-overview-1" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Header
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>
            <a href="javascript:;" class="side-menu side-menu{{ request()->is('admin/menu/*') ? '--active' : ''}}">
                <div class="side-menu__icon">
                    {{--ICON--}}
                </div>
                <div class="side-menu__title">
                    Menu
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is("admin/menu/") || request()->is("admin/menu/*") ? "side-menu__sub-open" : "" }}" {{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? 'style="display: none;"' : "" }}>
                <li>
                    <a href="{{ route('admin.menu.food') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="coffee" data-lucide="coffee"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Food
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.menu.food-categories') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="coffee" data-lucide="coffee"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Food-categories
                        </div>
                    </a>
                </li>

            </ul>
        </li>
    </ul>

    <ul>
        <li>
            <a href="javascript:;" class="side-menu side-menu{{ request()->is('admin/dessert/*') ? '--active' : ''}}">
                <div class="side-menu__icon">
                    {{--ICON--}}
                </div>
                <div class="side-menu__title">
                    Dessert
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="stroopwafel" data-lucide="stroopwafel" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is("admin/dessert/") || request()->is("admin/dessert/*") ? "side-menu__sub-open" : "" }}" {{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? 'style="display: none;"' : "" }}>
                <li>
                    <a href="{{ route('admin.dessert') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="command"></i>
                        </div>
                        <div class="side-menu__title">
                            Dessert
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>
            <a href="javascript:;" class="side-menu side-menu{{ request()->is('admin/events/*') ? '--active' : ''}}">
                <div class="side-menu__icon">
                    {{--ICON--}}
                </div>
                <div class="side-menu__title">
                    Events
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="stroopwafel" data-lucide="stroopwafel" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is("admin/events/") || request()->is("admin/events/*") ? "side-menu__sub-open" : "" }}" {{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? 'style="display: none;"' : "" }}>
                <li>
                    <a href="{{ route('admin.events') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="bar-chart"></i>
                        </div>
                        <div class="side-menu__title">
                            Events
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
