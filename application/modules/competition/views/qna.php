<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Exam Portal</title>

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/qna.css">
  <link rel="apple-touch-icon" href="<?= base_url() ?>apple-touch-icon.html">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/qna.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/iconfont.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/rev-settings.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.css" />

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/timer.scss" />
  <style>
    .banner {
      position: relative;
      width: 100%;
      height: 200px;
      background-color: #1c91a4;
      /* Baby Pink */
      overflow: hidden;
    }

    img {
      position: absolute;
      top: 30px;
      left: 100px;
      width: 100px;
      height: 300px;
      /* Adjust the size as needed */
      /* Center vertically */
      animation: slideIn 2s ease-in-out;
      /* Animation for entering from left */
    }

    .animated-text {
      position: absolute;
      top: 50px;
      left: 100px;
      /* Center vertically */
      font-family: "Courier New", Courier, monospace;
      right: 0;
      font-size: 35px;
      /* Adjust the font size as needed */
      animation: fadeIn 2s ease-in-out;
      /* Animation for text */
    }

    @keyframes slideIn {
      0% {
        transform: translateX(-100%);
      }

      100% {
        transform: translateX(0);
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }
  </style>
</head>

<body>

  <div class="row">
    <div class="banner">
      <div class="row">
        <div class="col-6">
          <img src="<?= base_url() ?>assets/images/spaceno_bg.png" alt="Your Image">
        </div>
        <div class="col-6">
          <div class="animated-text"><h1>Welcome to Our Exam</h1></div>
        </div>
      </div>
    </div>
    <section id="question-container">

      <div class="row">
        <div class="col-9">
          <div id="question"></div>
          <div><input type="text" id="static-input" value="This is a static input"></div>



        </div>
        <div class="col-3">
          <div id="options"></div>
          <div id="question-palette"></div>
        </div>
      </div>
      <div class="row">
        <div class= "col-6">

      <button id="next-btn">Next</button>
        </div>
        <div class= "col-6">
        <button id="next-btn">Submit</button>
        </div>
      </div>
    </section>



    <script>
      const questions = [
        {
          question: "What is the SI unit of force?",
          options: ["Newton", "Joule", "Watt", "Pascal"],
          answer: "Newton"
        },
        {
          question: "What is the SI unit of force?",
          options: ["Newton", "Joule", "Watt", "Pascal"],
          answer: "Newton"
        },
        {
          question: "Question 3?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 4?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 5?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 6?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 7?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 8?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 9?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 10?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 11?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        },
        {
          question: "Question 12?",
          options: ["Option 1", "Option 2", "Option 3", "Option 4"],
          answer: "Option 3"
        }

        // Add more questions here

      ];

      const questionElement = document.getElementById('question');
      const optionsElement = document.getElementById('options');
      const nextButton = document.getElementById('next-btn');
      const questionPalette = document.getElementById('question-palette');

      let currentQuestionIndex = 0;

      function displayQuestion(index) {
        const currentQuestion = questions[index];
        questionElement.textContent = `Question ${index + 1}: ${currentQuestion.question}`;
        optionsElement.innerHTML = '';

        // No need to create radio buttons and labels
      }

      function updateQuestionPalette() {
        questionPalette.innerHTML = '';
        for (let i = 0; i < questions.length; i++) {
          const button = document.createElement('button');
          button.textContent = i + 1;
          button.addEventListener('click', () => {
            currentQuestionIndex = i;
            displayQuestion(currentQuestionIndex);
          });
          questionPalette.appendChild(button);
        }
      }

      nextButton.addEventListener('click', () => {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
          displayQuestion(currentQuestionIndex);
        } else {
          // Display result or handle end of questions
        }
      });

      // Initial setup
      displayQuestion(currentQuestionIndex);
      updateQuestionPalette();
      // JavaScript code to update the timer
      const hoursElement = document.getElementById('hours');
      const minutesElement = document.getElementById('minutes');

      let hoursLeft = 3;
      let minutesLeft = 0;

      function updateTimer() {
        minutesLeft--;
        if (minutesLeft < 0) {
          hoursLeft--;
          minutesLeft = 59;
        }

        if (hoursLeft < 0) {
          // Handle end of time
          hoursLeft = 0;
          minutesLeft = 0;
          clearInterval(timerInterval);
        }

        hoursElement.textContent = hoursLeft.toString().padStart(2, '0');
        minutesElement.textContent = minutesLeft.toString().padStart(2, '0');
      }

      // Call updateTimer every minute (60,000 milliseconds)
      const timerInterval = setInterval(updateTimer, 60000);

      // Initial update
      updateTimer();
    </script>
</body>

</html>