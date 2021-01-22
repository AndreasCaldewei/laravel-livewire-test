<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class CompanyList extends Component
{

    public $companies = [];

    function __construct() {
        $this->get_companies();
    }

    public function get_companies() {
        $this->companies = Company::all();
    }

    public function create_company() {
        $company = new Company();
        $company->name = "Hello World";
        $company->save();
        $this->get_companies();
    }

    public function render()
    {
        return view('livewire.company-list', [
            'companies' => $this->companies
        ]);
    }

}
