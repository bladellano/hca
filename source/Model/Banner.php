<?php

namespace Source\Model;

use \Source\DB\Sql;
use \Source\Model;


class Banner extends Model
{

    public static function lisAll()
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM banners ORDER BY id DESC LIMIT 6");
    }

    public function getWithSlug($slug)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM banners WHERE slug = :slug", ['slug' => $slug]);
        $this->setData($results[0]);
    }

}
