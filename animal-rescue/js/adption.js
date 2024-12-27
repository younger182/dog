// Get all adopt buttons
const adoptButtons = document.querySelectorAll('.adopt-btn');
const closeButtons = document.querySelectorAll('.close-btn');

// Show the popup corresponding to the clicked button
adoptButtons.forEach(button => {
    button.addEventListener('click', () => {
        const popupId = button.getAttribute('data-popup-id'); // Get popup ID
        const popup = document.getElementById(popupId);
        popup.style.display = 'block'; // Show popup
    });
});

// Close the popup
closeButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        const popup = e.target.closest('.popup-overlay'); // Find closest popup
        popup.style.display = 'none'; // Hide popup
    });
});

// Optional: Close popup when clicking outside the content
document.querySelectorAll('.popup-overlay').forEach(popup => {
    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            popup.style.display = 'none'; // Hide popup
        }
    });
});