<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
        $id = $row['id'];
        $user = $row['user'];
        $email = $row['email'];
        $loans = $row['loans'];
        $addfunds = $row['addfunds'];
        $discharge_fees = $row['discharge_fees'];
        $establishment_fees = $row['establishment_fees'];
        $break_cost = $row['break_cost'];
        $exit_cost = $row['exit_cost'];
        $bank_fees = $row['bank_fees'];
        $added_loan = $row['added_loan'];
        $mortage_registration = $row['mortage_registration'];
        $associated_cost = $row['associated_cost'];
        $refinance_cost = $row['refinance_cost'];
        $total_funds_required = $row['total_funds_required'];
        $required_loan_amount = $row['required_loan_amount'];
        $customer_contribution = $row['customer_contribution'];
        $interest_rate_current = $row['interest_rate_current'];
        $loan_months_current = $row['loan_months_current'];
        $repayment_loan_months_current = $row['repayment_loan_months_current'];
        $annual_ongoing_fees_current = $row['annual_ongoing_fees_current'];
        $annual_benifits = $row['annual_benifits'];
        $Cashback_deposit = $row['Cashback_deposit'];
        $savings_over_the_proposed_loan = $row['savings_over_the_proposed_loan'];
        $additional_monthly_repayment = $row['additional_monthly_repayment'];
        $loan_term_with_additional_monthly_repayment = $row['loan_term_with_additional_monthly_repayment'];
        $second_principal = $row['second_principal'];
        $first_principal = $row['first_principal'];
        $second_interest = $row['second_interest'];
        $first_interest = $row['first_interest'];
        $repayment_loan_months_proposed = $row['repayment_loan_months_proposed'];
        $annual_ongoing_fees_months = $row['annual_ongoing_fees_months'];
        $interest_rate_proposed = $row['interest_rate_proposed'];
        $loan_months_proposed = $row['loan_months_proposed'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $user = $_POST['user'];
        $email = $_POST['email'];
        $loans = $_POST['loans'];
        $addfunds = $_POST['addfunds'];
        $discharge_fees = $_POST['discharge_fees'];
        $establishment_fees = $_POST['establishment_fees'];
        $break_cost = $_POST['break_cost'];
        $exit_cost = $_POST['exit_cost'];
        $bank_fees = $_POST['bank_fees'];
        $added_loan = $_POST['added_loan'];
        $mortage_registration = $_POST['mortage_registration'];
        $associated_cost = $_POST['associated_cost'];
        $refinance_cost = $_POST['refinance_cost'];
        $total_funds_required = $_POST['total_funds_required'];
        $required_loan_amount = $_POST['required_loan_amount'];
        $customer_contribution = $_POST['customer_contribution'];
        $interest_rate_current = $_POST['interest_rate_current'];
        $loan_months_current = $_POST['loan_months_current'];
        $repayment_loan_months_current = $_POST['repayment_loan_months_current'];
        $annual_ongoing_fees_current = $_POST['annual_ongoing_fees_current'];
        $annual_benifits = $_POST['annual_benifits'];
        $Cashback_deposit = $_POST['Cashback_deposit'];
        $savings_over_the_proposed_loan = $_POST['savings_over_the_proposed_loan'];
        $additional_monthly_repayment = $_POST['additional_monthly_repayment'];
        $loan_term_with_additional_monthly_repayment = $_POST['loan_term_with_additional_monthly_repayment'];
        $second_principal = $_POST['second_principal'];
        $first_principal = $_POST['first_principal'];
        $second_interest = $_POST['second_interest'];
        $first_interest = $_POST['first_interest'];
        $repayment_loan_months_proposed = $_POST['repayment_loan_months_proposed'];
        $annual_ongoing_fees_months = $_POST['annual_ongoing_fees_months'];
        $interest_rate_proposed = $_POST['interest_rate_proposed'];
        $loan_months_proposed = $_POST['loan_months_proposed'];
    
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET user = '$user' , email = '{$email}' , loans = '{$loans}' , addfunds = '{$addfunds}' , discharge_fees = '{$discharge_fees}' , establishment_fees = '{$establishment_fees}' , break_cost = '{$break_cost}' , exit_cost = '{$exit_cost}' , bank_fees = '{$bank_fees}' , added_loan = '{$added_loan}', mortage_registration = '{$mortage_registration}' , associated_cost = '{$associated_cost}' , refinance_cost = '{$refinance_cost}' , total_funds_required = '{$total_funds_required}' , required_loan_amount = '{$required_loan_amount}' , customer_contribution = '{$customer_contribution}' , interest_rate_current = '{$interest_rate_current}' , loan_months_current = '{$loan_months_current}' , repayment_loan_months_current = '{$repayment_loan_months_current}' , annual_ongoing_fees_current = '{$annual_ongoing_fees_current}' , annual_benifits = '{$annual_benifits}' , Cashback_deposit = '{$Cashback_deposit}' , savings_over_the_proposed_loan = '{$savings_over_the_proposed_loan}' , additional_monthly_repayment = '{$additional_monthly_repayment}' , loan_term_with_additional_monthly_repayment = '{$loan_term_with_additional_monthly_repayment}' , second_principal = '{$second_principal}' , first_principal = '{$first_principal}' , first_interest = '{$first_interest}' , second_interest = '{$second_interest}' , repayment_loan_months_proposed = '{$repayment_loan_months_proposed}' , annual_ongoing_fees_months = '{$annual_ongoing_fees_months}' , interest_rate_proposed = '{$interest_rate_proposed}', loan_months_proposed = '{$loan_months_proposed}' WHERE id = $userid";
      // echo $query;
      $update_user = mysqli_query($conn, $query);
      if($update_user)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: home.php');
    }else{
        echo '<script> alert("Data not updated"); </script>';
    }
     
      }
