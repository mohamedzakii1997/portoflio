<?php
function is_valied(string $name){

return null !== request()->segment(1) && request()->segment(1) == $name ? 'active' : '';

}