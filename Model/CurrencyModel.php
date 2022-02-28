<?php 
class CurrencyModel
{

    public function getAll()
    {
        $DB = new Db();
        $Query = "SELECT *FROM Currency ";
        $result = $DB->fetch_result($Query);
        $DB->close();
        return $result;
    }
    public function show($id)
    {
        $DB = new Db();

        $Query = "SELECT * FROM Currency WHERE id = $id";
        $result = $DB->fetch_result($Query);
        $DB->close();
        return $result;
    }

}
?>