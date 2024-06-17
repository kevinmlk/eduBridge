'use strict';

// Sections & div's containers
const introSection = document.querySelector('#intro-section');
const simulationSection = document.querySelector('#simulation-section');
const situationContainer = document.querySelector('#situation-container');
const educationContainer = document.querySelector('#education-container');
const eduPastContainer = document.querySelector('#education-past-container');
const behalfOfContainer = document.querySelector('#behalf-of-container');
const schooltoeslagContainer = document.querySelector('#schooltoeslag-container');

// Button containers
const startBtn = document.querySelector('#start-button');
// Situation options
const optionParent = document.querySelector('#option-parent');
const optionAdult = document.querySelector('#option-adult');
const optionMinor = document.querySelector('#option-minor');
// Education options
const optionUniversity = document.querySelector('#option-university');
const optionCollege = document.querySelector('#option-college');
// Edu past options
const optionEduPastYes = document.querySelector('#edupast-option-yes');
const optionEduPastNo = document.querySelector('#edupast-option-no');
// Behalf of options
const optionBehalfOfYes = document.querySelector('#behalf-of-option-yes');
const optionBehalfOfNo = document.querySelector('#behalf-of-option-no');
// Schooltoeslag options
const optionSchooltoeslagYes = document.querySelector('#schooltoeslag-option-yes');
const optionSchooltoeslagNo = document.querySelector('#schooltoeslag-option-no');

const setup = () => {
  console.log('Content is loaded');

  // Add event listeners - start
  startBtn.addEventListener('click', showSimulation);
  // Event listeners - situation options
  optionMinor.addEventListener('click', showMinorRoute);
  // Event listeners - education options
  optionUniversity.addEventListener('click', showHighEduRoute);
  optionCollege.addEventListener('click', showHighEduRoute);
  // Event listeners - edu past options
  optionEduPastYes.addEventListener('click', showStudyPointsRoute);
  optionEduPastNo.addEventListener('click', showBehalfOfRoute);
  // Event listeners - behalf of options
  optionBehalfOfYes.addEventListener('click', showSchooltoeslagRoute);
  optionBehalfOfNo.addEventListener('click', showIncomeRoute);
  // Event listeners - schooltoeslag options
  optionSchooltoeslagYes.addEventListener('click', showPositiveResult);
  optionSchooltoeslagNo.addEventListener('click', showNegativeResult);
  // Add event listeners - end
};

// Function that displays the positive results of the simulation
const showPositiveResult = () => {
  if (!schooltoeslagContainer.classList.contains('d-none')) {
    schooltoeslagContainer.classList.add('d-none');
    
    if (postiveContainer.classList.contains('d-none')) {
      positiveContainer.classList.remove('d-none');
    }
  }
}

// Function that displays the schooltoeslag route
const showSchooltoeslagRoute = () => {
  if (!behalfOfContainer.classList.contains('d-none')) {
    behalfOfContainer.classList.add('d-none');
    
    if (schooltoeslagContainer.classList.contains('d-none')) {
      schooltoeslagContainer.classList.remove('d-none');
    }
  }
}

// Function that displays the study points route
const showStudyPointsRoute = () => {
  if (!eduPastContainer.classList.contains('d-none')) {
    eduPastContainer.classList.add('d-none');
    
    if (behalfOfContainer.classList.contains('d-none')) {
      behalfOfContainer.classList.remove('d-none');
    }
  }
}

// Function that displays the study points route
const showBehalfOfRoute = () => {
  if (!eduPastContainer.classList.contains('d-none')) {
    eduPastContainer.classList.add('d-none');
    
    if (behalfOfContainer.classList.contains('d-none')) {
      behalfOfContainer.classList.remove('d-none');
    }
  }
}

// Function that displays the high education route
const showHighEduRoute = () => {
  if (!educationContainer.classList.contains('d-none')) {
    educationContainer.classList.add('d-none');
    
    if (eduPastContainer.classList.contains('d-none')) {
      eduPastContainer.classList.remove('d-none');
    }
  }
}

// Function that displays the minor route
const showMinorRoute = () => {
  if (!situationContainer.classList.contains('d-none')) {
    situationContainer.classList.add('d-none');

    if (educationContainer.classList.contains('d-none')) {
      educationContainer.classList.remove('d-none');
    }
  }
}

// Function that displays the simulation and hides the intro
const showSimulation = () => {
  if (!introSection.classList.contains('d-none')) {
    introSection.classList.add('d-none');

    if (simulationSection.classList.contains('d-none')) {
      simulationSection.classList.remove('d-none');
    }
  }
}

window.addEventListener('DOMContentLoaded', setup);