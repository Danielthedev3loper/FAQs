<?php
class Faq {
    public $questions = array(
        'I forgot my password. What should I do?' => 'Go to the login page and click “Forgot Password?” Follow the instructions to reset your password.',
        'Is my personal information secure on your website?' => 'Yes, we prioritize user privacy and use encrypted technology to keep your information secure. For more details, refer to our Privacy Policy.',
        'How do I contact customer support?' => 'You can contact us by filling out the form on our “Contact Us” page or by emailing us at [your email address].',
        'Can I delete my account?' => 'Yes, if you wish to delete your account, please contact our support team for assistance. Note that this action is permanent and will remove all your data from our system.',
        'Do you offer a newsletter subscription?' => 'Yes! You can sign up for our newsletter to receive updates on new posts, exclusive content, and special offers.'
    );

    public function displayFaq() {
        foreach ($this->questions as $question => $answer) {
            echo '<div class="col-md-6 col-lg-4 mb-4">';
            echo '    <div class="card faq-card shadow-sm border-0">';
            echo '        <div class="card-header bg-transparent border-0" id="heading' . md5($question) . '">';
            echo '            <h5 class="mb-0">';
            echo '                <button class="btn btn-link question-btn" data-toggle="collapse" data-target="#collapse' . md5($question) . '" aria-expanded="false" aria-controls="collapse' . md5($question) . '">';
            echo                    $question;
            echo '                </button>';
            echo '            </h5>';
            echo '        </div>';
            echo '        <div id="collapse' . md5($question) . '" class="collapse" aria-labelledby="heading' . md5($question) . '" data-parent="#faqAccordion">';
            echo '            <div class="card-body">';
            echo                    $answer;
            echo '            </div>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Frequently Asked Questions</h1>
    <div class="row" id="faqAccordion">
        <?php
        $faq = new Faq();
        $faq->displayFaq();
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>