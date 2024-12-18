// Wait for DOM content to load
document.addEventListener('DOMContentLoaded', () => {
    const showNotifications = document.getElementById('showNotifications');
    const notificationsModal = document.getElementById('notificationsModal');
    const closeModal = document.getElementById('closeModal');
    const notificationsList = document.getElementById('notificationsList');

    // Function to fetch notifications from the server
    async function fetchNotifications() {
        try {
            // Fetch data from the server
            const response = await fetch('fetch_notifications.php');
            if (!response.ok) throw new Error('Failed to fetch notifications');
            
            const data = await response.json();

            // Clear the list and populate it with fetched notifications
            notificationsList.innerHTML = '';
            if (data.length > 0) {
                data.forEach((notification) => {
                    const notificationItem = document.createElement('div');
                    notificationItem.textContent = notification.message; // Assuming 'message' is a field in JSON
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
    showNotifications.addEventListener('click', (event) => {
        event.preventDefault();
        notificationsModal.classList.add('active');
        fetchNotifications();
    });

    // Close modal
    closeModal.addEventListener('click', () => {
        notificationsModal.classList.remove('active');
    });
});
