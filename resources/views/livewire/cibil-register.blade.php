<div>
    <form wire:submit.prevent="register" class="flex justify-center flex-col" >
     <<input class="form-control" type="hidden" value= "UXW32CFZ84061BN31SB8T46Q57K0OJY9ICD9APG25HMRLD7EAV" wire:model='api_key'>
      <<input class="form-control" type="hidden" value= "UXW32CFZ84061BN31SB8T46Q57K0OJY9ICD9APG25HMRLD7EAV" wire:model='client_order_id'>
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    setp 1/4 -personal detail
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input id="" class="form-control" type="text" name=""
                                    placeholder="Enter first name" wire:model="first_name" value ="sangeeta">
                                <span class="text-danger">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Middle Name</label>
                                <input id="" class="form-control" type="text" name=""
                                    placeholder="Enter Middle name" wire:model="middle_name" value= "">
                                <span class="text-danger">
                                    @error('middle_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input id="" class="form-control" type="text" name=""
                                    placeholder="Enter Last name" wire:model="last_name" value = "Chauhan">
                                <span class="text-danger">
                                    @error('last_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Pancard</label>
                                <input id="my-input" class="form-control" type="text" name=""
                                    placeholder="enter age" wire:model="pancard" value= "BHRPC0515R">
                                <span class="text-danger">
                                    @error('pancard')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Date Of Birth</label>
                                <input type="date"
                                    class="form-control bg-gray-100 border-gray-300 text-gray-600 py-2 px-4 rounded-md"
                                    placeholder="Date of Birth" wire:model="dateofbirth" value= "20-08-1995" />

                                <span class="text-danger">
                                    @error('dateofbirth')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Email</label>
                                <input id="my-input" class="form-control" type="text" name=""
                                    placeholder="enter age" wire:model="email" value = "sangeeta.chauhan589@gmail.com">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Mobile Number</label>
                                <input id="my-input" class="form-control" type="text" name=""
                                    placeholder="enter age" wire:model="mobileNumber" value = "8427168733">
                                <span class="text-danger">
                                    @error('mobileNumber')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit">Register User</button>
    <form>

</div>
