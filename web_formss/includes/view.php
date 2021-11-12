<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">User Details</h1>
  <div class="container-fluid">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
        <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Refinancing loans - total outstanding balances</th>
          <th scope="col">Additional funds requested</th>
          <th scope="col">Discharge fees</th>
          <th scope="col">Deferred establishment fees</th>
          <th scope="col">Break costs</th>
          <th scope="col">Other associated exit costs</th>
          <th scope="col">Total bank fees (applicatiion, valuation, etc.)</th>
          <th scope="col">LMI - added to loan</th>
          <th scope="col">Mortgage registration</th>
          <th scope="col">Other associated entry costs</th>
          <th scope="col">Once-off refinance cost (A+B)</th>
          <th scope="col">Total funds required ( C )</th>
          <th scope="col">Required loan amount (D)</th>
          <th scope="col">Surplus/Customer contribution (D-C)</th>
          <th scope="col">Interest rate (Current)</th>
          <th scope="col">Interest rate (Proposed)</th>
          <th scope="col">Loan term in months (Current)</th>
          <th scope="col">Loan term in months (proposed)</th>
          <th scope="col">Monthly home loan repayment (P&I) (Current)</th>
          <th scope="col">Monthly home loan repayment (P&I) (Proposed)</th>
          <th scope="col">Annual ongoing fees (Current)</th>
          <th scope="col">Annual ongoing fees (Proposed)</th>
          <th scope="col">Annual Benifits</th>
          <th scope="col">Cashback deposit</th>
          <th scope="col">Savings over the proposed loan term</th>
          <th scope="col">Additional monthly repayment</th>
          <th scope="col">Savings over the loan term with additional monthly repayment</th>
          <th scope="col">First Principal</th>
          <th scope="col">Second Principal</th>
          <th scope="col">First Interest</th>
          <th scope="col">Second Interest</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM users WHERE id = {$userid} ";  
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
                    $first_interest = $row['first_interest']; 
                    $second_interest = $row['second_interest']; 
                    $repayment_loan_months_proposed = $row['repayment_loan_months_proposed']; 
                    $annual_ongoing_fees_months = $row['annual_ongoing_fees_months']; 
                    $interest_rate_proposed = $row['interest_rate_proposed'];  
                    $loan_months_proposed = $row['loan_months_proposed']; 

                        echo "<tr >";
                        echo " <td > {$id}</td>";
                        echo " <td > {$user}</td>";
              echo " <td > {$email}</td>";
              echo " <td >{$loans} </td>";
              echo " <td >{$addfunds} </td>";
              echo " <td >{$discharge_fees} </td>";
              echo " <td >{$establishment_fees} </td>";
              echo " <td >{$break_cost} </td>";
              echo " <td >{$exit_cost} </td>";
              echo " <td >{$bank_fees} </td>";
              echo " <td >{$added_loan} </td>";
              echo " <td >{$mortage_registration} </td>";
              echo " <td >{$associated_cost} </td>";
              echo " <td >{$refinance_cost} </td>";
              echo " <td >{$total_funds_required} </td>";
              echo " <td >{$required_loan_amount} </td>";
              echo " <td >{$customer_contribution} </td>";
              echo " <td >{$interest_rate_current} </td>";
              echo " <td >{$interest_rate_proposed} </td>";
              echo " <td >{$loan_months_current} </td>";
              echo " <td >{$loan_months_proposed} </td>";
              echo " <td >{$repayment_loan_months_current} </td>";
              echo " <td >{$repayment_loan_months_proposed} </td>";
              echo " <td >{$annual_ongoing_fees_current} </td>";
              echo " <td >{$annual_ongoing_fees_months} </td>";
              echo " <td >{$annual_benifits} </td>";
              echo " <td >{$Cashback_deposit} </td>";
              echo " <td >{$savings_over_the_proposed_loan} </td>";
              echo " <td >{$additional_monthly_repayment} </td>";
              echo " <td >{$loan_term_with_additional_monthly_repayment} </td>";
              echo " <td >{$first_principal} </td>";
              echo " <td >{$second_principal} </td>";
              echo " <td >{$first_interest} </td>";
              echo " <td >{$second_interest} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>