<div class="navbar-left">
    <ul class="menubar">
    @php
    $i=0;
    @endphp
        @foreach ($menu->items as $menuItem)   
            @if($i <= 3)
            <li class="menu-item {{ $menu->getActive($menuItem) }}">
                <a href="{{ count($menuItem['children']) ? current($menuItem['children'])['url'] : $menuItem['url'] }}">
                    <span class="icon {{ $menuItem['icon-class'] }}"></span>
                    
                    <span>{{ trans($menuItem['name']) }}</span>
                </a>
            </li>
            @endif
            @php
                $i++;
            @endphp
        @endforeach

    </ul>
</div>