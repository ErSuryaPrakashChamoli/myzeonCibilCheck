<div class ="bg-red-100">
    {{-- 
       <h1 class="text-3xl font-bold underline"> Register your self</h1> --}}

    <form wire:submit.prevent="register" class="flex justify-center flex-col">

        @if ($currentSteps == 1)
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
                                        placeholder="Enter first name" wire:model="first_name">
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
                                        placeholder="Enter Middle name" wire:model="middle_name">
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
                                        placeholder="Enter Last name" wire:model="last_name">
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
                                        placeholder="enter age" wire:model="age">
                                    <span class="text-danger">
                                        @error('age')
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
                                        placeholder="Date of Birth" />

                                    <span class="text-danger">
                                        @error('age')
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
                                        placeholder="enter age" wire:model="age">
                                    <span class="text-danger">
                                        @error('age')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Mobile Number</label>
                                    <input id="my-input" class="form-control" type="text" name=""
                                        placeholder="enter age" wire:model="age">
                                    <span class="text-danger">
                                        @error('age')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        @endif

        <!-- step 2 -->

        @if ($currentSteps == 2)
            <div class="step-2">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 2/4 - Address & Contacts</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="my-input">Email Address</label>
                                    <input id="my-input" class="form-control" type="text" name=""
                                        placeholder="Enter Email Address" wire:model="email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="my-input">Phone</label>
                                    <input id="my-input" class="form-control" type="text" name=""
                                        placeholder="Enter Phone Number" wire:model="phone">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="my-input">country of registance</label>
                                    <select class="form-group" wire:model="registance">
                                        <option value="" selected>Select Country</option>
                                        <option value="United State">United State</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="London">London</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('registance')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input id="my-input" class="form-control" type="text" name=""
                                        placeholder="Enter your city" wire:model="city">
                                    <span class="text-danger">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- step 3 -->

        @if ($currentSteps == 3)
            <div class="step-three">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 3/4 -framworks experience</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores earum, et fuga laboriosam
                        officiis velit enim nihil magnam similique ratione inventore eligendi cupiditate iure voluptates
                        ex blanditiis vel. Labore, enim?

                        <div class="framworks d-flex flex-column align-items-left mt-2">
                            <label for="laravel">
                                <input type="checkbox" name="frameworks[]" id="laravel"
                                    wire:model="frameworks">Laravel
                            </label>

                            <label for="cogniter"><input type="checkbox" name="frameworks[]" id="Cogniter"
                                    wire:model="frameworks">Cogniter</label>

                            <label for="vuejs">
                                <input type="checkbox" name="frameworks[]" id="vuejs"
                                    wire:model="frameworks">vuejs
                            </label>

                            <label for="cakephp">
                                <input type="checkbox" name="frameworks[]" id="CakePhp"
                                    wire:model="frameworks">Cake Php
                            </label>

                        </div>
                        <span class="text-danger">
                            @error('frameworks')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                </div>
            </div>
        @endif


        <!-- step 4 -->
        @if ($currentSteps == 4)
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Step 4/4 - Attachemente</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consectetur sapiente
                        doloremque, neque quo fugit eius accusamus blanditiis quae, dolore excepturi eum quam esse
                        eveniet illo voluptatibus voluptatum. Tempore, quos?
                        <div class="form-group">
                            <label for="CV">CV</label>
                            <input id="my-input" class="form-control" type="file" name=""
                                wire:model="cv">
                            <span class="text-danger">
                                @error('file')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <label for="terms" class="d-block">
                                <input type="checkbox" name="" id="terms" wire:model="terms">You Must
                                agree with our <a href="#">Terms and Conditions</a>
                                <span class="text-danger">
                                    @error('terms')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @endif

         <div class="flex justify-center align-items-center">

        @if ($currentSteps == 1)
            <div>
            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"
                    wire:click="cibiRegister()">Register</button>  
            </div>
        @endif

        <div class="action-buttons pt-2 pb-2">

            @if ($currentSteps == 2 || $currentSteps == 3 || $currentSteps == 4)
                {{-- <buttton type="button" class="btn btn-sm btn-secondary pr-4 text-color-900" wire:click="decreaseStep()">Back</buttton> --}}
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"
                    wire:click="increaseValue()">Back</button>
            @endif

            @if ($currentSteps == 1 || $currentSteps == 2 || $currentSteps == 3)
                {{-- <buttton type="button" class="btn btn-sm btn-success px-8 text-color-900" wire:click="increaseValue()">Next</buttton> --}}
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"
                    wire:click="increaseValue()">Next</button>
            @endif

            @if ($currentSteps == 4)
                {{-- <buttton type="submit" class="btn btn-sm btn-primary">Submit</buttton> --}}
                <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-700">
                    Submit</button>
            @endif

        </div>
    </form>

    <div class="flex justify-center align-items-center">

        @if ($currentSteps == 1)
            <div>
            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"
                    wire:click="cibiRegister()">Register</button>  
            </div>
        @endif

        <div class="action-buttons pt-2 pb-2">

            @if ($currentSteps == 2 || $currentSteps == 3 || $currentSteps == 4)
                {{-- <buttton type="button" class="btn btn-sm btn-secondary pr-4 text-color-900" wire:click="decreaseStep()">Back</buttton> --}}
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"
                    wire:click="increaseValue()">Back</button>
            @endif

            @if ($currentSteps == 1 || $currentSteps == 2 || $currentSteps == 3)
                {{-- <buttton type="button" class="btn btn-sm btn-success px-8 text-color-900" wire:click="increaseValue()">Next</buttton> --}}
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"
                    wire:click="increaseValue()">Next</button>
            @endif

            @if ($currentSteps == 4)
                {{-- <buttton type="submit" class="btn btn-sm btn-primary">Submit</buttton> --}}
                <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-700">
                    Submit</button>
            @endif

        </div>


    </div>


</div>
