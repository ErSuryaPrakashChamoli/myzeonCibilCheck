<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterUser extends Component
{

    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $gender;
    public $age;
    public $description;
    public $email;
    public $phone;
    public $registance;
    public $city;
    public $frameworks = [];
    public $cv;
    public $terms;

    public $middle_name;
    public $pancard;
    public $dateofbirth;
    public $mobileNumber;


    public $totalSteps     = 4;
    public $currentSteps   = 1;

    public function mount()
    {
        $this->currentSteps = 1;
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteps--;
        if ($this->currentSteps < 1) {
            $this->currentSteps = $this->totalSteps;
        }
    }

    public function increaseValue()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteps++;
        if ($this->currentSteps > $this->totalSteps) {
            $this->currentSteps = $this->totalSteps;
            $this->currentSteps = 1;
        }
    }

    public function cibiRegister()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteps++;
        if ($this->currentSteps > $this->totalSteps) {
            $this->currentSteps = $this->totalSteps;
            $this->currentSteps = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentSteps == 1) {

            $this->validate([
                'first_name' => 'required|string',
                'last_name'  => 'required|string',
                'middle_name' => 'nullable',
                'pancard'    => 'required',
                'dateofbirth' => 'required',
                'email'        => 'required',
                'mobileNumber' => 'required'
            ]);
        } elseif ($this->currentSteps == 2) {
            $this->validate([
                'email'      => 'required|email|unique:students',
                'phone'      => 'required',
                'registance' => 'required',
                'city'       => 'required'

            ]);
        } elseif ($this->currentSteps == 3) {
            $this->validate([
                // 'frameworks' => 'required|array|min:2|max:4'
                'frameworks' => 'required'
            ]);
        }
    }

    public function register()
    {

        $url = 'https://example.com/post-data.php';
         
        if($currentSteps==1){
            $data = [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
            ];
        }

        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ];

        // Initialize cURL.
        $ch = curl_init($url);

        // Set the POST options.
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        // Execute the request.
        $response = curl_exec($ch);

        // Close the cURL handle.
        curl_close($ch);
        // Check the response.
        if ($response === false) {
            echo 'cURL error: ' . curl_error($ch);
        } else {
            echo $response;
        }
    }



    public function render()
    {
        return view('livewire.register-user');
    }
}
