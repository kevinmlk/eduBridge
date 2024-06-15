'use strict';

// Sections & div's containers
const introSection = document.querySelector('#intro-section');
const simulationSection = document.querySelector('#simulation-section');
const situationContainer = document.querySelector('#situation-container');
const educationContainer = document.querySelector('#education-container');

// Button containers
const startBtn = document.querySelector('#start-button');
// Situation options
const optionParent = document.querySelector('#option-parent');
const optionAdult = document.querySelector('#option-adult');
const optionMinor = document.querySelector('#option-minor');

const setup = () => {
  console.log('Content is loaded');

  // Add event listeners - start
  startBtn.addEventListener('click', showSimulation);
  // Event listeners - situation options
  optionMinor.addEventListener('click', showMinorRoute);
};

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