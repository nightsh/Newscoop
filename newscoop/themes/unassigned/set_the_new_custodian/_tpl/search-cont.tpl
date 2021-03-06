<h1>Search results</h1>

{{ list_search_results length="5" order="bypublishdate desc" }}

                    <section class="art-item clearfix">
                <header>
                      <h3><a href="{{ uri options="article" }}">{{ $gimme->article->name }}</a></h3>
                        <p><span class="right">{{ include file="_tpl/article-icons.tpl" }}</span>Published on <time datetime="{{$gimme->article->publish_date|date_format:"%Y-%m-%dT%H:%MZ"}}">{{ $gimme->article->publish_date|camp_date_format:"%M %d, %Y" }}</time> by {{ list_article_authors }}{{ if $gimme->author->user->defined }}<a href="{{ $view->url(['username' => $gimme->author->user->uname], 'user') }}">{{ /if }}{{ $gimme->author->name }}{{ if $gimme->author->user->defined }}</a>{{ /if }} ({{ $gimme->author->type|lower }}){{ if !$gimme->current_list->at_end }}, {{ /if }}{{ /list_article_authors }}</p>
                </header>
                {{ include file="_tpl/img/img_250x167.tpl" where="section" }}
                <p>{{ include file="_tpl/_edit-article.tpl" }}{{ $gimme->article->deck }}</p>
            </section><!-- /.art-item -->

{{ if $gimme->current_list->at_end }}            

{{* PAGINATION *}}
{{ $pages=ceil($gimme->current_list->count/5) }}
{{ $curpage=intval($gimme->url->get_parameter($gimme->current_list_id())) }}
{{ if $pages gt 1 }}
<ul class="pagination">
    {{ if $gimme->current_list->has_previous_elements }}<li class="prev"><a href="{{ url options="template search.tpl previous_items" }}">Previous</a></li>{{ /if }}
    {{ for $i=0 to $pages - 1 }}
        {{ $curlistid=$i*5 }}
        {{ $gimme->url->set_parameter($gimme->current_list_id(),$curlistid) }}
        {{ if $curlistid != $curpage }}
    <li><a href="{{ uripath options="section" }}?{{ urlparameters }}">{{ $i+1 }}</a></li>
        {{ else }}
    <li class="selected"><a href="{{ url options="template search.tpl" }}">{{ $i+1 }}</a></li>
        {{ $remi=$i+1 }}
        {{ /if }}
    {{ /for }}
    {{ if $gimme->current_list->has_next_elements }}<li class="next"><a href="{{ url options="template search.tpl next_items" }}">Next</a></li>{{ /if }}
</ul>
{{ $gimme->url->set_parameter($gimme->current_list_id(),$curpage) }}
{{ /if }}

{{ /if }}                 
{{ /list_search_results }} 

{{ if $gimme->prev_list_empty }}
  <p>No search results found for your query.</p>
{{ /if }}    
