@php
$configData = Helper::appClasses();
$user = auth()->user();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <!-- ! Hide app brand if navbar-full -->
  @if(!isset($navbarFull))
  <div class="app-brand demo">
    <a href="{{route('user_admin')}}" class="app-brand-link">

      <span class="app-brand-text demo menu-text fw-bold">Bank Menu</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>
  @endif

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    @foreach ($menuData[0]->menu as $menu)
      {{-- Check if the menu item should be displayed based on user permissions --}}
      @if (
          (!isset($menu->permission) || ($menu->permission == 'admin' && $user->role == 1)) ||
          ($menu->permission == 'user' && $user->role == 0)
      )
        {{-- adding active and open class if child is active --}}
        {{-- menu headers --}}
        @if (isset($menu->menuHeader))
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{ $menu->menuHeader }}</span>
          </li>
        @else
          {{-- active menu method --}}
          @php
          $activeClass = null;
          $currentRouteName = Route::currentRouteName();

          if ($currentRouteName === $menu->slug) {
            $activeClass = 'active';
          } elseif (isset($menu->submenu)) {
            if (gettype($menu->slug) === 'array') {
              foreach($menu->slug as $slug){
                if (str_contains($currentRouteName,$slug) && strpos($currentRouteName,$slug) === 0) {
                  $activeClass = 'active open';
                }
              }
            } else {
              if (str_contains($currentRouteName,$menu->slug) && strpos($currentRouteName,$menu->slug) === 0) {
                $activeClass = 'active open';
              }
            }
          }
          @endphp

          {{-- main menu --}}
          <li class="menu-item {{$activeClass}}">
            <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}" class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}" @if (isset($menu->target) && !empty($menu->target)) target="_blank" @endif>
              @isset($menu->icon)
              <i class="{{ $menu->icon }}"></i>
              @endisset
              <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
              @isset($menu->badge)
              <div class="badge bg-label-{{ $menu->badge[0] }} rounded-pill ms-auto">{{ $menu->badge[1] }}</div>
              @endisset
            </a>
            {{-- submenu --}}
            @isset($menu->submenu)
            @include('layouts.sections.menu.submenu',['menu' => $menu->submenu])
            @endisset
          </li>
        @endif
      @endif
    @endforeach
  </ul>
</aside>
