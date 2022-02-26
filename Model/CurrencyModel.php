<?php 
class CurrencyModel
{
    private $Name;
    private $Symbol;
    private $Rate;
    private $ShortName;
    private $Country;
    
    public function store($data)
    {
        $this->Name     = $data['Name'];
        $this->Symbol   = $data['Symbol'];
        $this->Rate     = $data['Rate'];
        $this->ShortName= $data['ShortName'];
        $this->Country  = $data['Country'];

        $DB = new Db();
        $Query = "INSERT INTO Currency(Name , Symbol, Rate, ShortName , Country )";
        $Query .=" VALUES('$this->Name','$this->Symbol',$this->Rate,'$this->ShortName','$this->Country')";

        try {
            $DB->execute($Query);
        } catch (Exception $error) {
            $error->getMessage();
        }
        $DB->close();
    }

    public function update($id,$data)
    {

        $this->Name     = $data['Name'];
        $this->Symbol   = $data['Symbol'];
        $this->Rate     = $data['Rate'];
        $this->ShortName= $data['ShortName'];
        $this->Country  = $data['Country'];

        $DB = new Db();

       $Query ="UPDATE Currency SET  
       Name     ='$this->Name',
       Symbol   ='$this->Symbol',
       Rate     =$this->Rate,
       ShortName='$this->ShortName',
       Country  ='$this->Country' 
       WHERE id=$id ";

        try {
            $DB->execute($Query);
        } catch (Exception $error) {
            $error->getMessage();
        }
    }
    public function delete()
    {

    }
    public function distory($id)
    {

    }
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