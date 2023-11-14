<?php
  $clientName = htmlspecialchars($_POST['clientName']);
  $clientEmail = htmlspecialchars($_POST['clientEmail']);
  $clientPhone = htmlspecialchars($_POST['clientPhone']);
  $clientGender = htmlspecialchars($_POST['clientGender']);
  $clientWebsite = htmlspecialchars($_POST['clientWebsite']);
  $clientOccupation = htmlspecialchars($_POST['clientOccupation']);
  $projectName = htmlspecialchars($_POST['projectName']);
  $projectCompanyActivities = htmlspecialchars($_POST['projectCompanyActivities']);
  $projectSlogan = htmlspecialchars($_POST['projectSlogan']);
  $projectFoundationDate = htmlspecialchars($_POST['projectFoundationDate']);
  $projectWebsite = htmlspecialchars($_POST['projectWebsite']);
  $projectMsg = htmlspecialchars($_POST['projectMsg']);
  $stationary = htmlspecialchars($_POST['stationary']);
  $websiteUi = htmlspecialchars($_POST['websiteUi']);
  $packaging = htmlspecialchars($_POST['packaging']);
  $iconic = htmlspecialchars($_POST['iconic']);
  $typeface = htmlspecialchars($_POST['typeface']);
  $combined = htmlspecialchars($_POST['combined']);
  $range1 = htmlspecialchars($_POST['range1']);
  $range2 = htmlspecialchars($_POST['range2']);
  $range3 = htmlspecialchars($_POST['range3']);
  $range4 = htmlspecialchars($_POST['range4']);
  $range5 = htmlspecialchars($_POST['range5']);
  $question1 = htmlspecialchars($_POST['question1']);
  $question2 = htmlspecialchars($_POST['question2']);
  $question3 = htmlspecialchars($_POST['question3']);
  $question4 = htmlspecialchars($_POST['question4']);
  $question5 = htmlspecialchars($_POST['question5']);
  $question6 = htmlspecialchars($_POST['question6']);
  $question7 = htmlspecialchars($_POST['question7']);
  $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
  $designBudget = htmlspecialchars($_POST['designBudget']);

  if(!empty($clientEmail) && !empty($projectMsg)){
    if(filter_var($clientEmail, FILTER_VALIDATE_EMAIL)){
      $receiver = "ramocreative@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $clientName <$clientEmail>";
      $body = "Name: $clientName
        \nEmail: $clientEmail
        \nPhone: $clientPhone
        \nGender: $clientGender
        \nWebsite: $clientWebsite
        \nOccupation: $clientOccupation
        \n\nProject Name: $projectName
        \nCompany Activities: $projectCompanyActivities
        \nSlogan / Tagline: $projectSlogan
        \nFoundation Date: $projectFoundationDate
        \nWebsite: $projectWebsite
        \n\nMessage:\n$projectMsg
        \n\nRegards,\n$clientName
        \n\nStationary: $stationary
        \nWebsite UI: $websiteUi
        \nPackaging: $packaging
        \nLogo Type: Iconic($iconic) / Typeface($typeface) / Combined($combined) 
        \nrange1: $range1
      ";
      $sender = "From: $clientEmail";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>