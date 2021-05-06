<?php


class SortName
{
    private $alphabet = ['а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'є', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ь', 'ю', 'я'];
    private $names = [];

    public function __construct()
    {
        if (!empty($_POST['name'])){
            $this->names = explode(', ', $_POST['name']);
        }
    }

    public function sort()
    {
        $order = array_flip($this->alphabet);
        usort($this->names, function ($a, $b) use ($order){
            $val1 = $order[mb_strtolower(mb_substr($a, 0, 1))];
            $val2 = $order[mb_strtolower(mb_substr($b, 0, 1))];
            return $val1 > $val2 ? 1 : -1;
        });

        echo (implode(', ', $this->names));
    }

    public function sortLocate()
    {
        $currentLocale = setlocale(LC_ALL, 0);
        setlocale(LC_ALL,'ua_Ua.utf8');
        sort($this->names, SORT_LOCALE_STRING);
        setlocale(LC_ALL, $currentLocale);
        echo (implode(', ', $this->names));
    }
}