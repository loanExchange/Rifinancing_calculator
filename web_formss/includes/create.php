<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
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



      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO users(user, email, loans, addfunds, discharge_fees, establishment_fees, break_cost, exit_cost, bank_fees, added_loan, mortage_registration, associated_cost, refinance_cost, total_funds_required, required_loan_amount, customer_contribution, interest_rate_current, loan_months_current, repayment_loan_months_current, annual_ongoing_fees_current, annual_benifits, Cashback_deposit, savings_over_the_proposed_loan, additional_monthly_repayment, loan_term_with_additional_monthly_repayment, second_principal, first_principal, first_interest, second_interest, repayment_loan_months_proposed, annual_ongoing_fees_months, interest_rate_proposed, loan_months_proposed) VALUES('{$user}','{$email}','{$loans}','{$addfunds}','{$discharge_fees}','{$establishment_fees}','{$break_cost}','{$exit_cost}','{$bank_fees}','{$added_loan}','{$mortage_registration}','{$associated_cost}','{$refinance_cost}','{$total_funds_required}','{$required_loan_amount}','{$customer_contribution}','{$interest_rate_current}','{$loan_months_current}','{$repayment_loan_months_current}','{$annual_ongoing_fees_current}','{$annual_benifits}','{$Cashback_deposit}','{$savings_over_the_proposed_loan}','{$additional_monthly_repayment}','{$loan_term_with_additional_monthly_repayment}','{$second_principal}','{$first_principal}','{$first_interest}','{$second_interest}','{$repayment_loan_months_proposed}','{$annual_ongoing_fees_months}','{$interest_rate_proposed}','{$loan_months_proposed}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
        
              }         
    }
?>

