<?php

class ControllerUpdateCompany
{
    private $CompanyManager;
    private $Company;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 2) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->companies($url);
    }
    private function companies($url)
    {
        $this->CompanyManager = new CompanyManager();
        $this->Company = new Company($_POST[]);
        $companies = $this->CompanyManager->UpdateCompany($url[1],$Company);
        
        header('Location: TestManageFirm');
    }

}

?>