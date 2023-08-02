<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CibilRegister extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $mobileNumber;
    public $middle_name;
    public $pancard;
    public $dateofbirth;
    public $api;
    public $client_order_id ;
    public $data;

  
    public function mount(){

        $data= [
            "Api_key" => "UXW32CFZ84061BN31SB8T46Q57K0OJY9ICD9APG25HMRLD7EAV",
            "client_order_id "=> "441234",
            "firstname" => "sangeeta",
            "lastname"  => "Chauhan",
            "middle_name" => "",
            "pancard"   => "BHRPC0515R",
            "dateofbirth" => "20-08-1995",
            "email"     => "sangeeta.chauhan589@gmail.com",
            "phone"     => "8427168733"
        ];

    }

   public function register(){
       
    $api = "UXW32CFZ84061BN31SB8T46Q57K0OJY9ICD9APG25HMRLD7EAV";
    $client_order_id = "441234";
    $firstname = $this->first_name;
    $lastname  = $this->last_name;
    $middle_name = $this->middle_name;
    $pancard   = $this->pancard;
    $dateofbirth = $this->dateofbirth;
    $email     = $this->email;
    $phone     = $this->mobileNumber;
    $api       =  "UXW32CFZ84061BN31SB8T46Q57K0OJY9ICD9APG25HMRLD7EAV";
    $client_order_id = "441234";
 

    // $response = Http::get('https://api.softpayapi.com/api/soft_cibil_score/register?Api_key=UXW32CFZ84061BN31SB8T46Q57K0OJY9ICD9APG25HMRLD7EAV&client_order_id=441234&
    // first_name=sangeeta&middle_name=&last_name=Chauhan&pancard=BHRPC0515R&date_of_birth=20-08-1995&email_id=sangeeta.chauhan589@gmail.com&mobile_number=8427168733');

    $response = Http::get('https://api.softpayapi.com/api/soft_cibil_score/register?',$this->data);

    dd($response);





    
   }

    public function render()
    {
        return view('livewire.cibil-register');
    }
}
