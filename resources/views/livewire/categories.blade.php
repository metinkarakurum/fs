<div>
  <nav class="navigation">

    <ul class="mainmenu">

        @foreach($categories as $category)
        <li><a href="{{"?category=".$category->id}}" wire:click="places">{{$category->pluralName}}</a>
            @if(count($category->categories)>0)
            <ul class="submenu">
                @foreach($category->categories as $subCategory)
                <li><a href="{{"?category=".$subCategory->id}}">{{$subCategory->pluralName}}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach

    </ul>
  </nav>
</div>
