const questions = [
    {
        question: "What is the capital of France?",
        answers: ["Paris", "London", "Rome", "Berlin"],
        correct: 0
    },
    {
        question: "What is 2 + 2?",
        answers: ["3", "4", "5", "6"],
        correct: 1
    },
    {
        question: "Which planet is known as the Red Planet?",
        answers: ["Earth", "Mars", "Jupiter", "Saturn"],
        correct: 1
    },
    {
        question: "Who wrote Romeo and Juliet?",
        answers: ["Charles Dickens", "William Shakespeare", "Jane Austen", "Mark Twain"],
        correct: 1
    },
    {
        question: "What is the largest mammal in the world?",
        answers:["African Elephant", "Blue Whale", "Giraffe", "Great White Shark"],
        corect: 1

    },
    {
        question: "In which country would you find the Great Pyramid of Giza?",
        answers: ["Greece" ,"Egypt" ,"Mexico" ,"China"],
        correct: 1

    },
    {
        question: "What is the hardest natural substance on Earth?",
        answers: ["Gold ","Iron" ,"Diamond", "Platinum "],
        correct : 2
    },
    {
        
    }

    
];

let currentQuestionIndex = 0;
let score = 0;

const questionContainer = document.querySelector('.question-container');
const answersContainer = document.querySelector('.answers-container');
const nextButton = document.querySelector('.next-button');
const scoreContainer = document.querySelector('.score-container');

function showQuestion() {
    const question = questions[currentQuestionIndex];
    questionContainer.textContent = question.question;
    answersContainer.innerHTML = '';

    question.answers.forEach((answer, index) => {
        const button = document.createElement('button');
        button.className = 'answer-btn';
       button.style.backgroundColor="pink"
       button.style.marginLeft="30px"
      
        button.textContent = answer;
      
        button.addEventListener('click', () => handleAnswer(index));
        answersContainer.appendChild(button);
    });
}

function handleAnswer(selectedIndex) {
    const question = questions[currentQuestionIndex];
    if (selectedIndex === question.correct) {
        score++;
    }

    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        showQuestion();
    } else {
        showScore();
    }
}

function showScore() {
    questionContainer.textContent = '';
    answersContainer.innerHTML = '';
    nextButton.style.display = 'none';
    scoreContainer.textContent =const questions = [
        {
            question: "What is the capital of France?",
            answers: ["Paris", "London", "Rome", "Berlin"],
            correct: 0
        },
        {
            question: "What is 2 + 2?",
            answers: ["3", "4", "5", "6"],
            correct: 1
        },
        {
            question: "Which planet is known as the Red Planet?",
            answers: ["Earth", "Mars", "Jupiter", "Saturn"],
            correct: 1
        },
        {
            question: "Who wrote Romeo and Juliet?",
            answers: ["Charles Dickens", "William Shakespeare", "Jane Austen", "Mark Twain"],
            correct: 1
        },
        {
            question: "What is the largest mammal in the world?",
            answers:["African Elephant", "Blue Whale", "Giraffe", "Great White Shark"],
            corect: 1
    
        },
        {
            question: "In which country would you find the Great Pyramid of Giza?",
            answers: ["Greece" ,"Egypt" ,"Mexico" ,"China"],
            correct: 1
    
        },
        {
            question: "What is the hardest natural substance on Earth?",
            answers: ["Gold ","Iron" ,"Diamond", "Platinum "],
            correct : 2
        },
        {
            
        }
    
        
    ];
    
    let currentQuestionIndex = 0;
    let score = 0;
    
    const questionContainer = document.querySelector('.question-container');
    const answersContainer = document.querySelector('.answers-container');
    const nextButton = document.querySelector('.next-button');
    const scoreContainer = document.querySelector('.score-container');
    
    function showQuestion() {
        const question = questions[currentQuestionIndex];
        questionContainer.textContent = question.question;
        answersContainer.innerHTML = '';
    
        question.answers.forEach((answer, index) => {
            const button = document.createElement('button');
            button.className = 'answer-btn';
           button.style.backgroundColor="pink"
           button.style.marginLeft="30px"
          
            button.textContent = answer;
          
            button.addEventListener('click', () => handleAnswer(index));
            answersContainer.appendChild(button);
        });
    }
    
    function handleAnswer(selectedIndex) {
        const question = questions[currentQuestionIndex];
        if (selectedIndex === question.correct) {
            score++;
        }
    
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion();
        } else {
            showScore();
        }
    }
    
    function showScore() {
        questionContainer.textContent = '';
        answersContainer.innerHTML = '';
        nextButton.style.display = 'none';
        scoreContainer.textContent = `Your score: ${score}/${questions.length}`;
    }
    
    nextButton.addEventListener('click', () => {
        console.log("next-button")
        if (currentQuestionIndex <= questions.length-1) {
            currentQuestionIndex++
            showQuestion();
            
        } else {
            showScore();
        }
    });
    
    showQuestion();;
}

nextButton.addEventListener('click', () => {
    console.log("next-button")
    if (currentQuestionIndex <= questions.length-1) {
        currentQuestionIndex++
        showQuestion();
        
    } else {
        showScore();
    }
});

showQuestion();