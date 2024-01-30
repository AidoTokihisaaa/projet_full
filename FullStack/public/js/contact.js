const submitButton = document.querySelector('.btn-primary');

submitButton.addEventListener('mouseover', function() {
  this.style.backgroundColor = '#ff8c00';
  this.style.transform = 'scale(1.1)';
});

submitButton.addEventListener('mouseout', function() {
  this.style.backgroundColor = '#ffaa33';
  this.style.transform = 'scale(1)';
});

const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const messageInput = document.getElementById('message');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  if (nameInput.value === '' || emailInput.value === '' || messageInput.value === '') {
    alert('Veuillez remplir tous les champs du formulaire.');
  } else {
    alert('Formulaire envoyé avec succès !');
    form.reset();
  }
});

const icons = document.querySelectorAll('.fas');

icons.forEach(function(icon) {
  icon.addEventListener('mouseover', function() {
    this.style.transform = 'scale(1.2)';
  });

  icon.addEventListener('mouseout', function() {
    this.style.transform = 'scale(1)';
  });
});
