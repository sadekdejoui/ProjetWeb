// Wait for DOM content to load
document.addEventListener('DOMContentLoaded', () => {
    // Select elements
    const showNotifications = document.getElementById('showNotifications');
    const notificationsModal = document.getElementById('notificationsModal');
    const closeModal = document.getElementById('closeModal');
    const notificationsList = document.getElementById('notificationsList');

    // Function to fetch notifications from the server
    async function fetchNotifications() {
        try {
            // Fetch data from the server
            const response = await fetch('fetch_notifFRONT.php');
            if (!response.ok) throw new Error('Failed to fetch notifications');
            
            const data = await response.json();

            // Check if data is an array and contains notifications
            notificationsList.innerHTML = ''; // Clear the list
            if (Array.isArray(data) && data.length > 0) {
                data.forEach((notification) => {
                    // Assuming 'message' is a field in JSON data, adjust if needed
                    const notificationItem = document.createElement('div');
                    notificationItem.classList.add('notification-item');
                    notificationItem.textContent = notification.message || 'No message available';
                    notificationsList.appendChild(notificationItem);
                });
            } else {
                notificationsList.textContent = 'No notifications available.';
            }
        } catch (error) {
            console.error('Error fetching notifications:', error);
            notificationsList.textContent = 'An error occurred while fetching notifications.';
        }
    }

    // Show modal and fetch notifications
    if (showNotifications) {
        showNotifications.addEventListener('click', (event) => {
            event.preventDefault();
            if (notificationsModal) {
                notificationsModal.classList.add('active');
                fetchNotifications(); // Call the fetchNotifications function
            }
        });
    }

    // Close modal
    if (closeModal) {
        closeModal.addEventListener('click', () => {
            if (notificationsModal) {
                notificationsModal.classList.remove('active');
            }
        });
    }
});
