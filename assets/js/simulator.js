'use strict';

// Sections & div's containers
const introSection = document.querySelector('#intro-section');
const simulationSection = document.querySelector('#simulation-section');
const situationContainer = document.querySelector('#situation-container');

// Button containers
const startBtn = document.querySelector('#start-button');

const setup = () => {
  console.log('Content is loaded');

  // Add event listeners
  startBtn.addEventListener('click', showSimulation);
};

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