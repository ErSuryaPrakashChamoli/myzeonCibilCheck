<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "hi clic";
    print_r("thissssssssssssssssssclic click clic");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
        }

        .container {
            max-width: 800px;
            background: #fff;
            width: 800px;
            padding: 25px 40px 10px 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container .text {
            text-align: center;
            font-size: 41px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .container form {
            padding: 30px 0 0 0;
        }

        .container form .form-row {
            display: flex;
            margin: 32px 0;
        }

        form .form-row .input-data {
            width: 100%;
            height: 40px;
            margin: 0 20px;
            position: relative;
        }

        form .form-row .textarea {
            height: 70px;
        }

        .input-data input,
        .textarea textarea {
            display: block;
            width: 100%;
            height: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        }


        .input-data select,
        .textarea textarea {
            display: block;
            width: 100%;
            height: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        }

        .input-data select:focus~label,
        .input-data select:valid~label,

        .input-data input:focus~label,
        .textarea textarea:focus~label,
        .input-data input:valid~label,
        .textarea textarea:valid~label {
            transform: translateY(-20px);
            font-size: 14px;
            color: #3498db;
        }

        .textarea textarea {
            resize: none;
            padding-top: 10px;
        }

        .input-data label {
            position: absolute;
            pointer-events: none;
            bottom: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .textarea label {
            width: 100%;
            bottom: 40px;
            background: #fff;
        }

        .input-data .underline {
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
        }

        .input-data .underline:before {
            position: absolute;
            content: "";
            height: 2px;
            width: 100%;
            background: #3498db;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }

        .input-data input:focus~.underline:before,
        .input-data input:valid~.underline:before,
        .textarea textarea:focus~.underline:before,
        .textarea textarea:valid~.underline:before {
            transform: scale(1);
        }

        .submit-btn .input-data {
            overflow: hidden;
            height: 45px !important;
            width: 25% !important;
        }

        .submit-btn .input-data .inner {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            transition: all 0.4s;
        }

        .submit-btn .input-data:hover .inner {
            left: 0;
        }

        .submit-btn .input-data input {
            background: none;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }

        .submit-btn .input-data select {
            background: none;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }


        @media (max-width: 700px) {
            .container .text {
                font-size: 30px;
            }

            .container form {
                padding: 10px 0 0 0;
            }

            .container form .form-row {
                display: block;
            }

            form .form-row .input-data {
                margin: 35px 0 !important;
            }

            .submit-btn .input-data {
                width: 40% !important;
            }
        }
    </style>
</head>

<body onload="onloadbody()">

    <!-- **********************form start***************************************** -->


    <div class="container">
        <div class="text">
            Contact us Form
        </div>
        <form id="form_loan" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required id="inpfirstname">
                    <div class="underline"></div>
                    <label for="firstname">First Name<span id="errorFirstName"></span></label>
                </div>
                <div class="input-data">
                    <input type="text" id="inplastname" required>
                    <div class="underline"></div>
                    <label for="lableinpLastname">Last Name<span id="error_last_name">This is inform</span></label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required id="Inpemail">
                    <div class="underline"></div>
                    <label for="email">Email Address<span id="error_email"></span></label>
                </div>
                <div class="input-data">

                    <input type="text" id="inpPhoneNumber" oninput="filterNonNumericCharacters(event)" required>
                    <div class="underline"></div>
                    <label for="inpPhoneNumber">Phone Number <span id="errorphoneNumber"></span></label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" required oninput="formatAmount(this)" id="desiredloan">

                    <div class="underline"></div>
                    <label for="desiredloan">Desired Loan Amount</label>
                </div>
                <div class="input-data">
                    <input type="text" required id="inpPincode">
                    <span id="error_message" style="color:red;display:none">*Not A Valid Pin</span>
                    <div class="underline"></div>
                    <label for="inpPincode">Enter Valid Pincode</label>
                </div>
            </div>


            <div class="form-row">
                <div class="input-data">
                    <input type="text" required id="inpCity">
                    <div class="underline"></div>
                    <label for="inpCity">City</label>
                </div>
                <div class="input-data">
                    <select id="inpState">

                    </select>
                    <div class="underline"></div>
                    <label for="inpState">State</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" required id="inpPancard">
                    <div class="underline"></div>
                    <label for="pancard">Pan Card Number<span id="errorPancard"></span></label>
                </div>
                <div class="input-data">
                    <input type="date" required id="inpDate">
                    <div class="underline"></div>
                    <label for="inpDate">Date Of Birth</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">

                    <Select style="background-color:white" id="selChangeImpType">
                        <option value="0">Select Employed Type</option>
                        <option value="1">Self Employed Business</option>
                        <option value="2">Self Employed Professional</option>
                    </select>
                    <div class="underline"></div>
                    <label for="selChangeImpType">How are You Currently Employed ?</label>
                </div>
                <div class="input-data">
                    <select id="selTurnOver">
                        <option value="">Please Select Turnover</option>
                        <option value="500000">Upto 5 Lacs</option>
                        <option value="1000000">5 Lacs - 10 Lacs</option>
                        <option value="2500000">10 Lacs - 25 Lacs</option>
                        <option value="5000000">25 Lacs - 50 Lacs</option>
                        <option value="7500000">50 Lacs - 75 Lacs</option>
                        <option value="10000000">75 Lacs - 1 Cr</option>
                        <option value="30000000">1 Cr - 3 Cr</option>
                        <option value="50000000">3 Cr - 5 Cr</option>
                        <option value="100000000">5 Cr+</option>
                    </select>
                    <div class="underline"></div>
                    <label for="selTurnOver">Your Grosss Anuaal Sales/Turover</label>
                </div>
            </div>

            <div class="form-row" id="divProfession">
                <div class="input-data" id="divlableProfessional">
                    <input type="text" required id="profession">
                    <div class="underline"></div>
                    <label for="profession">Profession</label>
                </div>

                <div class="input-data" id="divlableBussinessName">
                    <input type="text" required id="business">
                    <div class="underline"></div>
                    <label for="business">Business Name</label>
                </div>
            </div>


            <div class="form-row" id="divBussinessother">

                <div class="input-data">
                    <input type="text" required id="currentbusiness_change" oninput="filterNonNumericCharacters(event)">
                    <div class="underline"></div>
                    <label for="currentbusiness">Years In Current Bussiness</label>
                </div>

                <div class="input-data" style="margin-top: 40px;">
                    <select id="registantype">
                        <option value="">Select Residence Type</option>
                        <option value="Owned by Self / Spouse">Owned by Self / Spouse</option>
                        <option value="Owned by Parents / Siblings">Owned by Parents / Siblings</option>
                        <option value="Rented with Family">Rented with Family</option>
                        <option value="Rented with Friends">Rented with Friends</option>
                        <option value="Other ">Other</option>
                    </select>
                    <div class="underline"></div>
                    <label for="registantype">Registance Type</label>
                </div>
            </div>

            <div class="form-row" id="divprofessionalOtherinfo">
                <div class="input-data">
                    <input type="text" required id="Yearsinprofessionalbusiness">
                    <div class="underline"></div>
                    <label for="Yearsinprofessionalbusiness">Years In Professional Bussiness</label>
                </div>

                <div class="input-data">
                    <select id="registancetype" style="margin-top: 40px;">
                        <option value="">Select Residence Type</option>
                        <option value="Owned by Self / Spouse">Owned by Self / Spouse</option>
                        <option value="Owned by Parents / Siblings">Owned by Parents / Siblings</option>
                        <option value="Rented with Family">Rented with Family</option>
                        <option value="Rented with Friends">Rented with Friends</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="underline"></div>
                    <label for="registancetype">Registance Type</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" required id="message"></textarea>

                    <div class="underline"></div>
                    <label for="message">Write your message</label>



                </div>
            </div>

            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="button" value="submit" id="btnSubmit">
                </div>
            </div>

        </form>
    </div>



    <!-- ****************************form end********************************************* -->


    <!-- 
    {{-- *************************************Script Start here******************************** --}} -->



    <script>
        // document.getElementById("currentbusiness").addEventListener('change', function() {
        //     console.log("ente 1 input");

        //     const value = input.value;

        //     // Create a regular expression that matches only numbers.
        //     const regex = /^[0-9]+$/;

        //     // If the value does not match the regular expression, clear the input field.
        //     if (!regex.test(value)) {
        //         input.value = "";
        //     }
        // });



        document.getElementById("Inpemail").addEventListener('change', function() {
            // const emailRegex = /^(([^<>()[]\.,;:\s@"]+(.[^<>()[]\.,;:\s@"]+)*)|".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
            
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var email = document.getElementById("Inpemail");
            var getEmail = email.value;

            var emailErro = document.getElementById("error_email");

            if(emailRegex.test(getEmail)!=true){
                emailErro.style.display = "visible"
                emailErro.textContent = "Enter Valid Email"
                emailErro.style.color = "red";
                
            }else{

                emailErro.style.display = "hidden";
                emailErro.textContent = "";
                emailErro.log("check valide");
            }



        });



        document.getElementById("inpPancard").addEventListener('change', function() {

            console.log("enter pancard");

            //   var pancard = document.getElementById('inpPancard');
            //   var errorspan = document.getElementById("errorPancard");
            //   var getpancard = pancard.value;

            //   $check = isValidPAN(getpancard);





            //   if($check){
            //     errorspan.visibility = "none";
            //     return true;
            //   }else{
            //     errorspan.visibility = "visiable";
            //     errorspan.contains = "*Please type valid pin"  
            //     errorspan.style.color = "red";
            //     return false;
            //   }

        });

        var dateInput = document.getElementById("date");




        document.getElementById('selTurnOver').addEventListener("change", function() {
            console.log("change turnover");


        });

        document.getElementById('selChangeImpType').addEventListener("change", function() {
            var element = document.getElementById("selChangeImpType");
            var getOptionValue = element.value;

            console.log("change option value***********" + getOptionValue);

            switch (getOptionValue) {

                case "0":
                    // code block
                    HideBussiness();


                    // console.log("enter 1");
                    break;

                case "1":
                    // code block
                    ShowBussiness();
                    HideProfessional();
                    // console.log("enter 2");
                    break;
                case "2":
                    // code block 
                    //selChangeImpType divprofessionalOtherinfo divBussinessother
                    ShowProfessional();
                    HideBussiness();
                    break;
                default:
                    // code block
            }

            // // getCityStateFromPincode(getPincode);
            // toggleEmploymentFields();


        });


        document.getElementById('inpPincode').addEventListener("change", function() {
            var element = document.getElementById("inpPincode");
            var getPincode = element.value;

            console.log("change pincode");

            getCityStateFromPincode(getPincode);


        });


        document.getElementById("btnSubmit").addEventListener("click", function() {
            // document.getElementById("myElement").style.color = "red";

            console.log("button submit clic");


            var element = document.getElementById("inpPincode");
            var city = document.getElementById("inpCity");
            var state = document.getElementById("inpState");

            var getPincode = element.value;
            var getState = state.value;
            var getCity = city.value;


            console.log(getPincode + getState + getCity);


            validateFormData();

            //var form = document.getElementById('form_loan');
            //form.submit();



        });



            // **********************firstName **************************        

            var firstname = document.getElementById("inpfirstname");
            var errorSpanfirst = document.getElementById("errorFirstName");
            var getFirstName = firstname.value;

            var check = containsSpecialSymbols(getFirstName);
            console.log("checkiiiiii" + check);

            if (check != true) {
                document.getElementById("errorFirstName").style.display = "hidden";
                document.getElementById("errorFirstName").textContent = "";


            } else {
                console.log("checkiiiiii viiiiiiiiiiii");
                // errorSpanfirst.style.visibility = "visiable";
                document.getElementById("errorFirstName").style.display = "visible";
                errorSpanfirst.textContent = "*Please type valid name";
                errorSpanfirst.style.color = "red";

            }



        function validateFormData() {

            // ****************************LastName********************

            var lastnameid = document.getElementById("inplastname");
            var getLastname = lastnameid.value;

            var lastnameError = document.getElementById("error_last_name");

            console.log("lassssssssss" + getLastname);

            var checklastname = containsSpecialSymbols(getLastname);
            if (checklastname != true) {
                lastnameError.style.display = "hidden";
                lastnameError.textContent = "";
                console.log("check valide");

            } else {
                console.log("check invalid");
                lastnameError.style.display = "visible"
                lastnameError.textContent = "Enter Valid Name"
                lastnameError.style.color = "red";

            }



            //    *****************************************valid pancard**************************** 

            var pancard = document.getElementById("inpPancard");
            var errorspan = document.getElementById("errorPancard");
            var getpancard = pancard.value;

            var check = isValidPAN(getpancard);

            console.log("checkKKK" + check);



            if (check == true) {
                console.log("checkk hide");
                errorspan.style.visibility = "hidden";
            } else {
                errorspan.style.visibility = "visiable";
                errorspan.textContent = "*Please type valid pin"
                errorspan.style.color = "red";

            }




            // **********************phonenumber validation************************

            var phonenumber = document.getElementById('inpPhoneNumber');
            var getPhoneNumber = phonenumber.value;

            var phoneError = document.getElementById("errorphoneNumber");


            console.log("phonenuber" + getPhoneNumber);

            if (getPhoneNumber === '' || getPhoneNumber === undefined) {
                phoneError.textContent = "*Please Enter Phone Number";
                phoneError.style.color = "red";
                phoneError.style.fontSize = "10px";
                phonenumber.style.borderColor = "red";

                return false; // Phone number is blank or undefined
            } else {

                getValidPhone = isValidIndianPhoneNumber(getPhoneNumber);

                if (getValidPhone) {
                    console.log("valid number");
                    phoneError.style.visibility = "hidden";

                    return true;
                } else {
                    console.log("not valid number");
                    phoneError.style.visibility = "visible";
                    phoneError.textContent = "*Please Enter Valid Number";
                    phoneError.style.color = "red";
                    phoneError.style.fontSize = "10px";
                    phonenumber.style.borderColor = "red";
                    return false;
                }

                // You can perform additional validation or processing here if needed
                // return true; // Phone number is not blank and defined
            }


            // console.log('enter validateion');


        }



        function getCityStateFromPincode(pincode) {


            var city = document.getElementById("inpCity");
            var state = document.getElementById("inpState");
            var lablePincode = document.getElementById("lablePincode");
            var getState = state.value;
            var getCity = city.value;

            const url = 'https://api.postalpincode.in/pincode/'+pincode;

            // Make an HTTP GET request to the API
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    
                    // Check if the API response is successful
                    if (data &&  data.length > 0  && data[0].Status === "Success") { 
    
                        const city = data[0].PostOffice[0].District;
                        const state = data[0].PostOffice[0].State;
                        document.getElementById("inpCity").value = city;
                        // document.getElementById("inpState").innerHTML = "<option value=''>Select State</option><option value='${state}'>${state}</option>";
        
                        lablePincode.style.display = "none";

                    } else {
                        lablePincode.style.color = "red";
                       
                    }
                })
                .catch(error => {
                   
                });
        }


        function ShowProfessional() {

            var nameOfProfessionType = document.getElementById("divlableProfessional");
            var nameOfProfessionotherinfo = document.getElementById("divprofessionalOtherinfo");
            nameOfProfessionType.style.display = "block";
            nameOfProfessionotherinfo.style.display = "block"



        }

        function HideProfessional() {

            var nameOfProfessionType = document.getElementById("divlableProfessional");
            var nameOfProfessionotherinfo = document.getElementById("divprofessionalOtherinfo");
            nameOfProfessionType.style.display = "none";
            nameOfProfessionotherinfo.style.display = "none"

        }

        function HideBussiness() {
            var nameOfBussinessType = document.getElementById("divlableBussinessName");
            var nameOfBussinessotherinfo = document.getElementById("divBussinessother");
            nameOfBussinessType.style.display = "none";
            nameOfBussinessotherinfo.style.display = "none";



        }

        function ShowBussiness() {

            var nameOfBussinessType = document.getElementById("divlableBussinessName");
            var nameOfBussinessotherinfo = document.getElementById("divBussinessother");
            nameOfBussinessType.style.display = "block";
            nameOfBussinessotherinfo.style.display = "block";

        }

        function HideAllOther() {
            HideProfessional();
            HideBussiness();


        }

        function formatAmount(input) {
            const amountInput = input;
            let amountValue = amountInput.value.replace(/,/g, '');

            // Remove any non-digit characters
            amountValue = amountValue.replace(/\D/g, '');

            // Convert to a number and format with commas for thousands and lakhs
            amountValue = Number(amountValue).toLocaleString('en-IN');

            // Update the input value with the formatted loan amount
            amountInput.value = amountValue;
        }


        function onloadbody() {
            HideAllOther();
        }

        function isValidIndianPhoneNumber(phoneNumber) {
            // Regular expression to match Indian phone numbers
            const phoneRegex = /^(\+91|0)?[6789]\d{9}$/;

            return phoneRegex.test(phoneNumber);
        }


        function filterNonNumericCharacters(event) {
            // Get the input element
            let inputElement = event.target;

            // Get the current input value
            let inputValue = inputElement.value;

            // Remove non-numeric characters using regular expression
            let numericValue = inputValue.replace(/\D/g, '');

            // Update the input field with the filtered numeric value
            inputElement.value = numericValue;
        }

        function currentbusiness(event) {

            console.log("desire amonut")
            // Get the input element
            let inputElement = event.target;

            // Get the current input value
            let inputValue = inputElement.value;



            const value = inputValue;
            // const value = input.value;

            // Create a regular expression that matches only numbers.
            const regex = /^[0-9]+$/;

            // If the value does not match the regular expression, clear the input field.
            if (!regex.test(value)) {
                // input.value = "";
                inputValue = "";
            }




            // // Remove non-numeric characters using regular expression
            // let numericValue = inputValue.replace(/\D/g, '');

            // // Update the input field with the filtered numeric value
            // inputElement.value = numericValue;


            // console.log("ente 1 input");


        }


        function isValidPAN(panNumber) {
            const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]$/;
            return panRegex.test(panNumber);
        }


        function containsSpecialSymbols(inputString) {
            const regex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/; // Regular expression for special symbols

            return regex.test(inputString);
        }

        function checkFillAllfield(){
             
            var inpfirstname=document.getElementById('inpfirstname').value;
            var inplastname=document.getElementById('inplastname').value;
            var Inpemail=document.getElementById('Inpemail').value;
            var inpPhoneNumber=document.getElementById('inpPhoneNumber').value;
            var inpPhoneNumber=document.getElementById('inpPhoneNumber').value;
            var desiredloan=document.getElementById('desiredloan').value;
            var inpPincode=document.getElementById('inpPincode').value;
            var inpCity=document.getElementById('inpCity').value;
            var inpState=document.getElementById('inpState').value;
            var inpPancard=document.getElementById('inpPancard').value;
            var inpDate=document.getElementById('inpDate').value;
            var selChangeImpType=document.getElementById('selChangeImpType').value;
            var selTurnOver=document.getElementById('selTurnOver').value;
            var divlableBussinessName=document.getElementById('divlableBussinessName').value;
            var registantype=document.getElementById('registantype').value;
            var message = document.getElementById("message").value;
            
            
        }
    </script>



    <!-- {{-- *************************************Script end here******************************** --}} -->
</body>

</html>