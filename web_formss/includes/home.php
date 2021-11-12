<!-- Header -->
<?php include "../header.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <div class="container-fluid">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Add Refinancing Calculator</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
          <th scope="col" class="ids">ID</th>
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
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
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
              echo " <th scope='row' class='stud_id' >{$id}</th>";
              echo " <td > {$user}</td>";
              echo " <td > {$email}</td>";
              echo " <td >{$loans} </td>";
              echo " <td >{$addfunds} </td>";
              echo " <td class='ids' >{$discharge_fees} </td>";
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
              echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?user_id={$id}' class='btn btn-secondary' ><i class='bi bi-pencil'></i> EDIT</a> </td>";
              echo " <td class='text-center'><a href='' class='btn btn-danger delete_btn'> <i class='bi bi-trash'></i> DELETE</a></td>";
             // echo " <td   class='text-center'> <button type='button' class='btn btn-danger deletebtn'>Delete</button> </td>";
              echo " </tr> ";

                  }
                ?>
              </tr>
            </tbody>
        </table>
  </div>

  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Student Data</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
       <span aria-hidden="true">&times;</span>
      </div>

      <form action="delete.php" method="POST">
      <div class="modal-body">
      <input type="hidden" name="delete_id" id="delete_id">
    <h4>Do You want to Delete this data  ??</h4>
    </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> No </button>
        
        <!-- <a href='delete.php?user_id={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a>  -->
        <button type="submit" name="deletedata" class="btn btn-primary">Yes !! Delete it.</button>
      </div>
      </form>

    </div>

          </div>
  </div>
</div>



<script>
           $(document).ready(function () {

           $('.delete_btn').click(function (e) {
             e.preventDefault();

             var stud_id = $(this).closest('tr').find('.stud_id').text();
             $('#deletemodal').modal('show');
             $('#delete_id').val(stud_id);
             console.log(stud_id);
           });

             /*  $('.deletebtn').on('click', function() {

                     $('#deletemodal').modal('show');
                       
                     $tr = $(this).closest('tr');

                     var data = $tr.children("td").map(function() {
                         return $(this).text();

                     }).get();

                     console.log(data);

                     $('#delete_id').val(data[0]);
             });*/
           });
</script>
<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>
   
<!-- Footer -->
<?php include "../footer.php" ?>
