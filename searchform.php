<?php
/**
 * Searchform Tempalate
 * Author : Mohamed
 */
?>
<form action="/" method="get" class="search-form">
    <input  class="search-input" type="text" name="s" id="search" placeholder="بحث" value="<?php the_search_query(); ?>" />
    <button class="search-button" type="submit"><i class="bx bx-search"></i></button>

</form>