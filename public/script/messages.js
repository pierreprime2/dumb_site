const toggleTableButton = document.getElementById('private_messages');
const closeMessagesButton = document.getElementById('close_button');
const overlay = document.getElementById('overlay');
const centeredTable = document.getElementById('centered_table');
const centeredTableHeader = document.getElementById('centered_table_header');
const centeredTableFooter = document.getElementById('centered_table_footer');

function toggleMessages() {
    if (centeredTable.style.display === 'block') {
        centeredTable.style.display = 'none'; // Hide the centered table
        centeredTableHeader.style.display = 'none';
        centeredTableFooter.style.display = 'none';
        overlay.style.display = 'none'; // Hide the overlay
    } else {
        overlay.style.display = 'block'; // Show the overlay
        centeredTable.style.display = 'block'; // Show the centered table
        centeredTableHeader.style.display = 'block';
        centeredTableFooter.style.display = 'block';
    }
}

toggleTableButton.addEventListener('click', toggleMessages);

closeMessagesButton.addEventListener('click', toggleMessages);

overlay.addEventListener('click', (event) => {
    event.stopPropagation();
});

document.addEventListener('keydown', (event) => {
    const focusedElement = document.activeElement;
    const allowedInputTypes = ['text', 'email', 'password', 'textarea'];

    if (event.key === 'm' && !allowedInputTypes.includes(focusedElement.type)) {
        toggleMessages();
    }
});

// window.addEventListener('DOMContentLoaded', function () {
//     let tbody = document.getElementById('message_display_tbody');
//     let lastRow = tbody.lastElementChild;
//     let remainingHeight = document.getElementById('message_display').clientHeight - tbody.clientHeight;
//     lastRow.style.height = remainingHeight + 'px';
// });