?>

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
  <form action="" method="post">
      
      <table class="web_form_table">
        <div class="table_containers">
        <!-- User name -->
        <tr><td>Username</td><td><input type="text" name="user"  class="form-control" value="<?php echo $user  ?>"></td></tr>
         <!-- user email -->

        <tr><td>Email</td><td><input type="email" name="email"  class="form-control" value="<?php echo $email  ?>"></td></tr>
        

        <!-- Calculator heading -->
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinancing loans</th><td></td></tr>
        
        
        <tr class="input-field"><td>Refinancing loans - total outstanding<br> balances
        
        <!-- Refinancing loans - total outstanding balances -->
      </td><td><i class="fa fa-usd" aria-hidden="true"></i><input id="loans" name="loans" type="number" value="<?php echo $loans ?>"></td></tr>

         <!-- Additional funds requested -->
        <tr class="input-field"><td>Additional funds requested</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="addfunds" id="addfunds" class="addfunds" value="<?php echo $addfunds ?>"></td></tr>
        
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Estimated exit fees (A)</th><td></td></tr>
        
        <!--  Discharge fees-->
        <tr class="input-field"><td>Discharge fees</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="discharge_fees" id="discharge_fees" class="discharge_fees" value="<?php echo $discharge_fees ?>"></td></tr>
        
        <!-- Deferred establishment fees -->
        <tr class="input-field"><td>Deferred establishment fees</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="establishment_fees" id="establishment_fees" class="establishment_fees" value="<?php echo $establishment_fees ?>" ></td></tr>
        
        <!--Break costs  -->
        <tr class="input-field"><td>Break costs</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="break_cost" id="break_cost" value="<?php echo $break_cost ?>"></td></tr>
        
        <!--Other associated exit costs  -->
        <tr class="input-field"><td>Other associated exit costs</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="exit_cost" id="exit_cost" value="<?php echo $exit_cost ?>"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Estimated entry fees (B)</th><td></td></tr>
        
        <!-- Total bank fees(application, valuation, etc) -->
        <tr class="input-field"><td>Total bank fees(application, valuation, etc)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="bank_fees" id="bank_fees" value="<?php echo $bank_fees ?>"></td></tr>
        
        <!-- LMI - added to loan -->
        <tr class="input-field"><td>LMI - added to loan</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="added_loan" id="added_loan" class="added_loan" value="<?php echo $added_loan ?>"></td></tr>  
        
        <!-- Mortgage registration -->
        <tr class="input-field"><td>Mortgage registration</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="mortage_registration" id="mortage_registration" class="mortage_registration" value="<?php echo $mortage_registration ?>"></td></tr>
        
        <!-- Other associated entry costs -->
        <tr class="input-field"><td>Other associated entry costs</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="associated_cost" id="associated_cost" class="associated_cost" value="<?php echo $associated_cost ?>"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinance costs</th><td></td></tr>
        
        <!-- Once-off refinance cost(A+b)  -->
        <tr class="input-field"><td>Once-off refinance cost(A+b)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="refinance_cost" id="refinance_cost" class="refinance_cost" value="<?php echo $refinance_cost ?>"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinance funding</th><td></td></tr>  
        
        <!-- Total funds required ( C ) -->
        <tr class="input-field"><td>Total funds required ( C )</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="total_funds_required" name="total_funds_required" class="total_funds_required" value="<?php echo $total_funds_required ?>"></td></tr>
        
        <!-- Required loan amount (D) -->
        <tr class="input-field"><td>Required loan amount (D)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="required_loan_amount" name="required_loan_amount" class="required_loan_amount" value="<?php echo $required_loan_amount ?>"></td></tr>
       
        <!-- Surplus/Customer contribution (D-C) -->
        <tr  class="input-field"><td>Surplus/Customer contribution (D-C)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="customer_contribution" name="customer_contribution" class="customer_contribution" value="<?php echo $customer_contribution ?>"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinance benefit</th><td></td></tr>
        
        
        <tr><th></th><td class="current_head">Current</td><td class="proposed_head">Proposed</td></tr> 
        
        <!-- Interest rate -->
        <tr class="input-field"><td>Interest rate</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="interest_rate_current" value="<?php echo $interest_rate_current ?>" name="interest_rate_current" class="interest_rate_current"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name= "interest_rate_proposed" id="interest_rate_proposed" class="interest_rate_proposed" value="<?php echo $interest_rate_proposed ?>"></td></tr>     
        
        <!-- Loan term in months -->
        <tr class="input-field"><td>Loan term in months</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="loan_months_current" name="loan_months_current" class="loan_months_current" value="<?php echo $loan_months_current ?>"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="loan_months_proposed" id="loan_months_proposed" class="loan_months_proposed" value="<?php echo $loan_months_proposed ?>"></td></tr>     
        
        <!-- Monthly home loan repayment (P&I) -->
        <tr class="main_values input-field"><td><strong>Monthly home loan repayment (P&I)</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="repayment_loan_months_current" id="repayment_loan_months_current" class="repayment_loan_months_current" value="<?php echo $loan_months_current ?>"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="repayment_loan_months_proposed" id="repayment_loan_months_proposed" class="repayment_loan_months_proposed" value="<?php echo $loan_months_current ?>"></td></tr>
        
        <!-- Annual ongoing fees -->
        <tr class="input-field"><td>Annual ongoing fees</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="annual_ongoing_fees_current" name="annual_ongoing_fees_current" currency-symbol="$" class="annual_ongoing_fees_current" value="<?php echo $annual_ongoing_fees_current ?>"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="annual_ongoing_fees_months" name="annual_ongoing_fees_months" class="annual_ongoing_fees_months" value="<?php echo $annual_ongoing_fees_months ?>"></td></tr>
        
        <!-- Annual benifits -->
        <tr class="main_values input-field"><td><strong>Annual benifits</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="annual_benifits" name="annual_benifits" class="annual_benifits" value="<?php echo $annual_benifits ?>"></td></tr>
        
        <!-- Cashback/deposit -->
        <tr class="input-field"><td>Cashback/deposit</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="Cashback_deposit" currency-symbol="$" name="Cashback_deposit" class="Cashback_deposit" value="<?php echo $Cashback_deposit ?>"></td></tr>
        
        <!-- Savings over the proposed loan term -->
        <tr class="main_values input-field"><td><strong>Savings over the proposed loan term</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="savings_over_the_proposed_loan" value="<?php echo $savings_over_the_proposed_loan ?>" id="savings_over_the_proposed_loan" class="savings_over_the_proposed_loan"></td></tr>
       
        <!-- Additional monthly repayment -->
        <tr class="input-field"><td>Additional monthly repayment</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" type="number" id="additional_monthly_repayment" name="additional_monthly_repayment" value="<?php echo $additional_monthly_repayment ?>"  class="additional_monthly_repayment"></td></tr>
        
        <!-- Savings over the loan term with additional monthly repayment  -->
        <tr class="main_values input-field"><td><strong>Savings over the loan term with<br> additional monthly repayment</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="loan_term_with_additional_monthly_repayment" value="<?php echo $loan_term_with_additional_monthly_repayment ?>" id="loan_term_with_additional_monthly_repayment" class="loan_term_with_additional_monthly_repayment" value="0"></td></tr>
        
        <!-- Principal -->
        <tr class="principal_val input-field"><td>Principal</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="first_principal" name="first_principal" class="first_principal" value="<?php echo $first_principal ?>"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="second_principal" id="second_principal" class="second_principal" value="<?php echo $second_principal ?>"></td></tr>
        
        <!-- Interest -->
        <tr class="interest_val input-field"><td>Interest</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="first_interest" name="first_interest" class="first_interest" value="<?php echo $first_interest ?>"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="second_interest" id="second_interest" class="second_interest" value="<?php echo $second_interest ?>"></td></tr>
    </table>

      <div class="form-group">
        <input type="submit"  name="update" value="update" class="btn btn-primary editbtn mt-2">
      </div>
    </form> 
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>
        
       
<!-- Footer -->
<?php include "../footer.php" ?>