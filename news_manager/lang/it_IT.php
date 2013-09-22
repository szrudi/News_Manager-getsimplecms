<?php

/**
 * News Manager Italian language file by Gianpaolo Brusini
 */


$i18n = array(

# general
"PLUGIN_NAME"         =>  "News Manager",

# error messages
"ERROR_ENV"           =>  "Si &egrave; verificato un errore nell'accedere alle cartelle di dati. Imposta <em>CHMOD 777</em> nelle cartelle /data, /backups e loro sotto-cartelle e riprova.",
"ERROR_SAVE"          =>  "<b>Errore:</b> Impossibile salvare i cambiamenti. Imposta <em>CHMOD 777</em> nelle cartelle /data, /backups e loro sotto-cartelle e riprova.",
"ERROR_DELETE"        =>  "<b>Error:</b> Impossibile cancellare il post. Imposta <em>CHMOD 777</em> nelle cartelle /data, /backups e loro sotto-cartelle e riprova.",
"ERROR_RESTORE"       =>  "<b>Error:</b> Impossibile recuperare il post. Imposta <em>CHMOD 777</em> nelle cartelle /data, /backups e loro sotto-cartelle e riprova.",

# success messages
"SUCCESS_SAVE"        =>  "I cambiamenti sono stati salvati.",
"SUCCESS_DELETE"      =>  "Il post &egrave; stato cancellato.",
"SUCCESS_RESTORE"     =>  "Il post &egrave; stato recuperato.",

# other messages
"UPDATE_HTACCESS"     =>  "<b>Nota:</b> Probabilmente dovete aggiornare il vostro file <a href=\"load.php?id=news_manager&amp;htaccess\">.htaccess</a>!",

# admin button (top-right)
"SETTINGS"            =>  "Impostazioni",
"NEW_POST"            =>  "Crea un nuovo Post",

# admin panel
"POST_TITLE"          =>  "Titolo del Post",
"DATE"                =>  "Data",
"EDIT_POST"           =>  "Modifica Post",
"VIEW_POST"           =>  "Visualizza Post",
"DELETE_POST"         =>  "Elimina Post",
"POSTS"               =>  "post(s)",

# edit settings
"NM_SETTINGS"         =>  "Impostazioni News Manager",
"DOCUMENTATION"       =>  "Per maggiori informazioni su queste impostazioni, visita la <a href=\"http://www.cyberiada.org/cnb/news-manager/\" target=\"_blank\">pagina di documentazione</a>.",
"PAGE_URL"            =>  "Pagina in cui visualizzare i posts",
"LANGUAGE"            =>  "Lingua utilizzata nella pagina di News",
"SHOW_POSTS_AS"       =>  "Nella pagina di News i Post sono visualizzati come",
"FULL_TEXT"           =>  "Testo Completo",
"EXCERPT"             =>  "Estratto",
"PRETTY_URLS"         =>  "Usa Fancy URLs per i post, gli archivi, ecc.",
"PRETTY_URLS_NOTE"    =>  "Se hai Fancy URLs abilitato, potresti aver bisogno di aggiornare il tuo file .htaccess file dopo aver salvato queste impostazioni.",
"EXCERPT_LENGTH"      =>  "Lunghezza dell'estratto (caratteri)",
"POSTS_PER_PAGE"      =>  "Numero di Post nella pagina di News",
"RECENT_POSTS"        =>  "Numer di Post recenti (nella sidebar)",
"ARCHIVES_BY"         =>  "Archives by",
"MONTH"               =>  "Month",
"YEAR"                =>  "Year",
"READ_MORE_LINK"      =>  "\"Read more\" link after excerpt",
"ALWAYS"              =>  "Always",
"NOT_SINGLE"          =>  "Except for single posts",
"GO_BACK_LINK"        =>  "\"Go back\" link under single post",
"TITLE_LINK"          =>  "Link to post in title",
"BROWSER_BACK"        =>  "Previously visited page",
"MAIN_NEWS_PAGE"      =>  "Main News Page",
"POST_IMAGES"         =>  "Post images",
"IMAGE_LINKS"         =>  "Link images to posts",
"IMAGE_WIDTH"         =>  "Post image width (pixels)",
"IMAGE_HEIGHT"        =>  "Post image height (pixels)",
"IMAGE_CROP"          =>  "Crop post images to fit dimensions",
"IMAGE_ALT"           =>  "Insert post title in post image <em>alt</em> attribute",

# edit post
"POST_OPTIONS"        =>  "Opzioni per i Post",
"POST_SLUG"           =>  "Slug/URL",
"POST_TAGS"           =>  "Tags (separa le varie tags con virgole)",
"POST_DATE"           =>  "Data di pubblicazione (<i>aaaa-mm-gg</i>)",
"POST_TIME"           =>  "Ora di pubblicazione (<i>hh:mm</i>)",
"POST_PRIVATE"        =>  "Il Post &egrave; privato",
"POST_IMAGE"          =>  "Immagine",
"LAST_SAVED"          =>  "Ultimo salvataggio",

# validation
"FIELD_IS_REQUIRED"   => "Questo campo &egrave; richiesto",
"ENTER_VALID_DATE"    => "Si prega di inserire una data valida / Lasciare vuoto per la data corrente",
"ENTER_VALID_TIME"    => "Si prega di inserire un'orario valido / Lasciare vuoto per l'orario corrente",

# htaccess
"HTACCESS_HELP"       =>  "Per abilitare i Fancy URLs per posts, archivi, ecc., sostituisci il contenuto del tuo file <code>.htaccess</code> file con le seguenti linee.",
"GO_BACK_WHEN_DONE"   =>  "Quando hai finito con questa pagina, fai clic sul bottone qua sotto per tornare al pannello principale.",

# save/cancel/delete
"SAVE_SETTINGS"       =>  "Salva Impostazioni",
"SAVE_POST"           =>  "Salva il Post",
"FINISHED"            =>  "Finito",
"CANCEL"              =>  "Annulla",
"DELETE"              =>  "Elimina",
"OR"                  =>  "oppure",

# front-end/site
"FOUND"               =>  "Sono stati trovati i seguenti post:",
"NOT_FOUND"           =>  "Spiacente, la ricerca non ha prodotto risultati.",
"NOT_EXIST"           =>  "Il post richiesto non esiste.",
"NO_POSTS"            =>  "Non si sono trovati post.",
"PUBLISHED"           =>  "Pubblicato il",
"TAGS"                =>  "Tags",
"OLDER_POSTS"         =>  "&larr; Post pi&ugrave; vecchi",
"NEWER_POSTS"         =>  "Post pi&ugrave; recenti &rarr;",
"SEARCH"              =>  "Cerca",
"GO_BACK"             =>  "&lt;&lt; Torna alla pagina precedente",
"ELLIPSIS"            =>  " [...] ",
"READ_MORE"            =>  "Leggi tutto",

# language localization
"LOCALE"              =>  "it_IT.utf8,it.utf8,it_IT.UTF-8,it.UTF-8,it_IT,it",

# date settings
"DATE_FORMAT"         =>  "%e %b, %Y"

);

?>