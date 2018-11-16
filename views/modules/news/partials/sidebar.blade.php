<div class=" realfactory-sidebar-right realfactory-column-20 realfactory-line-height realfactory-line-height">
    <div class="realfactory-sidebar-area realfactory-item-pdlr">
        @newsCategories('sidebar.categories')
        @newsLatestPosts(5, 'sidebar.latest')
        @if(isset($posts))
            @newsTags($posts, 10, 'sidebar.tags')
        @elseif(isset($post))
            @newsTags($post, 10, 'sidebar.tags')
        @endif
    </div>
</div>