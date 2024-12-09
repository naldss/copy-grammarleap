import 'bootstrap';

// +++ REGISTER MODAL +++

// Function to load the modal content from an external file
function loadModal() {
    fetch('/register-modal') // Adjust the path if necessary
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('modalContainer').innerHTML = data;
            initializeModal(); // Initialize modal functionality
        })
        .catch(error => {
            console.error('Error loading modal:', error.message); // Log only the error message
        });
}
// Function to initialize modal events
function initializeModal() {
    // Get the modal
    const modal = document.getElementById('myModal');

    // Get the button that opens the modal
    const openModalBtn = document.getElementById('openModalBtn');

    // Get the <span> element that closes the modal
    const closeModalSpan = document.querySelector('.close');

    // When the user clicks the button, open the modal
    openModalBtn.addEventListener('click', () => {
        modal.style.display = 'flex';
    });

    // When the user clicks on <span> (x), close the modal
    closeModalSpan.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
}

// Load modal content when the document is ready
document.addEventListener('DOMContentLoaded', loadModal);


