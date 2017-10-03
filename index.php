<?php global $gender; ?>
<?php $gender = ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['gender'] == 'male') ? 'male' : 'female' ?>

<?php require('includes/_header.php'); ?>

<!-- Container: Form -->
<div class="container-fluid">
<div id="completed-form-container" class="form-container mx-auto d-none">
<div class="row">
<div class="col-12">
<div class="mx-auto">
    <h1 id="completed-form-response-header"></h1>
    <p id="completed-form-response-text"></p>
    </div>
    </div>
    </div>
</div>

<div id="main-form-container" class="form-container mx-auto">
<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST' || !$gender) :
    echo ('
            <div class="row my-4">
                <div class="col-12 text-center">
                    <img src="unfoldid-logo.svg" alt="Unfoldid Logo" width="177" height="100">
                </div>
            </div>
            <div class="row">
            <div class="col-12">
            <div class="text-center">
            <label>Please select your gender: </label>
            <form name="gender-selection" method="POST">
                <div>
                    <input type="radio" name="gender" class="mx-2" value="male"> Male
                    <input type="radio" name="gender" class="mx-2 " value="female"> Female
                </div>
                <div>
                <button class="button__unfoldid button__unfoldid-primary m-3" onclick="validateForm();">Begin</button>
                </div>
            </form> 
            </div>
            </div>
            </div>
            <script>
                function validateForm() {
                    var f = document.forms["gender-selection"];
                    if (f["gender"].value != "") {
                    f.submit();
                    }
                }
            </script>
            ');
endif;
?>
<div id="main-content-row" class="row">

<!-- Navigation Tabs -->
<div class="col-xs-12 col-md-3">
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $gender) {
    require('includes/_navigation.php');
} ?>
</div>


<div class="col-xs-12 col-md-9">
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gender == 'male' ? require('men/index.php') : require('women/index.php');
} ?>
</div>
<?php require('includes/_footer.php'); ?>