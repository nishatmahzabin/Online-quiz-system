// Handling login
document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Hardcoded login credentials
    const correctUsername = "user";
    const correctPassword = "password123";

    if (username === correctUsername && password === correctPassword) {
        document.getElementById("login-container").style.display = "none";  // Hide login form
        document.getElementById("quiz-container").style.display = "block";   // Show quiz form
    } else {
        alert("Invalid username or password. Please try again.");
    }
});

// Quiz form validation
document.getElementById("quiz-form").addEventListener("submit", function(event) {
    let isValid = true;
    const questions = document.querySelectorAll('.question');

    questions.forEach(function(question) {
        const radioButtons = question.querySelectorAll('input[type="radio"]');
        const isSelected = Array.from(radioButtons).some(radio => radio.checked);
        if (!isSelected) {
            isValid = false;
            question.classList.add("invalid"); // Mark the unanswered question
        } else {
            question.classList.remove("invalid"); // Remove red border if answered
        }
    });

    if (!isValid) {
        event.preventDefault();  // Prevent form submission if some questions are unanswered
        alert("Please answer all questions.");
    }
});
