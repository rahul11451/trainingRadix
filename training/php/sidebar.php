<?php
$path = '/php/';
?>
<!-- content -->
<div class="pt-lg-5 pt-3 pb-2 text-lg-start text-center mt-lg-3 col-lg-2 pb-md-4 bg-primary bg-opacity-50 navbar-nav-scroll navbar-expand-lg navbar-dark">
    <div class="">
        <button class="navbar-toggler mb-2" data-bs-toggle="collapse" data-bs-target="#data">
            <span class="fa fa-home"></span></button>
    </div>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day1" data-bs-toggle="collapse" data-parent="#data">
                        phpOverview
                    </div>
                </h3>
            </div>

            <ul id="day1" class="collapse list-unstyled show">
                <li class="">
                    <h5>
                        <a class="<?php echo ($_SERVER['PHP_SELF'] == "version_confi.php" ? "active" : "");?>text-white text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>php_overview/version_confi.php">
                            Version_configuration
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_overview/string.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_overview/string.php" id="sidebar">
                            String
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_overview/detail.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_overview/detail.php">
                            Details
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_overview/form.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_overview/form.php">
                            Form
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day2" data-bs-toggle="collapse" data-parent="#data">
                        phpBasics
                    </div>
                </h3>
            </div>

            <ul id="day2" class="collapse list-unstyled show">
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/calculater.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/calculater.php">
                            calculater
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/displayValues.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/displayValues.php">
                            displayValues
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/currency.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/currency.html">
                            currencyCalculate
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/bmi.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/bmi.html">
                            findBmi
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/pictureVerification.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/pictureVerification.php">
                            pictureVerification
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/getDate.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/getDate.php">
                            getDate
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/findAge.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/findAge.php">
                            findAge
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/differenceOfDate.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/differenceOfDate.php">
                            dateDifference
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/dateValidation.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/dateValidation.php">
                            dateValidation
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/convertMonthNoToName.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/convertMonthNoToName.php">
                            showMonthName
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/checkPowerOfTwo.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/checkPowerOfTwo.php">
                            checkPowerOfTwo
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/squreRoot.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/squreRoot.php">
                            squareRootOfNumber
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/reverseInteger.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/reverseInteger.php">
                            reverseInteger
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/basicForm.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/basicForm.php">
                            basicForm
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/serverIpAddress.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/serverIpAddress.php">
                            serverIpAddress
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/checkStringPattern.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/checkStringPattern.php">
                            checkStringPattern
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/removeLastChar.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/removeLastChar.php">
                            removeLastCharacter
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/removeWhiteSpace.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/removeWhiteSpace.php">
                            removeWhiteSpace
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/removeNonNumeric.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/removeNonNumeric.php">
                            removeNonNumericCharacter
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/removeNewLine.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/removeNewLine.php">
                            removeNewLine
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."phpBasics/formValidation.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>phpBasics/formValidation.php">
                            formValidation
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day3" data-bs-toggle="collapse" data-parent="#data">
                        Array&String
                    </div>
                </h3>
            </div>

            <ul id="day3" class="collapse list-unstyled show">
                <h4 class="text-decoration-underline">Array</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/arrayFunction.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/arrayFunction.php">
                            arrayFunctions
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/createArrayAndOperation.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/createArrayAndOperation.php">
                            operationOnArray
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/averageMinMax.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/averageMinMax.php">
                            ArithmaticOperation
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/serializedToUnserialized.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/serializedToUnserialized.php">
                            SerializedToUnserialized
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/insertValue.php" ? "active" : "");?> " href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/insertValue.php">
                            insertValue
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/uppercaseAndLowercase.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/uppercaseAndLowercase.php">
                            upperCaseAndLowerCase
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/mergeArray.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/mergeArray.php">
                            mergeArray
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/printValue.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/printValue.php">
                            printValues
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/sortingOnAssArray.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/sortingOnAssArray.php">
                            sortArrays
                        </a>
                    </h5>
                </li>
                <h4 class="text-decoration-underline">String</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/removeComma.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/removeComma.php">
                            removeCommas
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/replaceCharacter.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/replaceCharacter.php">
                            replaceCharacter
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/getLastWord.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/getLastWord.php">
                            getLastWord
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/insertString.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/insertString.php">
                            insertString
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/removePartOfString.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/removePartOfString.php">
                            removeString
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/printNextChar.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/printNextChar.php">
                            printNextChar
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/stringToArray.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/stringToArray.php">
                            stringToArray
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/findpathName.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/findpathName.php">
                            findPathName
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/findDiffStr.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/findDiffStr.php">
                            findDiffString
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."arrayString/replaceFirstWord.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>arrayString/replaceFirstWord.php">
                            replaceFirstWord
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day4" data-bs-toggle="collapse" data-parent="#data">
                        Function&Oop
                    </div>
                </h3>
            </div>

            <ul id="day4" class="collapse list-unstyled show">
                <h4 class="text-decoration-underline">Functions</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/calculatorUsingOneFun.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/calculatorUsingOneFun.php">
                            calculatorUsingOneFun
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/swapTwoNum.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/swapTwoNum.php">
                            swapTwoNumbers
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/showAllOpOfCal.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/showAllOpOfCal.php">
                        showAllOperationResult
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/calculationUsingOp.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/calculationUsingOp.php">
                        SingleOperationPerform
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/multiArrayToSingleArray.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/multiArrayToSingleArray.php">
                        multiArrayToSingleArray
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/personsInfo.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/personsInfo.php">
                        personsInfo
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."functions/storeAndSortArray.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>functions/storeAndSortArray.php">
                        storeAndSortArray
                        </a>
                    </h5>
                </li>

                <h4 class="text-decoration-underline">Classes</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/emplDetail.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/emplDetail.php">
                            Employee Details
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/mobileDetails.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/mobileDetails.php">
                            Mobile Price
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/bankAccountDetail.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/bankAccountDetail.php">
                            Bank Account Details
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/personsDetails.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/personsDetails.php">
                            Persons Details
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/areaCalculator.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/areaCalculator.php">
                            Area Calculator
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/buildingManagment.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/buildingManagment.php">
                            Building Managment
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."php_oops/finalPrice.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>php_oops/finalPrice.php">
                            Product Final Price
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day5" data-bs-toggle="collapse" data-parent="#data">
                        Form Handling
                    </div>
                </h3>
            </div>

            <ul id="day5" class="collapse list-unstyled show">
                <h4 class="text-decoration-underline">Forms and URL</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."formHandling/urlRedirect.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>formHandling/urlRedirect.php">
                            URL Redirect
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."formHandling/fileUpload.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>formHandling/fileUpload.php">
                            File upload
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."formHandling/displayValueOfInputs.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>formHandling/displayValueOfInputs.php">
                            Display Values
                        </a>
                    </h5>
                </li>
                <h4 class="text-decoration-underline">File Handling</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."fileHandling/retriveDataFromFile.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>fileHandling/retriveDataFromFile.php">
                            RetriveData from File
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."fileHandling/formValidation.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>fileHandling/formValidation.php">
                            Form data into file
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."fileHandling/retriveFileData.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>fileHandling/retriveFileData.php">
                            File information
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day6" data-bs-toggle="collapse" data-parent="#data">
                        Ajax, Session and Cookie
                    </div>
                </h3>
            </div>

            <ul id="day6" class="collapse list-unstyled show">
                <h4 class="text-decoration-underline">Ajax</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."ajaxPractice/checkFile.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>ajaxPractice/checkFile.php">
                            checkFile
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."ajaxPractice/chatApplication.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>ajaxPractice/chatApplication.php">
                            chatApplication
                        </a>
                    </h5>
                </li>
                <br>
                <h4 class="text-decoration-underline">Seesion and Cookie</h4>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."sessionAndCookie/loginCookie.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>sessionAndCookie/loginCookie.php">
                            loginDataInCookie
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."sessionAndCookie/websiteSurvey.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>sessionAndCookie/websiteSurvey.php">
                            websiteSurvey
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."ajaxPractice/registrationForm.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>ajaxPractice/registrationForm.php">
                            main exercise
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day7" data-bs-toggle="collapse" data-parent="#data">
                        Database
                    </div>
                </h3>
            </div>

            <ul id="day7" class="collapse list-unstyled show">
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."database/trialData.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>database/trialData.php">
                            Database Operation
                        </a>
                    </h5>
                </li>
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none <?php echo ($_SERVER['PHP_SELF'] == $path."database/studentRegistration.php" ? "active" : "");?>" href="<?php echo SITE_URL; ?><?php echo $path ?>database/studentRegistration.php">
                            Insert And Update
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
</div>