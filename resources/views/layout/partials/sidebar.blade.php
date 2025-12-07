    <!-- Sidenav Menu Start -->
    <div class="sidebar" id="sidebar">
        
        <!-- Start Logo -->
        <div class="sidebar-logo">
            <div>
                <!-- Logo Normal -->
                <a href="{{url('index')}}" class="logo logo-normal">
                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="Logo">
                </a>

                <!-- Logo Small -->
                <a href="{{url('index')}}" class="logo-small">
                    <img src="{{URL::asset('build/img/logo-small.svg')}}" alt="Logo">
                </a>

                <!-- Logo Dark -->
                <a href="{{url('index')}}" class="dark-logo">
                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="Logo">
                </a>
            </div>
            <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn"> 
                <i class="ti ti-arrow-bar-to-left"></i>
            </button>

            <!-- Sidebar Menu Close -->
            <button class="sidebar-close">
                <i class="ti ti-x align-middle"></i>
            </button>                
        </div>
        <!-- End Logo -->

        <!-- Sidenav Menu -->
        <div class="sidebar-inner" data-simplebar>                
            <div id="sidebar-menu" class="sidebar-menu">
                <ul role="menu" aria-label="Main navigation menu">
                    <li class="menu-title" aria-disabled="true"><span>MAIN</span></li>

                    <li>
                        <a href="{{url('index')}}" class="{{ Request::is('index', '/') ? 'active subdrop' : '' }}">
                            <i class="ti ti-layout-board"></i><span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('chat', 'voice-call', 'video-call', 'calendar', 'email', 'email-details', 'email-compose', 'contacts', 'contact-list', 'invoice', 'add-invoice', 'edit-invoice', 'invoice-details', 'invoice-details', 'todo', 'notes', 'kanban-view', 'file-manager', 'social-feed', 'search-result') ? 'active subdrop' : '' }}">
                            <i class="ti ti-apps"></i><span>Applications</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('chat')}}" class="{{ Request::is('chat') ? 'active' : '' }}">Chat</a></li>    
                            <li class="submenu submenu-two">
                                <a href="#" class="{{ Request::is('voice-call', 'video-call') ? 'active subdrop' : '' }}">Calls<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="{{url('voice-call')}}" class="{{ Request::is('voice-call') ? 'active' : '' }}">Voice Call</a></li>
                                    <li><a href="{{url('video-call')}}" class="{{ Request::is('video-call') ? 'active' : '' }}">Video Call</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('calendar')}}" class="{{ Request::is('calendar') ? 'active' : '' }}">Calendar</a></li>	
                            <li><a href="{{url('email')}}" class="{{ Request::is('email', 'email-details', 'email-compose') ? 'active' : '' }}">Email</a></li>
                            <li><a href="{{url('contacts')}}" class="{{ Request::is('contacts', 'contact-list') ? 'active' : '' }}">Contacts</a></li>
                            <li class="submenu submenu-two">
                                <a href="#" class="{{ Request::is('invoice', 'add-invoice', 'edit-invoice', 'invoice-details') ? 'active subdrop' : '' }}">Invoices<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="{{url('invoice')}}" class="{{ Request::is('invoice', 'add-invoice', 'edit-invoice') ? 'active' : '' }}">Invoices</a></li>
                                    <li><a href="{{url('invoice-details')}}" class="{{ Request::is('invoice-details') ? 'active' : '' }}">Invoice Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('todo')}}" class="{{ Request::is('todo') ? 'active' : '' }}">To Do</a></li>
                            <li><a href="{{url('notes')}}" class="{{ Request::is('notes') ? 'active' : '' }}">Notes</a></li>
                            <li><a href="{{url('kanban-view')}}" class="{{ Request::is('kanban-view') ? 'active' : '' }}">Kanban Board</a></li>
                            <li><a href="{{url('file-manager')}}" class="{{ Request::is('file-manager') ? 'active' : '' }}">File Manager</a></li>
                            <li><a href="{{url('social-feed')}}" class="{{ Request::is('social-feed') ? 'active' : '' }}">Social Feed</a></li>
                            <li><a href="{{url('search-result')}}" class="{{ Request::is('search-result') ? 'active' : '' }}">Search Result</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('layout-mini', 'layout-hoverview', 'layout-hidden', 'layout-fullwidth', 'layout-rtl', 'layout-dark') ? 'active subdrop' : '' }}">
                            <i class="ti ti-layout-kanban"></i><span>Layouts</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('layout-mini')}}" class="{{ Request::is('layout-mini') ? 'active' : '' }}">Mini</a></li>
                            <li><a href="{{url('layout-hoverview')}}" class="{{ Request::is('layout-hoverview') ? 'active' : '' }}">Hover View</a></li>
                            <li><a href="{{url('layout-hidden')}}" class="{{ Request::is('layout-hidden') ? 'active' : '' }}">Hidden</a></li>
                            <li><a href="{{url('layout-fullwidth')}}" class="{{ Request::is('layout-fullwidth') ? 'active' : '' }}">Full Width</a></li>
                            <li><a href="{{url('layout-rtl')}}" class="{{ Request::is('layout-rtl') ? 'active' : '' }}">RTL</a></li>
                            <li><a href="{{url('layout-dark')}}" class="{{ Request::is('layout-dark') ? 'active' : '' }}">Dark</a></li>
                        </ul>
                    </li>

                    <li class="menu-title" aria-disabled="true"><span>HEALTHCARE</span></li>

                    <li>
                        <a href="{{url('patients')}}" class="{{ Request::is('patients', 'all-patients-list', 'add-patient', 'edit-patient', 'patient-details', 'patient-details-appointments', 'patient-details-vital-signs', 'patient-details-visit-history', 'patient-details-lab-results', 'patient-details-prescription', 'patient-details-medical-history', 'patient-details-documents') ? 'active' : '' }}">
                            <i class="ti ti-users"></i><span>Patients</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('doctors')}}" class="{{ Request::is('doctors', 'all-doctors-list', 'add-doctors', 'edit-doctors', 'doctor-details') ? 'active' : '' }}">
                            <i class="ti ti-stethoscope"></i><span>Doctors</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('appointments')}}" class="{{ Request::is('appointments', 'appointment-consultation') ? 'active' : '' }}">
                            <i class="ti ti-calendar-time"></i><span>Appointments</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('visits')}}" class="{{ Request::is('visits', 'start-visits') ? 'active' : '' }}">
                            <i class="ti ti-e-passport"></i><span>Visits</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('lab-results', 'medical-results') ? 'active subdrop' : '' }}">
                            <i class="ti ti-test-pipe"></i><span>Laboratory</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url('lab-results')}}" class="{{ Request::is('lab-results') ? 'active' : '' }}">Lab Results</a>
                            </li>
                            <li>
                                <a href="{{url('medical-results')}}" class="{{ Request::is('medical-results') ? 'active' : '' }}">Medical Rsults</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('pharmacy')}}" class="{{ Request::is('pharmacy') ? 'active' : '' }}">
                            <i class="ti ti-prescription"></i><span>Pharmacy</span>
                        </a>
                    </li>

                    <li class="menu-title" aria-disabled="true"><span>MANAGE</span></li>

                    <li>
                        <a href="{{url('staffs')}}" class="{{ Request::is('staffs') ? 'active' : '' }}">
                            <i class="ti ti-users-group"></i><span>Staffs</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('notifications')}}" class="{{ Request::is('notifications') ? 'active' : '' }}">
                            <i class="ti ti-bell"></i><span>Notifications</span>
                        </a>
                    </li>                    

                    <li>
                        <a href="{{url('general-settings')}}" class="{{ Request::is('general-settings', 'security-settings', 'preferences-settings', 'appearance-settings', 'security-settings', 'notifications-settings', 'user-permissions-settings', 'permission-settings', 'plans-billings-settings') ? 'active' : '' }}">
                            <i class="ti ti-settings"></i><span>Settings</span>
                        </a>
                    </li>

                    <li class="menu-title" aria-disabled="true"><span>PAGES</span></li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('login', 'sign-up', 'forgot-password', 'change-password', 'lock-screen') ? 'active subdrop' : '' }}">
                            <i class="ti ti-lock-square-rounded"></i><span>Authentication</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('login')}}" class="{{ Request::is('login') ? 'active' : '' }}">Login</a></li>
                            <li><a href="{{url('sign-up')}}" class="{{ Request::is('sign-up') ? 'active' : '' }}">Sign Up</a></li>
                            <li><a href="{{url('forgot-password')}}" class="{{ Request::is('forgot-password') ? 'active' : '' }}">Forgot Password</a></li>
                            <li><a href="{{url('change-password')}}" class="{{ Request::is('change-password') ? 'active' : '' }}">Change Password</a></li>
                            <li><a href="{{url('lock-screen')}}" class="{{ Request::is('lock-screen') ? 'active' : '' }}">Lock Screen</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('error-404', 'error-500') ? 'active subdrop' : '' }}">
                            <i class="ti ti-face-id-error"></i><span>Error Pages</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('error-404')}}" class="{{ Request::is('error-404') ? 'active' : '' }}">Error 404</a></li>
                            <li><a href="{{url('error-500')}}" class="{{ Request::is('error-500') ? 'active' : '' }}">Error 500</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('starter-page', 'coming-soon', 'under-maintenance', 'privacy-policy', 'terms-and-conditions') ? 'active subdrop' : '' }}">
                            <i class="ti ti-files"></i><span>Other Pages</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('starter-page')}}" class="{{ Request::is('starter-page') ? 'active' : '' }}">Starter Page</a></li>    
                            <li><a href="{{url('coming-soon')}}" class="{{ Request::is('coming-soon') ? 'active' : '' }}">Coming Soon</a></li>
                            <li><a href="{{url('under-maintenance')}}" class="{{ Request::is('under-maintenance') ? 'active' : '' }}">Under Maintenance</a></li>
                            <li><a href="{{url('privacy-policy')}}" class="{{ Request::is('privacy-policy') ? 'active' : '' }}">Privacy Policy</a></li>
                            <li><a href="{{url('terms-and-conditions')}}" class="{{ Request::is('terms-and-conditions') ? 'active' : '' }}">Terms & Conditions</a></li>
                        </ul>
                    </li>   

                    <li class="menu-title" aria-disabled="true"><span>UI Interface</span></li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('ui-accordion', 'ui-alerts', 'ui-avatar', 'ui-badges', 'ui-breadcrumb', 'ui-buttons', 'ui-buttons-group', 'ui-cards', 'ui-carousel', 'ui-collapse', 'ui-dropdowns', 'ui-ratio', 'ui-grid', 'ui-images', 'ui-links', 'ui-list-group', 'ui-modals', 'ui-offcanvas', 'ui-pagination', 'ui-placeholders', 'ui-popovers', 'ui-progress', 'ui-scrollspy', 'ui-spinner', 'ui-nav-tabs', 'ui-toasts', 'ui-tooltips', 'ui-typography', 'ui-utilities') ? 'active subdrop' : '' }}">
                            <i class="ti ti-hierarchy"></i><span>Base UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('ui-accordion')}}" class="{{ Request::is('ui-accordion') ? 'active' : '' }}">Accordion</a></li>   
                            <li><a href="{{url('ui-alerts')}}" class="{{ Request::is('ui-alerts') ? 'active' : '' }}">Alerts</a></li>
                            <li><a href="{{url('ui-avatar')}}" class="{{ Request::is('ui-avatar') ? 'active' : '' }}">Avatar</a></li>
                            <li><a href="{{url('ui-badges')}}" class="{{ Request::is('ui-badges') ? 'active' : '' }}">Badges</a></li>
                            <li><a href="{{url('ui-breadcrumb')}}" class="{{ Request::is('ui-breadcrumb') ? 'active' : '' }}">Breadcrumb</a></li>
                            <li><a href="{{url('ui-buttons')}}" class="{{ Request::is('ui-buttons') ? 'active' : '' }}">Buttons</a></li>
                            <li><a href="{{url('ui-buttons-group')}}" class="{{ Request::is('ui-buttons-group') ? 'active' : '' }}">Button Group</a></li>
                            <li><a href="{{url('ui-cards')}}" class="{{ Request::is('ui-cards') ? 'active' : '' }}">Card</a></li>
                            <li><a href="{{url('ui-carousel')}}" class="{{ Request::is('ui-carousel') ? 'active' : '' }}">Carousel</a></li>
                            <li><a href="{{url('ui-collapse')}}" class="{{ Request::is('ui-collapse') ? 'active' : '' }}">Collapse</a></li>
                            <li><a href="{{url('ui-dropdowns')}}" class="{{ Request::is('ui-dropdowns') ? 'active' : '' }}">Dropdowns</a></li>
                            <li><a href="{{url('ui-ratio')}}" class="{{ Request::is('ui-ratio') ? 'active' : '' }}">Ratio</a></li>
                            <li><a href="{{url('ui-grid')}}" class="{{ Request::is('ui-grid') ? 'active' : '' }}">Grid</a></li>
                            <li><a href="{{url('ui-images')}}" class="{{ Request::is('ui-images') ? 'active' : '' }}">Images</a></li>
                            <li><a href="{{url('ui-links')}}" class="{{ Request::is('ui-links') ? 'active' : '' }}">Links</a></li>
                            <li><a href="{{url('ui-list-group')}}" class="{{ Request::is('ui-list-group') ? 'active' : '' }}">List Group</a></li>
                            <li><a href="{{url('ui-modals')}}" class="{{ Request::is('ui-modals') ? 'active' : '' }}">Modals</a></li>
                            <li><a href="{{url('ui-offcanvas')}}" class="{{ Request::is('ui-offcanvas') ? 'active' : '' }}">Offcanvas</a></li>
                            <li><a href="{{url('ui-pagination')}}" class="{{ Request::is('ui-pagination') ? 'active' : '' }}">Pagination</a></li>
                            <li><a href="{{url('ui-placeholders')}}" class="{{ Request::is('ui-placeholders') ? 'active' : '' }}">Placeholders</a></li>
                            <li><a href="{{url('ui-popovers')}}" class="{{ Request::is('ui-popovers') ? 'active' : '' }}">Popovers</a></li>
                            <li><a href="{{url('ui-progress')}}" class="{{ Request::is('ui-progress') ? 'active' : '' }}">Progress</a></li>
                            <li><a href="{{url('ui-scrollspy')}}" class="{{ Request::is('ui-scrollspy') ? 'active' : '' }}">Scrollspy</a></li>
                            <li><a href="{{url('ui-spinner')}}" class="{{ Request::is('ui-spinner') ? 'active' : '' }}">Spinner</a></li>
                            <li><a href="{{url('ui-nav-tabs')}}" class="{{ Request::is('ui-nav-tabs') ? 'active' : '' }}">Tabs</a></li>
                            <li><a href="{{url('ui-toasts')}}" class="{{ Request::is('ui-toasts') ? 'active' : '' }}">Toasts</a></li>
                            <li><a href="{{url('ui-tooltips')}}" class="{{ Request::is('ui-tooltips') ? 'active' : '' }}">Tooltips</a></li>
                            <li><a href="{{url('ui-typography')}}" class="{{ Request::is('ui-typography') ? 'active' : '' }}">Typography</a></li>
                            <li><a href="{{url('ui-utilities')}}" class="{{ Request::is('ui-utilities') ? 'active' : '' }}">Utilities</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('ui-dragula', 'ui-clipboard', 'ui-rangeslider', 'ui-sweetalerts', 'ui-lightbox', 'ui-rating', 'ui-scrollbar') ? 'active subdrop' : '' }}">
                            <i class="ti ti-whirl"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('ui-dragula')}}" class="{{ Request::is('ui-dragula') ? 'active' : '' }}">Dragula</a></li>
                            <li><a href="{{url('ui-clipboard')}}" class="{{ Request::is('ui-clipboard') ? 'active' : '' }}">Clipboard</a></li>
                            <li><a href="{{url('ui-rangeslider')}}" class="{{ Request::is('ui-rangeslider') ? 'active' : '' }}">Range Slider</a></li>
                            <li><a href="{{url('ui-sweetalerts')}}" class="{{ Request::is('ui-sweetalerts') ? 'active' : '' }}">Sweet Alerts</a></li>
                            <li><a href="{{url('ui-lightbox')}}" class="{{ Request::is('ui-lightbox') ? 'active' : '' }}">Lightbox</a></li>
                            <li><a href="{{url('ui-rating')}}" class="{{ Request::is('ui-rating') ? 'active' : '' }}">Rating</a></li>
                            <li><a href="{{url('ui-scrollbar')}}" class="{{ Request::is('ui-scrollbar') ? 'active' : '' }}">Scrollbar</a></li>
                        </ul>
                    </li> 

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('form-basic-inputs', 'form-checkbox-radios', 'form-input-groups', 'form-grid-gutters', 'form-mask', 'form-fileupload', 'form-horizontal', 'form-vertical', 'form-floating-labels', 'form-validation', 'form-select', 'form-wizard', 'form-pickers', 'form-editors') ? 'active subdrop' : '' }}">
                            <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);" class="{{ Request::is('form-basic-inputs', 'form-checkbox-radios', 'form-input-groups', 'form-grid-gutters', 'form-mask', 'form-fileupload') ? 'active subdrop' : '' }}">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="{{url('form-basic-inputs')}}" class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}">Basic Inputs</a></li>
                                    <li><a href="{{url('form-checkbox-radios')}}" class="{{ Request::is('form-checkbox-radios') ? 'active' : '' }}">Checkbox & Radios</a></li>
                                    <li><a href="{{url('form-input-groups')}}" class="{{ Request::is('form-input-groups') ? 'active' : '' }}">Input Groups</a></li>
                                    <li><a href="{{url('form-grid-gutters')}}" class="{{ Request::is('form-grid-gutters') ? 'active' : '' }}">Grid & Gutters</a></li>
                                    <li><a href="{{url('form-mask')}}" class="{{ Request::is('form-mask') ? 'active' : '' }}">Input Masks</a></li>
                                    <li><a href="{{url('form-fileupload')}}" class="{{ Request::is('form-fileupload') ? 'active' : '' }}">File Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);" class="{{ Request::is('form-horizontal', 'form-vertical', 'form-floating-labels') ? 'active subdrop' : '' }}">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="{{url('form-horizontal')}}" class="{{ Request::is('form-horizontal') ? 'active' : '' }}">Horizontal Form</a></li>
                                    <li><a href="{{url('form-vertical')}}" class="{{ Request::is('form-vertical') ? 'active' : '' }}">Vertical Form</a></li>
                                    <li><a href="{{url('form-floating-labels')}}" class="{{ Request::is('form-floating-labels') ? 'active' : '' }}">Floating Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('form-validation')}}" class="{{ Request::is('form-validation') ? 'active' : '' }}">Form Validation</a></li>
                            <li><a href="{{url('form-select')}}" class="{{ Request::is('form-select') ? 'active' : '' }}">Form Select</a></li>
                            <li><a href="{{url('form-wizard')}}" class="{{ Request::is('form-wizard') ? 'active' : '' }}">Form Wizard</a></li>
                            <li><a href="{{url('form-pickers')}}" class="{{ Request::is('form-pickers') ? 'active' : '' }}">Form Picker</a></li>
                            <li><a href="{{url('form-editors')}}" class="{{ Request::is('form-editors') ? 'active' : '' }}">Form Editors</a></li>
                        </ul>
                    </li> 

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('tables-basic', 'data-tables') ? 'active subdrop' : '' }}">
                            <i class="ti ti-table"></i><span>Tables</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('tables-basic')}}" class="{{ Request::is('tables-basic') ? 'active' : '' }}">Basic Tables </a></li>
                            <li><a href="{{url('data-tables')}}" class="{{ Request::is('data-tables') ? 'active' : '' }}">Data Table </a></li>
                        </ul>
                    </li> 

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('chart-apex', 'chart-c3', 'chart-js', 'chart-morris', 'chart-flot', 'chart-peity') ? 'active subdrop' : '' }}">
                            <i class="ti ti-chart-pie-3"></i><span>Charts</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('chart-apex')}}" class="{{ Request::is('chart-apex') ? 'active' : '' }}">Apex Charts</a></li> 
                            <li><a href="{{url('chart-c3')}}" class="{{ Request::is('chart-c3') ? 'active' : '' }}">Chart C3</a></li>
                            <li><a href="{{url('chart-js')}}" class="{{ Request::is('chart-js') ? 'active' : '' }}">Chart Js</a></li>
                            <li><a href="{{url('chart-morris')}}" class="{{ Request::is('chart-morris') ? 'active' : '' }}">Morris Charts</a></li>
                            <li><a href="{{url('chart-flot')}}" class="{{ Request::is('chart-flot') ? 'active' : '' }}">Flot Charts</a></li>
                            <li><a href="{{url('chart-peity')}}" class="{{ Request::is('chart-peity') ? 'active' : '' }}">Peity Charts</a></li>
                        </ul>
                    </li> 

                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ Request::is('icon-fontawesome', 'icon-tabler', 'icon-bootstrap', 'icon-remix', 'icon-feather', 'icon-ionic', 'icon-material', 'icon-pe7', 'icon-simpleline', 'icon-themify', 'icon-weather', 'icon-typicon', 'icon-flag') ? 'active subdrop' : '' }}">
                            <i class="ti ti-icons"></i><span>Icons</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{url('icon-fontawesome')}}" class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}">Fontawesome Icons</a></li>
                            <li><a href="{{url('icon-tabler')}}" class="{{ Request::is('icon-tabler') ? 'active' : '' }}">Tabler Icons</a></li>
                            <li><a href="{{url('icon-bootstrap')}}" class="{{ Request::is('icon-bootstrap') ? 'active' : '' }}">Bootstrap Icons</a></li>
                            <li><a href="{{url('icon-remix')}}" class="{{ Request::is('icon-remix') ? 'active' : '' }}">Remix Icons</a></li>
                            <li><a href="{{url('icon-feather')}}" class="{{ Request::is('icon-feather') ? 'active' : '' }}">Feather Icons</a></li>   
                            <li><a href="{{url('icon-ionic')}}" class="{{ Request::is('icon-ionic') ? 'active' : '' }}">Ionic Icons</a></li>
                            <li><a href="{{url('icon-material')}}" class="{{ Request::is('icon-material') ? 'active' : '' }}">Material Icons</a></li>
                            <li><a href="{{url('icon-pe7')}}" class="{{ Request::is('icon-pe7') ? 'active' : '' }}">Pe7 Icons</a></li>
                            <li><a href="{{url('icon-simpleline')}}" class="{{ Request::is('icon-simpleline') ? 'active' : '' }}">Simpleline Icons</a></li>
                            <li><a href="{{url('icon-themify')}}" class="{{ Request::is('icon-themify') ? 'active' : '' }}">Themify Icons</a></li>
                            <li><a href="{{url('icon-weather')}}" class="{{ Request::is('icon-weather') ? 'active' : '' }}">Weather Icons</a></li>
                            <li><a href="{{url('icon-typicon')}}" class="{{ Request::is('icon-typicon') ? 'active' : '' }}">Typicon Icons</a></li>
                            <li><a href="{{url('icon-flag')}}" class="{{ Request::is('icon-flag') ? 'active' : '' }}">Flag Icons</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="{{url('widgets')}}" class="{{ Request::is('widgets') ? 'active' : '' }}">
                            <i class="ti ti-components"></i><span>Widgets</span>
                        </a>
                    </li> 

                    <li class="menu-title" aria-disabled="true"><span>HELP</span></li>

                    <li>
                        <a href="javascript:void(0);"><i class="ti ti-file-type-doc"></i><span>Documentation</span></a>
                    </li> 

                    <li>
                        <a href="javascript:void(0);"><i class="ti ti-git-compare"></i>
                            <span>Changelog</span><span class="badge bg-success fs-10"></span> 
                        </a>
                    </li> 

                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <i class="ti ti-menu-order"></i><span>Multi Level</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="javascript:void(0);">Multilevel 1</a></li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three">
                                        <a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                            <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Multilevel 3</a></li>
                        </ul>
                    </li>

                </ul>                   
            </div>
        </div>

    </div>
    <!-- Sidenav Menu End -->