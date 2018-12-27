@if(isset($page->parent) && ($page->parent->settings->show_menu ?? false) && !($page->settings->full_page ?? false))
    @include('page::partials.menu')
@elseif($page && ($page->settings->list_page ?? false))
    @include('page::partials.list')
@elseif($page && !($page->settings->list_page ?? false) && !($page->parent->settings->show_menu ?? false))
    @include('page::partials.image')
@endif