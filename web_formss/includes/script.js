function calc()
          { //storing user values for Refinancing loans - total outstanding balances

            var loans = parseInt(document.getElementById('loans').value);
            var addfunds = parseInt(document.getElementById('addfunds').value);
            var discharge_fees = parseInt(document.getElementById('discharge_fees').value);
            var establishment_fees = parseInt(document.getElementById('establishment_fees').value);
            var break_cost = parseInt(document.getElementById('break_cost').value);
            var exit_cost = parseInt(document.getElementById('exit_cost').value);
            var bank_fees = parseInt(document.getElementById('bank_fees').value);
            var mortage_registration = parseInt(document.getElementById('mortage_registration').value);
            var added_loan = parseInt(document.getElementById('added_loan').value);
            var associated_cost = parseInt(document.getElementById('associated_cost').value);
            var refinance_cost = document.getElementById('refinance_cost').value = discharge_fees + establishment_fees + break_cost + exit_cost + bank_fees + mortage_registration + added_loan + associated_cost;
            var total_funds_required = document.getElementById('total_funds_required').value =  loans + refinance_cost;
            var required_loan_amount = document.getElementById('required_loan_amount').value = loans + addfunds;
            var customer_contribution = document.getElementById('customer_contribution').value = required_loan_amount - total_funds_required;
            var interest_rate_current = parseFloat(document.getElementById('interest_rate_current').value);
            var interest_rate_proposed = parseFloat(document.getElementById('interest_rate_proposed').value);
            var loan_months_current = parseInt(document.getElementById('loan_months_current').value);
            var Cashback_deposit = parseInt(document.getElementById('Cashback_deposit').value);
            var loan_months_proposed = parseInt(document.getElementById('loan_months_proposed').value);
            var additional_monthly_repayment = parseInt(document.getElementById('additional_monthly_repayment').value);
            var loan_term_with_additional_monthly_repayment = parseInt(document.getElementById('loan_term_with_additional_monthly_repayment').value);
            
           
         //   var first_principal = document.getElementById('first_principal').value = (required_loan_amount / 360);


            var first_principal = required_loan_amount / 360;
            var new_first_principal = first_principal.toFixed(2);
            document.getElementById('first_principal').value = new_first_principal;
            
            

          //  var second_principal = document.getElementById('second_principal').value = required_loan_amount / 360;
           
          var second_principal = required_loan_amount / 360;
            var new_second_principal = second_principal.toFixed(2);
            document.getElementById('second_principal').value = new_second_principal; 
          
          
          var first_interest_partone = (required_loan_amount * interest_rate_current * 30) / 36000;
            var first_interest = first_interest_partone;
            document.getElementById('first_interest').value = first_interest.toFixed(2);

            var second_interest_partone = (required_loan_amount * interest_rate_proposed * 30) / 36000;
            var second_interest = second_interest_partone;
            document.getElementById('second_interest').value = second_interest.toFixed(2);
          
      /*problem part - 1  
            var second_interest_partone = (required_loan_amount * interest_rate_current * 30) / 36000;
            var new_second_interest_partone = second_interest_partone.toFixed(2);
            var second_interest = document.getElementById('second_interest').value = new_second_interest_partone;
          */

            var repayment_loan_months_current = first_principal + first_interest;
            repayment_loan_months_current = repayment_loan_months_current;
            document.getElementById('repayment_loan_months_current').value =  repayment_loan_months_current.toFixed(2);
            
            var repayment_loan_months_proposed = second_principal + second_interest;
            repayment_loan_months_proposed = repayment_loan_months_proposed;
            document.getElementById('repayment_loan_months_proposed').value = repayment_loan_months_proposed.toFixed(2);
            

            var annual_ongoing_fees_current = parseInt(document.getElementById('annual_ongoing_fees_current').value);

            var annual_ongoing_fees_months = parseInt(document.getElementById('annual_ongoing_fees_months').value);
            //annual benifits 

            var phase_one = repayment_loan_months_current - repayment_loan_months_proposed;
            var phase_two = phase_one * 12;

            var phase_three = annual_ongoing_fees_current - annual_ongoing_fees_months;
            var annual_benifits =  phase_two + phase_three;
            annual_benifits =  annual_benifits;
            annual_benifits =  document.getElementById('annual_benifits').value = annual_benifits.toFixed(2);

            
/*
            var annual_benifits =  document.getElementById('annual_benifits').value =  phase_two + phase_three;
            
            var annual_benifits =  annual_benifits.toFixed(2);
            */
            /*

            var savings_over_the_proposed_loan = document.getElementById('savings_over_the_proposed_loan').value = annual_benifits * 30;
                */          
            var proposed_loan = annual_benifits * 30;

            var savings_over_the_proposed_loan = proposed_loan + Cashback_deposit;
            savings_over_the_proposed_loan = savings_over_the_proposed_loan;
            document.getElementById('savings_over_the_proposed_loan').value = savings_over_the_proposed_loan.toFixed(2);
        


            //Savings over the loan term with additional monthly repayment	

            var long_ago_one = (additional_monthly_repayment * interest_rate_proposed * 1) / 100;

            var long_ago_two = (long_ago_one * loan_months_proposed) + savings_over_the_proposed_loan;

            loan_term_with_additional_monthly_repayment =  long_ago_two ;
            
            document.getElementById('loan_term_with_additional_monthly_repayment').value = loan_term_with_additional_monthly_repayment.toFixed(2);
        }