<h1 class="text-center">Refinancing</h1>
  <div class="container">
    <form action="" method="post">
      
      
      <table class="web_form_table">
        <div class="table_containers">
        <!-- User name -->
        <tr><td>Username</td><td><input type="text" name="user"></td></tr>
         <!-- user email -->

        <tr><td>Email</td><td><input type="email" name="email"  ></td></tr>
        

        <!-- Calculator heading -->
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinancing loans</th><td></td></tr>
        
        
        <tr class="input-field"><td>Refinancing loans - total outstanding<br> balances
        
        <!-- Refinancing loans - total outstanding balances -->
      </td><td><i class="fa fa-usd" aria-hidden="true"></i><input id="loans" name="loans" type="number" value="250000"></td></tr>

         <!-- Additional funds requested -->
        <tr class="input-field"><td>Additional funds requested</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="addfunds" id="addfunds" class="addfunds" value="75000.00"></td></tr>
        
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Estimated exit fees (A)</th><td></td></tr>
        
        <!--  Discharge fees-->
        <tr class="input-field"><td>Discharge fees</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="discharge_fees" id="discharge_fees" class="discharge_fees" value="350.00"></td></tr>
        
        <!-- Deferred establishment fees -->
        <tr class="input-field"><td>Deferred establishment fees</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="establishment_fees" id="establishment_fees" class="establishment_fees" value="1250.00" ></td></tr>
        
        <!--Break costs  -->
        <tr class="input-field"><td>Break costs</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="break_cost" id="break_cost" value="25000.00"></td></tr>
        
        <!--Other associated exit costs  -->
        <tr class="input-field"><td>Other associated exit costs</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="exit_cost" id="exit_cost" value="1200.00"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Estimated entry fees (B)</th><td></td></tr>
        
        <!-- Total bank fees(application, valuation, etc) -->
        <tr class="input-field"><td>Total bank fees(application, valuation, etc)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="bank_fees" id="bank_fees" value="150.00"></td></tr>
        
        <!-- LMI - added to loan -->
        <tr class="input-field"><td>LMI - added to loan</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="added_loan" id="added_loan" class="added_loan" value="0"></td></tr>  
        
        <!-- Mortgage registration -->
        <tr class="input-field"><td>Mortgage registration</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="mortage_registration" id="mortage_registration" class="mortage_registration" value="1200.00"></td></tr>
        
        <!-- Other associated entry costs -->
        <tr class="input-field"><td>Other associated entry costs</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="associated_cost" id="associated_cost" class="associated_cost" value="900"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinance costs</th><td></td></tr>
        
        <!-- Once-off refinance cost(A+b)  -->
        <tr class="input-field"><td>Once-off refinance cost(A+b)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="refinance_cost" id="refinance_cost" class="refinance_cost"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinance funding</th><td></td></tr>  
        
        <!-- Total funds required ( C ) -->
        <tr class="input-field"><td>Total funds required ( C )</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="total_funds_required" name="total_funds_required" class="total_funds_required"></td></tr>
        
        <!-- Required loan amount (D) -->
        <tr class="input-field"><td>Required loan amount (D)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="required_loan_amount" name="required_loan_amount" class="required_loan_amount"></td></tr>
       
        <!-- Surplus/Customer contribution (D-C) -->
        <tr  class="input-field"><td>Surplus/Customer contribution (D-C)</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" id="customer_contribution" name="customer_contribution" class="customer_contribution"></td></tr>
        
        <tr><th><i class="fa fa-usd" aria-hidden="true"></i>Refinance benefit</th><td></td></tr>
        
        
        <tr><th></th><td class="current_head">Current</td><td class="proposed_head">Proposed</td></tr> 
        
        <!-- Interest rate -->
        <tr class="input-field"><td>Interest rate</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="interest_rate_current" name="interest_rate_current" class="interest_rate_current" value="3"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name= "interest_rate_proposed" id="interest_rate_proposed" class="interest_rate_proposed" value="2"></td></tr>     
        
        <!-- Loan term in months -->
        <tr class="input-field"><td>Loan term in months</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="loan_months_current" name="loan_months_current" class="loan_months_current" value="240"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="number" name="loan_months_proposed" id="loan_months_proposed" class="loan_months_proposed" value="360"></td></tr>     
        
        <!-- Monthly home loan repayment (P&I) -->
        <tr class="main_values input-field"><td><strong>Monthly home loan repayment (P&I)</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="repayment_loan_months_current" id="repayment_loan_months_current" class="repayment_loan_months_current" value="240"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="repayment_loan_months_proposed" id="repayment_loan_months_proposed" class="repayment_loan_months_proposed" value="360"></td></tr>
        
        <!-- Annual ongoing fees -->
        <tr class="input-field"><td>Annual ongoing fees</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="annual_ongoing_fees_current" name="annual_ongoing_fees_current" currency-symbol="$" class="annual_ongoing_fees_current" value="300"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="annual_ongoing_fees_months" name="annual_ongoing_fees_months" class="annual_ongoing_fees_months" value="300"></td></tr>
        
        <!-- Annual benifits -->
        <tr class="main_values input-field"><td><strong>Annual benifits</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="annual_benifits" name="annual_benifits" class="annual_benifits" value="0"></td></tr>
        
        <!-- Cashback/deposit -->
        <tr class="input-field"><td>Cashback/deposit</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="Cashback_deposit" currency-symbol="$" name="Cashback_deposit" class="Cashback_deposit" value="3000"></td></tr>
        
        <!-- Savings over the proposed loan term -->
        <tr class="main_values input-field"><td><strong>Savings over the proposed loan term</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="savings_over_the_proposed_loan" id="savings_over_the_proposed_loan" class="savings_over_the_proposed_loan"></td></tr>
       
        <!-- Additional monthly repayment -->
        <tr class="input-field"><td>Additional monthly repayment</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="additional_monthly_repayment" name="additional_monthly_repayment" value="400"  class="additional_monthly_repayment"></td></tr>
        
        <!-- Savings over the loan term with additional monthly repayment  -->
        <tr class="main_values input-field"><td><strong>Savings over the loan term with<br> additional monthly repayment</strong></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="loan_term_with_additional_monthly_repayment" id="loan_term_with_additional_monthly_repayment" class="loan_term_with_additional_monthly_repayment" value="0"></td></tr>
        
        <!-- Principal -->
        <tr class="principal_val input-field"><td>Principal</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="first_principal" name="first_principal" class="first_principal" value="0"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="second_principal" id="second_principal" class="second_principal" value="0"></td></tr>
        
        <!-- Interest -->
        <tr class="interest_val input-field"><td>Interest</td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" id="first_interest" name="first_interest" class="first_interest" value="0"></td><td><i class="fa fa-usd" aria-hidden="true"></i><input type="text" name="second_interest" id="second_interest" class="second_interest" value="0"></td></tr>
    </table>
      

      <div class="form-group submitcls">
        <input type="submit"  name="create" class="btn-submit btn-primary mt-3 " onclick="calc();" value="submit">
      </div>
    </form> 
  </div> 

   <!-- a BACK button to go to the home page -->
  <div class="container text-center">
    <div class="form-group backcls">
    <a href="home.php" class="btn-back btn-warning "> Back </a>
    </div>
    <div class="form-group detailscls">
    <a href="home.php" class="btn btn-success" >View Details</a>
    </div>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>