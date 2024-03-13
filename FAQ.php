<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="loging/img/logo.png" type="image">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>FAQ</title>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4"><i class="fas fa-question-circle"></i> Guidence For Task Management System</h2>

  <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
        Forgot Your Password
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          As a Employee First you need to inform your Supervisor. Send a mail about mention your issue. 
          Compulsary details (Attach these thing correctly your Mail) - Employee Name , Employee ID, Contact Number, Suggest Password (Optional).
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          How to Check My Task
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          In dashbord show Your all Task details. If you need to see more details or start the task follow these path.
          path - pages/Task/task_details.php
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          How get Backup of my Tasks
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          In This case you can follow the two steps. get backup every month of your tasks and keep safe. 
          Path 1 - pages/Task/task_details.php goto that path and click Excel (depend on how you need your report). This give you a complete task report.
          path 2 - pages/Summary/summary_report.php goto that path and click Excel (depend on how you need your report). This also give you a complete task report.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          How to report task or Accidentaly close the task
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Directly contact your supervisor and inform about that. Send official Company mail is compulsary. 
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          what to do Map show wrong coordinate or application crash or stuck
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Its may be a Technical issue. check your connection and your device first. still problem remain ask the company technical support. 
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-4">
    <button class="btn btn-primary" onclick="goBack()">Back</button>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="Login/css/faq_style.css">
<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
