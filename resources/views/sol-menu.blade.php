
    <!-- main menu-->
    <div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
      <!-- main menu header-->
      @if(0)
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      @endif
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title" onclick="window.open('<?=url;?>','_self');">
            
            Anasayfa
          </span></a>
            <ul class="menu-content">
          
              <li @if(Session::get('sayfa')==1) class="active" @endif >
              <a href="<?=url;?>/personel" data-i18n="nav.dash.project" class="menu-item">Personel</a>
              </li>

              
           
              <li @if(Session::get('sayfa')==2) class="active" @endif><a href="<?=url;?>/departmanlar" data-i18n="nav.dash.ecommerce" class="menu-item">Departmanlar</a>
              </li>

              
            
              <li @if(Session::get('sayfa')==3) class="active" @endif>
              <a href="<?=url;?>/dosyalar" data-i18n="nav.dash.analytics" class="menu-item">Dosyalar</a>
              </li>
              <li @if(Session::get('sayfa')==4) class="active" @endif><a href="<?=url;?>/izinler" data-i18n="nav.dash.crm" class="menu-item">Personel İzinleri</a>
              </li>
              
            </ul>
          </li>
         
         @if(0)
          <li class=" nav-item"><a href="#"><i class="icon-search7"></i><span data-i18n="nav.search_pages.main" class="menu-title">Search</span></a>
            <ul class="menu-content">
              <li><a href="search-page.html" data-i18n="nav.search_pages.search_page" class="menu-item">Search Page</a>
              </li>
              <li><a href="search-website.html" data-i18n="nav.search_pages.search_website" class="menu-item">Search Website</a>
              </li>
              <li><a href="search-images.html" data-i18n="nav.search_pages.search_images" class="menu-item">Search Images</a>
              </li>
              <li><a href="search-videos.html" data-i18n="nav.search_pages.search_videos" class="menu-item">Search Videos</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-unlock2"></i><span data-i18n="nav.login_register_pages.main" class="menu-title">Authentication</span></a>
            <ul class="menu-content">
              <li><a href="login-simple.html" data-i18n="nav.login_register_pages.login_simple" class="menu-item">Login Simple</a>
              </li>
              <li><a href="login-with-bg.html" data-i18n="nav.login_register_pages.login_with_bg" class="menu-item">Login with Bg</a>
              </li>
              <li><a href="login-with-bg-image.html" data-i18n="nav.login_register_pages.login_with_bg_image" class="menu-item">Login with Bg Image</a>
              </li>
              <li><a href="login-with-navbar.html" data-i18n="nav.login_register_pages.login_with_navbar" class="menu-item">Login with Navbar</a>
              </li>
              <li><a href="login-advanced.html" data-i18n="nav.login_register_pages.login_advanced" class="menu-item">Login Advanced</a>
              </li>
              <li><a href="register-simple.html" data-i18n="nav.login_register_pages.register_simple" class="menu-item">Register Simple</a>
              </li>
              <li><a href="register-with-bg.html" data-i18n="nav.login_register_pages.register_with_bg" class="menu-item">Register with Bg</a>
              </li>
              <li><a href="register-with-bg-image.html" data-i18n="nav.login_register_pages.register_with_bg_image" class="menu-item">Register with Bg Image</a>
              </li>
              <li><a href="register-with-navbar.html" data-i18n="nav.login_register_pages.register_with_navbar" class="menu-item">Register with Navbar</a>
              </li>
              <li><a href="register-advanced.html" data-i18n="nav.login_register_pages.register_advanced" class="menu-item">Register Advanced</a>
              </li>
              <li><a href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user" class="menu-item">Unlock User</a>
              </li>
              <li><a href="recover-password.html" data-i18n="nav.login_register_pages.recover_password" class="menu-item">recover-password</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-warning"></i><span data-i18n="nav.error_pages.main" class="menu-title">Error</span></a>
            <ul class="menu-content">
              <li><a href="error-400.html" data-i18n="nav.error_pages.error_400" class="menu-item">Error 400</a>
              </li>
              <li><a href="error-400-with-navbar.html" data-i18n="nav.error_pages.error_400_with_navbar" class="menu-item">Error 400 with Navbar</a>
              </li>
              <li><a href="error-401.html" data-i18n="nav.error_pages.error_401" class="menu-item">Error 401</a>
              </li>
              <li><a href="error-401-with-navbar.html" data-i18n="nav.error_pages.error_401_with_navbar" class="menu-item">Error 401 with Navbar</a>
              </li>
              <li><a href="error-403.html" data-i18n="nav.error_pages.error_403" class="menu-item">Error 403</a>
              </li>
              <li><a href="error-403-with-navbar.html" data-i18n="nav.error_pages.error_403_with_navbar" class="menu-item">Error 403 with Navbar</a>
              </li>
              <li><a href="error-404.html" data-i18n="nav.error_pages.error_404" class="menu-item">Error 404</a>
              </li>
              <li><a href="error-404-with-navbar.html" data-i18n="nav.error_pages.error_404_with_navbar" class="menu-item">Error 404 with Navbar</a>
              </li>
              <li><a href="error-500.html" data-i18n="nav.error_pages.error_500" class="menu-item">Error 500</a>
              </li>
              <li><a href="error-500-with-navbar.html" data-i18n="nav.error_pages.error_500_with_navbar" class="menu-item">Error 500 with Navbar</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-file2"></i><span data-i18n="nav.other_pages.main" class="menu-title">Others</span></a>
            <ul class="menu-content">
              <li><a href="coming-soon.html" data-i18n="nav.other_pages.coming_soon.main" class="menu-item">Coming Soon</a>
                <ul class="menu-content">
                  <li><a href="coming-soon-flat.html" data-i18n="nav.other_pages.coming_soon.coming_soon_flat" class="menu-item">Flat</a>
                  </li>
                  <li><a href="coming-soon-bg-image.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image" class="menu-item">Bg image</a>
                  </li>
                  <li><a href="coming-soon-bg-video.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video" class="menu-item">Bg video</a>
                  </li>
                </ul>
              </li>
              <li><a href="under-maintenance.html" data-i18n="nav.other_pages.under_maintenance" class="menu-item">Maintenance</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i data-toggle="tooltip" data-placement="right" data-original-title="User Interface" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Cards</span><span class="tag tag tag-success float-xs-right mr-2">New</span></a>
            <ul class="menu-content">
              <li><a href="card-bootstrap.html" data-i18n="nav.cards.card_bootstrap" class="menu-item">Bootstrap</a>
              </li>
              <li><a href="card-advance.html" data-i18n="nav.cards.card_advance" class="menu-item">Advance</a>
              </li>
              <li><a href="card-headings.html" data-i18n="nav.cards.card_headings" class="menu-item">Headings</a>
              </li>
              <li><a href="card-options.html" data-i18n="nav.cards.card_options" class="menu-item">Options</a>
              </li>
              <li><a href="card-actions.html" data-i18n="nav.cards.card_actions" class="menu-item">Action</a>
              </li>
              <li><a href="card-draggable.html" data-i18n="nav.cards.card_draggable" class="menu-item">Draggable</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">Content</span></a>
            <ul class="menu-content">
              <li><a href="content-grid.html" data-i18n="nav.content.content_grid" class="menu-item">Grid</a>
              </li>
              <li><a href="content-typography.html" data-i18n="nav.content.content_typography" class="menu-item">Typography</a>
              </li>
              <li><a href="content-text-utilities.html" data-i18n="nav.content.content_text_utilities" class="menu-item">Text utilities</a>
              </li>
              <li><a href="content-syntax-highlighter.html" data-i18n="nav.content.content_syntax_highlighter" class="menu-item">Syntax highlighter</a>
              </li>
              <li><a href="content-helper-classes.html" data-i18n="nav.content.content_helper_classes" class="menu-item">Helper classes</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">Components</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Alerts</a>
              </li>
              <li><a href="component-callout.html" data-i18n="nav.components.component_callout" class="menu-item">Callout</a>
              </li>
              <li><a href="components-buttons.html" data-i18n="nav.components.components_buttons.main" class="menu-item">Buttons</a>
                <ul class="menu-content">
                  <li><a href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">Basic Buttons</a>
                  </li>
                  <li><a href="component-buttons-extended.html" data-i18n="nav.components.components_buttons.component_buttons_extended" class="menu-item">Extended Buttons</a>
                  </li>
                </ul>
              </li>
              <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel" class="menu-item">Carousel</a>
              </li>
              <li><a href="component-collapse.html" data-i18n="nav.components.component_collapse" class="menu-item">Collapse</a>
              </li>
              <li><a href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns" class="menu-item">Dropdowns</a>
              </li>
              <li><a href="component-list-group.html" data-i18n="nav.components.component_list_group" class="menu-item">List Group</a>
              </li>
              <li><a href="component-modals.html" data-i18n="nav.components.component_modals" class="menu-item">Modals</a>
              </li>
              <li><a href="component-pagination.html" data-i18n="nav.components.component_pagination" class="menu-item">Pagination</a>
              </li>
              <li><a href="component-navs-component.html" data-i18n="nav.components.component_navs_component" class="menu-item">Navs Component</a>
              </li>
              <li><a href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component" class="menu-item">Tabs Component</a>
              </li>
              <li><a href="component-pills-component.html" data-i18n="nav.components.component_pills_component" class="menu-item">Pills Component</a>
              </li>
              <li><a href="component-tooltips.html" data-i18n="nav.components.component_tooltips" class="menu-item">Tooltips</a>
              </li>
              <li><a href="component-popovers.html" data-i18n="nav.components.component_popovers" class="menu-item">Popovers</a>
              </li>
              <li><a href="component-tags.html" data-i18n="nav.components.component_tags" class="menu-item">Tags</a>
              </li>
              <li><a href="component-pill-tags.html" class="menu-item">Pill Tags</a>
              </li>
              <li><a href="component-progress.html" data-i18n="nav.components.component_progress" class="menu-item">Progress</a>
              </li>
              <li><a href="component-media-objects.html" data-i18n="nav.components.component_media_objects" class="menu-item">Media Objects</a>
              </li>
              <li><a href="component-scrollable.html" data-i18n="nav.components.component_scrollable" class="menu-item">Scrollable</a>
              </li>
              <li><a href="component-loaders.html" data-i18n="nav.components.component_loaders" class="menu-item">Loaders</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-diamond"></i><span data-i18n="nav.extra_components.main" class="menu-title">Extra Components</span></a>
            <ul class="menu-content">
              <li><a href="ex-component-sweet-alerts.html" data-i18n="nav.extra_components.ex_component_sweet_alerts" class="menu-item">Sweet Alerts</a>
              </li>
              <li><a href="ex-component-tree-views.html" data-i18n="nav.extra_components.ex_component_tree_views" class="menu-item">Tree Views</a>
              </li>
              <li><a href="ex-component-toastr.html" data-i18n="nav.extra_components.ex_component_toastr" class="menu-item">Toastr</a>
              </li>
              <li><a href="ex-component-ratings.html" data-i18n="nav.extra_components.ex_component_ratings" class="menu-item">Ratings</a>
              </li>
              <li><a href="ex-component-context-menu.html" data-i18n="nav.extra_components.ex_component_context_menu" class="menu-item">Context Menu</a>
              </li>
              <li><a href="ex-component-noui-slider.html" data-i18n="nav.extra_components.ex_component_noui_slider" class="menu-item">NoUI Slider</a>
              </li>
              <li><a href="ex-component-date-time-dropper.html" data-i18n="nav.extra_components.ex_component_date_time_dropper" class="menu-item">Date Time Dropper</a>
              </li>
              <li><a href="ex-component-lists.html" data-i18n="nav.extra_components.ex_component_lists" class="menu-item">Lists</a>
              </li>
              <li><a href="ex-component-toolbar.html" data-i18n="nav.extra_components.ex_component_toolbar" class="menu-item">Toolbar</a>
              </li>
              <li><a href="ex-component-unslider.html" data-i18n="nav.extra_components.ex_component_unslider" class="menu-item">Unslider</a>
              </li>
              <li><a href="ex-component-knob.html" data-i18n="nav.extra_components.ex_component_knob" class="menu-item">Knob</a>
              </li>
              <li><a href="ex-component-long-press.html" data-i18n="nav.extra_components.ex_component_long_press" class="menu-item">Long Press</a>
              </li>
              <li><a href="ex-component-offline.html" data-i18n="nav.extra_components.ex_component_offline" class="menu-item">Offline</a>
              </li>
              <li><a href="ex-component-zoom.html" data-i18n="nav.extra_components.ex_component_zoom" class="menu-item">Zoom</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">Icons</span></a>
            <ul class="menu-content">
              <li><a href="icons-feather.html" data-i18n="nav.icons.icons_feather" class="menu-item">Feather</a>
              </li>
              <li><a href="icons-ionicons.html" data-i18n="nav.icons.icons_ionicons" class="menu-item">Ionicons</a>
              </li>
              <li><a href="icons-fps-line.html" data-i18n="nav.icons.icons_fps_line" class="menu-item">FPS Line Icons</a>
              </li>
              <li><a href="icons-ico-moon.html" data-i18n="nav.icons.icons_ico_moon" class="menu-item">Ico Moon</a>
              </li>
              <li><a href="icons-font-awesome.html" data-i18n="nav.icons.icons_font_awesome" class="menu-item">Font Awesome</a>
              </li>
              <li><a href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons" class="menu-item">Meteocons</a>
              </li>
              <li><a href="icons-evil.html" data-i18n="nav.icons.icons_evil" class="menu-item">Evil Icons</a>
              </li>
              <li><a href="icons-linecons.html" data-i18n="nav.icons.icons_linecons" class="menu-item">Linecons</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="animation.html"><i class="icon-spinner10 spinner"></i><span data-i18n="nav.animation.main" class="menu-title">Animation</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.forms">Forms</span><i data-toggle="tooltip" data-placement="right" data-original-title="Forms" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paper"></i><span data-i18n="nav.form_elements.main" class="menu-title">Form Elements</span></a>
            <ul class="menu-content">
              <li><a href="form-inputs.html" data-i18n="nav.form_elements.form_inputs" class="menu-item">Form Inputs</a>
              </li>
              <li><a href="form-input-groups.html" data-i18n="nav.form_elements.form_input_groups" class="menu-item">Input Groups</a>
              </li>
              <li><a href="form-input-grid.html" data-i18n="nav.form_elements.form_input_grid" class="menu-item">Input Grid</a>
              </li>
              <li><a href="form-extended-inputs.html" data-i18n="nav.form_elements.form_extended_inputs" class="menu-item">Extended Inputs</a>
              </li>
              <li><a href="form-checkboxes-radios.html" data-i18n="nav.form_elements.form_checkboxes_radios" class="menu-item">Checkboxes &amp; Radios</a>
              </li>
              <li><a href="form-switch.html" data-i18n="nav.form_elements.form_switch" class="menu-item">Switch</a>
              </li>
              <li><a href="#" data-i18n="nav.form_elements.form_select.main" class="menu-item">Select</a>
                <ul class="menu-content">
                  <li><a href="form-select2.html" data-i18n="nav.form_elements.form_select.form_select2" class="menu-item">Select2</a>
                  </li>
                  <li><a href="form-selectize.html" data-i18n="nav.form_elements.form_select.form_selectize" class="menu-item">Selectize</a>
                  </li>
                  <li><a href="form-selectivity.html" data-i18n="nav.form_elements.form_select.form_selectivity" class="menu-item">Selectivity</a>
                  </li>
                  <li><a href="form-select-box-it.html" data-i18n="nav.form_elements.form_select.form_select_box_it" class="menu-item">Select Box It</a>
                  </li>
                </ul>
              </li>
              <li><a href="form-dual-listbox.html" data-i18n="nav.form_elements.form_dual_listbox" class="menu-item">Dual Listbox</a>
              </li>
              <li><a href="form-tags-input.html" data-i18n="nav.form_elements.form_tags_input" class="menu-item">Tags Input</a>
              </li>
              <li><a href="form-validation.html" data-i18n="nav.form_elements.form_validation" class="menu-item">Validation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-wpforms"></i><span data-i18n="nav.form_layouts.main" class="menu-title">Form Layouts</span></a>
            <ul class="menu-content">
              <li><a href="form-layout-basic.html" data-i18n="nav.form_layouts.form_layout_basic" class="menu-item">Basic Forms</a>
              </li>
              <li><a href="form-layout-horizontal.html" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item">Horizontal Forms</a>
              </li>
              <li><a href="form-layout-hidden-labels.html" data-i18n="nav.form_layouts.form_layout_hidden_labels" class="menu-item">Hidden Labels</a>
              </li>
              <li><a href="form-layout-form-actions.html" data-i18n="nav.form_layouts.form_layout_form_actions" class="menu-item">Form Actions</a>
              </li>
              <li><a href="form-layout-row-separator.html" data-i18n="nav.form_layouts.form_layout_row_separator" class="menu-item">Row Separator</a>
              </li>
              <li><a href="form-layout-bordered.html" data-i18n="nav.form_layouts.form_layout_bordered" class="menu-item">Bordered</a>
              </li>
              <li><a href="form-layout-striped-rows.html" data-i18n="nav.form_layouts.form_layout_striped_rows" class="menu-item">Striped Rows</a>
              </li>
              <li><a href="form-layout-striped-labels.html" data-i18n="nav.form_layouts.form_layout_striped_labels" class="menu-item">Striped Labels</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paste"></i><span data-i18n="nav.form_wizard.main" class="menu-title">Form Wizard</span></a>
            <ul class="menu-content">
              <li><a href="form-wizard-circle-style.html" data-i18n="nav.form_wizard.form_wizard_circle_style" class="menu-item">Circle Style</a>
              </li>
              <li><a href="form-wizard-notification-style.html" data-i18n="nav.form_wizard.form_wizard_notification_style" class="menu-item">Notification Style</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="form-repeater.html"><i class="icon-repeat2"></i><span data-i18n="nav.form_repeater.main" class="menu-title">Form Repeater</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.tables">Tables</span><i data-toggle="tooltip" data-placement="right" data-original-title="Tables" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-table2"></i><span data-i18n="nav.bootstrap_tables.main" class="menu-title">Bootstrap Tables</span></a>
            <ul class="menu-content">
              <li><a href="table-basic.html" data-i18n="nav.bootstrap_tables.table_basic" class="menu-item">Basic Tables</a>
              </li>
              <li><a href="table-border.html" data-i18n="nav.bootstrap_tables.table_border" class="menu-item">Table Border</a>
              </li>
              <li><a href="table-sizing.html" data-i18n="nav.bootstrap_tables.table_sizing" class="menu-item">Table Sizing</a>
              </li>
              <li><a href="table-styling.html" data-i18n="nav.bootstrap_tables.table_styling" class="menu-item">Table Styling</a>
              </li>
              <li><a href="table-components.html" data-i18n="nav.bootstrap_tables.table_components" class="menu-item">Table Components</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-th"></i><span data-i18n="nav.data_tables.main" class="menu-title">DataTables</span></a>
            <ul class="menu-content">
              <li><a href="dt-basic-initialization.html" data-i18n="nav.data_tables.dt_basic_initialization" class="menu-item">Basic Initialisation</a>
              </li>
              <li><a href="dt-advanced-initialization.html" data-i18n="nav.data_tables.dt_advanced_initialization" class="menu-item">Advanced initialisation</a>
              </li>
              <li><a href="dt-styling.html" data-i18n="nav.data_tables.dt_styling" class="menu-item">Styling</a>
              </li>
              <li><a href="dt-data-sources.html" data-i18n="nav.data_tables.dt_data_sources" class="menu-item">Data Sources</a>
              </li>
              <li><a href="dt-api.html" data-i18n="nav.data_tables.dt_api" class="menu-item">API</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-th-large"></i><span data-i18n="nav.datatable_extensions.main" class="menu-title">DataTables Ext.</span></a>
            <ul class="menu-content">
              <li><a href="dt-extensions-autofill.html" data-i18n="nav.datatable_extensions.dt_extensions_autofill" class="menu-item">AutoFill</a>
              </li>
              <li><a href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main" class="menu-item">Buttons</a>
                <ul class="menu-content">
                  <li><a href="dt-extensions-buttons-basic.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic" class="menu-item">Basic Buttons</a>
                  </li>
                  <li><a href="dt-extensions-buttons-html-5-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export" class="menu-item">HTML 5 Data Export</a>
                  </li>
                  <li><a href="dt-extensions-buttons-flash-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export" class="menu-item">Flash Data Export</a>
                  </li>
                  <li><a href="dt-extensions-buttons-column-visibility.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility" class="menu-item">Column Visibility</a>
                  </li>
                  <li><a href="dt-extensions-buttons-print.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print" class="menu-item">Print</a>
                  </li>
                  <li><a href="dt-extensions-buttons-api.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api" class="menu-item">API</a>
                  </li>
                </ul>
              </li>
              <li><a href="dt-extensions-column-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_column_reorder" class="menu-item">Column Reorder</a>
              </li>
              <li><a href="dt-extensions-fixed-columns.html" data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns" class="menu-item">Fixed Columns</a>
              </li>
              <li><a href="dt-extensions-key-table.html" data-i18n="nav.datatable_extensions.dt_extensions_key_table" class="menu-item">Key Table</a>
              </li>
              <li><a href="dt-extensions-row-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder" class="menu-item">Row Reorder</a>
              </li>
              <li><a href="dt-extensions-select.html" data-i18n="nav.datatable_extensions.dt_extensions_select" class="menu-item">Select</a>
              </li>
              <li><a href="dt-extensions-fix-header.html" data-i18n="nav.datatable_extensions.dt_extensions_fix_header" class="menu-item">Fix Header</a>
              </li>
              <li><a href="dt-extensions-responsive.html" data-i18n="nav.datatable_extensions.dt_extensions_responsive" class="menu-item">Responsive</a>
              </li>
              <li><a href="dt-extensions-column-visibility.html" data-i18n="nav.datatable_extensions.dt_extensions_column_visibility" class="menu-item">Column Visibility</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-table3"></i><span data-i18n="nav.handson_table.main" class="menu-title">Handson Table</span></a>
            <ul class="menu-content">
              <li><a href="handson-table-appearance.html" data-i18n="nav.handson_table.handson_table_appearance" class="menu-item">Appearance</a>
              </li>
              <li><a href="handson-table-rows-columns.html" data-i18n="nav.handson_table.handson_table_rows_columns" class="menu-item">Rows Columns</a>
              </li>
              <li><a href="handson-table-rows-only.html" data-i18n="nav.handson_table.handson_table_rows_only" class="menu-item">Rows Only</a>
              </li>
              <li><a href="handson-table-columns-only.html" data-i18n="nav.handson_table.handson_table_columns_only" class="menu-item">Columns Only</a>
              </li>
              <li><a href="handson-table-data-operations.html" data-i18n="nav.handson_table.handson_table_data_operations" class="menu-item">Data Operations</a>
              </li>
              <li><a href="handson-table-cell-features.html" data-i18n="nav.handson_table.handson_table_cell_features" class="menu-item">Cell Features</a>
              </li>
              <li><a href="handson-table-cell-types.html" data-i18n="nav.handson_table.handson_table_cell_types" class="menu-item">Cell Types</a>
              </li>
              <li><a href="handson-table-integrations.html" data-i18n="nav.handson_table.handson_table_integrations" class="menu-item">Integrations</a>
              </li>
              <li><a href="handson-table-utilities.html" data-i18n="nav.handson_table.handson_table_utilities" class="menu-item">Utilities</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="table-jsgrid.html"><i class="icon-table"></i><span data-i18n="nav.table_jsgrid.main" class="menu-title">jsGrid</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.addons">Add Ons</span><i data-toggle="tooltip" data-placement="right" data-original-title="Add Ons" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-edit2"></i><span data-i18n="nav.editors.main" class="menu-title">Editors</span></a>
            <ul class="menu-content">
              <li><a href="editor-quill.html" data-i18n="nav.editors.editor_quill" class="menu-item">Quill</a>
              </li>
              <li><a href="editor-ckeditor.html" data-i18n="nav.editors.editor_ckeditor" class="menu-item">CKEditor</a>
              </li>
              <li><a href="editor-summernote.html" data-i18n="nav.editors.editor_summernote" class="menu-item">Summernote</a>
              </li>
              <li><a href="editor-tinymce.html" data-i18n="nav.editors.editor_tinymce" class="menu-item">TinyMCE</a>
              </li>
              <li><a href="code-editor-codemirror.html" data-i18n="nav.editors.code_editor_codemirror.main" class="menu-item">Code Editor</a>
                <ul class="menu-content">
                  <li><a href="code-editor-codemirror.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror" class="menu-item">CodeMirror</a>
                  </li>
                  <li><a href="code-editor-ace.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_ace" class="menu-item">Ace</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-calendar5"></i><span data-i18n="nav.pickers.main" class="menu-title">Pickers</span></a>
            <ul class="menu-content">
              <li><a href="pickers-date-&amp;-time-picker.html" data-i18n="nav.pickers.pickers_date_time_picker" class="menu-item">Date &amp; Time Picker</a>
              </li>
              <li><a href="pickers-color-picker.html" data-i18n="nav.pickers.pickers_color_picker" class="menu-item">Color Picker</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-air-play"></i><span data-i18n="nav.jquery_ui.main" class="menu-title">jQuery UI</span></a>
            <ul class="menu-content">
              <li><a href="jquery-ui-interactions.html" data-i18n="nav.jquery_ui.jquery_ui_interactions" class="menu-item">Interactions</a>
              </li>
              <li><a href="jquery-ui-navigations.html" data-i18n="nav.jquery_ui.jquery_ui_navigations" class="menu-item">Navigations</a>
              </li>
              <li><a href="jquery-ui-date-pickers.html" data-i18n="nav.jquery_ui.jquery_ui_date_pickers" class="menu-item">Date Pickers</a>
              </li>
              <li><a href="jquery-ui-autocomplete.html" data-i18n="nav.jquery_ui.jquery_ui_autocomplete" class="menu-item">Autocomplete</a>
              </li>
              <li><a href="jquery-ui-buttons-select.html" data-i18n="nav.jquery_ui.jquery_ui_buttons_select" class="menu-item">Buttons &amp; Select</a>
              </li>
              <li><a href="jquery-ui-slider-spinner.html" data-i18n="nav.jquery_ui.jquery_ui_slider_spinner" class="menu-item">Slider &amp; Spinner</a>
              </li>
              <li><a href="jquery-ui-dialog-tooltip.html" data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip" class="menu-item">Dialog &amp; Tooltip</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="add-on-block-ui.html"><i class="icon-security"></i><span data-i18n="nav.add_on_block_ui.main" class="menu-title">Block UI</span></a>
          </li>
          <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="icon-crop"></i><span data-i18n="nav.add_on_image_cropper.main" class="menu-title">Image Cropper</span></a>
          </li>
          <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="icon-arrow-move"></i><span data-i18n="nav.add_on_drag_drop.main" class="menu-title">Drag &amp; Drop</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-cloud-upload3"></i><span data-i18n="nav.file_uploaders.main" class="menu-title">File Uploader</span></a>
            <ul class="menu-content">
              <li><a href="file-uploader-dropzone.html" data-i18n="nav.file_uploaders.file_uploader_dropzone" class="menu-item">Dropzone</a>
              </li>
              <li><a href="file-uploader-jquery.html" data-i18n="nav.file_uploaders.file_uploader_jquery" class="menu-item">jQuery File Upload</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-calendar4"></i><span data-i18n="nav.event_calendars.main" class="menu-title">Event Calendars</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.event_calendars.full_calender.main" class="menu-item">Full Calendar</a>
                <ul class="menu-content">
                  <li><a href="full-calender-basic.html" data-i18n="nav.event_calendars.full_calender.full_calender_basic" class="menu-item">Basic</a>
                  </li>
                  <li><a href="full-calender-events.html" data-i18n="nav.event_calendars.full_calender.full_calender_events" class="menu-item">Events</a>
                  </li>
                  <li><a href="full-calender-advance.html" data-i18n="nav.event_calendars.full_calender.full_calender_advance" class="menu-item">Advance</a>
                  </li>
                  <li><a href="full-calender-extra.html" data-i18n="nav.event_calendars.full_calender.full_calender_extra" class="menu-item">Extra</a>
                  </li>
                </ul>
              </li>
              <li><a href="calendars-clndr.html" data-i18n="nav.event_calendars.calendars_clndr" class="menu-item">CLNDR</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-table2"></i><span data-i18n="nav.internationalization.main" class="menu-title">Internationalization</span></a>
            <ul class="menu-content">
              <li><a href="i18n-resources.html" data-i18n="nav.internationalization.i18n_resources" class="menu-item">Resources</a>
              </li>
              <li><a href="i18n-xhr-backend.html" data-i18n="nav.internationalization.i18n_xhr_backend" class="menu-item">XHR Backend</a>
              </li>
              <li><a href="i18n-query-string.html" data-i18n="nav.internationalization.i18n_query_string" class="menu-item">Query String</a>
              </li>
              <li><a href="i18n-on-init.html" data-i18n="nav.internationalization.i18n_on_init" class="menu-item">On Init</a>
              </li>
              <li><a href="i18n-after-init.html" data-i18n="nav.internationalization.i18n_after_init" class="menu-item">After Init</a>
              </li>
              <li><a href="i18n-fallback.html" data-i18n="nav.internationalization.i18n_fallback" class="menu-item">Fallback</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i data-toggle="tooltip" data-placement="right" data-original-title="Charts &amp; Maps" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bar-graph-2"></i><span data-i18n="nav.google_charts.main" class="menu-title">google Charts</span></a>
            <ul class="menu-content">
              <li><a href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="google-pie-charts.html" data-i18n="nav.google_charts.google_pie_charts" class="menu-item">Pie charts</a>
              </li>
              <li><a href="google-scatter-charts.html" data-i18n="nav.google_charts.google_scatter_charts" class="menu-item">Scatter charts</a>
              </li>
              <li><a href="google-bubble-charts.html" data-i18n="nav.google_charts.google_bubble_charts" class="menu-item">Bubble charts</a>
              </li>
              <li><a href="google-other-charts.html" data-i18n="nav.google_charts.google_other_charts" class="menu-item">Other charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bubble_chart"></i><span data-i18n="nav.echarts.main" class="menu-title">Echarts</span></a>
            <ul class="menu-content">
              <li><a href="echarts-line-area-charts.html" data-i18n="nav.echarts.echarts_line_area_charts" class="menu-item">Line &amp; Area charts</a>
              </li>
              <li><a href="echarts-bar-column-charts.html" data-i18n="nav.echarts.echarts_bar_column_charts" class="menu-item">Bar &amp; Column charts</a>
              </li>
              <li><a href="echarts-pie-doughnut-charts.html" data-i18n="nav.echarts.echarts_pie_doughnut_charts" class="menu-item">Pie &amp; Doughnut charts</a>
              </li>
              <li><a href="echarts-scatter-charts.html" data-i18n="nav.echarts.echarts_scatter_charts" class="menu-item">Scatter charts</a>
              </li>
              <li><a href="echarts-radar-chord-charts.html" data-i18n="nav.echarts.echarts_radar_chord_charts" class="menu-item">Radar &amp; Chord charts</a>
              </li>
              <li><a href="echarts-funnel-gauges-charts.html" data-i18n="nav.echarts.echarts_funnel_gauges_charts" class="menu-item">Funnel &amp; Gauges charts</a>
              </li>
              <li><a href="echarts-combination-charts.html" data-i18n="nav.echarts.echarts_combination_charts" class="menu-item">Combination charts</a>
              </li>
              <li><a href="echarts-advance-charts.html" data-i18n="nav.echarts.echarts_advance_charts" class="menu-item">Advance charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span data-i18n="nav.chartjs.main" class="menu-title">Chartjs</span></a>
            <ul class="menu-content">
              <li><a href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts" class="menu-item">Pie &amp; Doughnut charts</a>
              </li>
              <li><a href="chartjs-scatter-charts.html" data-i18n="nav.chartjs.chartjs_scatter_charts" class="menu-item">Scatter charts</a>
              </li>
              <li><a href="chartjs-polar-radar-charts.html" data-i18n="nav.chartjs.chartjs_polar_radar_charts" class="menu-item">Polar &amp; Radar charts</a>
              </li>
              <li><a href="chartjs-advance-charts.html" data-i18n="nav.chartjs.chartjs_advance_charts" class="menu-item">Advance charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-bars2"></i><span data-i18n="nav.d3_charts.main" class="menu-title">D3 Charts</span></a>
            <ul class="menu-content">
              <li><a href="d3-line-chart.html" data-i18n="nav.d3_charts.d3_line_chart" class="menu-item">Line Chart</a>
              </li>
              <li><a href="d3-bar-chart.html" data-i18n="nav.d3_charts.d3_bar_chart" class="menu-item">Bar Chart</a>
              </li>
              <li><a href="d3-pie-chart.html" data-i18n="nav.d3_charts.d3_pie_chart" class="menu-item">Pie Chart</a>
              </li>
              <li><a href="d3-circle-diagrams.html" data-i18n="nav.d3_charts.d3_circle_diagrams" class="menu-item">Circle Diagrams</a>
              </li>
              <li><a href="d3-tree-chart.html" data-i18n="nav.d3_charts.d3_tree_chart" class="menu-item">Tree Chart</a>
              </li>
              <li><a href="d3-other-charts.html" data-i18n="nav.d3_charts.d3_other_charts" class="menu-item">Other Charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-arrow-graph-up-right"></i><span data-i18n="nav.c3_charts.main" class="menu-title">C3 Charts</span></a>
            <ul class="menu-content">
              <li><a href="c3-line-chart.html" data-i18n="nav.c3_charts.c3_line_chart" class="menu-item">Line Chart</a>
              </li>
              <li><a href="c3-bar-pie-chart.html" data-i18n="nav.c3_charts.c3_bar_pie_chart" class="menu-item">Bar &amp; Pie Chart</a>
              </li>
              <li><a href="c3-axis-chart.html" data-i18n="nav.c3_charts.c3_axis_chart" class="menu-item">Axis Chart</a>
              </li>
              <li><a href="c3-data-chart.html" data-i18n="nav.c3_charts.c3_data_chart" class="menu-item">Data Chart</a>
              </li>
              <li><a href="c3-grid-chart.html" data-i18n="nav.c3_charts.c3_grid_chart" class="menu-item">Grid Chart</a>
              </li>
              <li><a href="c3-transform-chart.html" data-i18n="nav.c3_charts.c3_transform_chart" class="menu-item">Transform Chart</a>
              </li>
              <li><a href="c3-other-charts.html" data-i18n="nav.c3_charts.c3_other_charts" class="menu-item">Other Charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-bars"></i><span data-i18n="nav.chartist.main" class="menu-title">Chartist</span></a>
            <ul class="menu-content">
              <li><a href="chartist-line-charts.html" data-i18n="nav.chartist.chartist_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="chartist-bar-charts.html" data-i18n="nav.chartist.chartist_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="chartist-pie-charts.html" data-i18n="nav.chartist.chartist_pie_charts" class="menu-item">Pie charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-timeline"></i><span data-i18n="nav.dimple_charts.main" class="menu-title">Dimple Charts</span></a>
            <ul class="menu-content">
              <li><a href="dimple-line-area-chart.html" data-i18n="nav.dimple_charts.dimple_line_area_chart" class="menu-item">Line &amp; Area Chart</a>
              </li>
              <li><a href="dimple-bar-column-chart.html" data-i18n="nav.dimple_charts.dimple_bar_column_chart" class="menu-item">Bar &amp; Column Chart</a>
              </li>
              <li><a href="dimple-pie-ring-chart.html" data-i18n="nav.dimple_charts.dimple_pie_ring_chart" class="menu-item">Pie &amp; Ring Chart</a>
              </li>
              <li><a href="dimple-step-chart.html" data-i18n="nav.dimple_charts.dimple_step_chart" class="menu-item">Step Chart</a>
              </li>
              <li><a href="dimple-scatter-chart.html" data-i18n="nav.dimple_charts.dimple_scatter_chart" class="menu-item">Scatter Chart</a>
              </li>
              <li><a href="dimple-bubble-chart.html" data-i18n="nav.dimple_charts.dimple_bubble_chart" class="menu-item">Bubble Chart</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="morris-charts.html"><i class="icon-graphic_eq"></i><span data-i18n="nav.morris_charts.main" class="menu-title">Morris Charts</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-pie-graph2"></i><span data-i18n="nav.flot_charts.main" class="menu-title">Flot Charts</span></a>
            <ul class="menu-content">
              <li><a href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts" class="menu-item">Pie charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="rickshaw-charts.html"><i class="icon-grain"></i><span data-i18n="nav.rickshaw_charts.main" class="menu-title">Rickshaw Charts</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-map22"></i><span data-i18n="nav.maps.main" class="menu-title">Maps</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.maps.google_maps.main" class="menu-item">google Maps</a>
                <ul class="menu-content">
                  <li><a href="gmaps-basic-maps.html" data-i18n="nav.maps.google_maps.gmaps_basic_maps" class="menu-item">Maps</a>
                  </li>
                  <li><a href="gmaps-services.html" data-i18n="nav.maps.google_maps.gmaps_services" class="menu-item">Services</a>
                  </li>
                  <li><a href="gmaps-overlays.html" data-i18n="nav.maps.google_maps.gmaps_overlays" class="menu-item">Overlays</a>
                  </li>
                  <li><a href="gmaps-routes.html" data-i18n="nav.maps.google_maps.gmaps_routes" class="menu-item">Routes</a>
                  </li>
                  <li><a href="gmaps-static-maps.html" data-i18n="nav.maps.google_maps.gmaps_static_maps" class="menu-item">Static Maps</a>
                  </li>
                  <li><a href="gmaps-utils.html" data-i18n="nav.maps.google_maps.gmaps_utils" class="menu-item">Utils</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" data-i18n="nav.maps.vector_maps.main" class="menu-item">Vector Maps</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main" class="menu-item">jQuery Mapael</a>
                    <ul class="menu-content">
                      <li><a href="vector-maps-mapael-basic.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic" class="menu-item">Basic Maps</a>
                      </li>
                      <li><a href="vector-maps-mapael-advance.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance" class="menu-item">Advance Maps</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="vector-maps-jvector.html" data-i18n="nav.maps.vector_maps.jvector_maps" class="menu-item">jVector Map</a>
                  </li>
                  <li><a href="vector-maps-jvq.html" data-i18n="nav.maps.vector_maps.vector_maps_jvq" class="menu-item">JQV Map</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="http://demo.pixinvent.com/robust-admin/documentation"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
          </li>
        @endif
        </ul>
      </div>
      <!-- /main menu content-->


      @if(0)
      <!-- main menu footer-->
      <div class="main-menu-footer footer-close">
        <div class="header text-xs-center"><a href="#" class="col-xs-12 footer-toggle"><i class="icon-ios-arrow-up"></i></a></div>
        <div class="content">
          <div class="insights">
            <div class="col-xs-12">
              <p>Product Delivery</p>
              <progress value="25" max="100" class="progress progress-xs progress-success">25%</progress>
            </div>
            <div class="col-xs-12">
              <p>Targeted Sales</p>
              <progress value="70" max="100" class="progress progress-xs progress-info">70%</progress>
            </div>
          </div>
          <div class="actions"><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Settings"><span aria-hidden="true" class="icon-cog3"></span></a><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock"><span aria-hidden="true" class="icon-lock4"></span></a><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout"><span aria-hidden="true" class="icon-power3"></span></a></div>
        </div>
      </div>
      @endif
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

