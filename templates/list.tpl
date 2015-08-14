{foreach $data as $keyvar=>$itemvar}
    <article>
        <header>
            <aside>
                <p>Дата: {$itemvar["dt"]}</p>
            </aside>
            <h1>{$itemvar["title"]}</h1>
        </header>
        <p>{$itemvar["body"]}</p>
        <a class="links" href="http://localhost/news/index.php?action=edit&id={$itemvar["id"]}">Редагувати</a>
        <a class="links" href="#delete-{$itemvar["id"]}">Видалити </a>


        <a href="#x-{$itemvar["id"]}" class="overlay" id="delete-{$itemvar["id"]}"></a>
        <div class="popup">
            <div id = "deleteMessage">
                Ви,справді хочете видалити цей запис?
                <div id = title_delete_note>
                    "{$itemvar["title"]}"
                </div>
            </div>
            <a class="close"title="Закрыть" href="http://localhost/news/"></a>
            <a href="http://localhost/news/index.php?action=delete&id={$itemvar["id"]}" id="deleteButton">Так, я впевнений у своїх діях</a>
        </div>
    </article>
{/foreach}